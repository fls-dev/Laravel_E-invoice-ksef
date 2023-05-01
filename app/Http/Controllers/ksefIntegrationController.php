<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use mysql_xdevapi\Exception;

class ksefIntegrationController extends Controller
{


    public function saveMainToken()
//        Написать сохранение пользовательского токена потом из модалки
    {
        $users = DB::table('users')->get();

        return response('saveMainToken');
    }

    public function showPageUsers()
    {
        $users = DB::table('users')->get();

        return view('ksef.home', compact('users'));
    }

    public function userPage()
    {
        try {
            $id = request('id');
            $user = DB::table('users')->where('id', $id)->first();
            if ($user) {
                $name = $user->name;
                $session = DB::table('kser_active_sessions')->where('user_id', $id)->first();
                $status = false;
                if ($session) {
                    $status = $this->SessionStatus($session->sessionToken);
                }
                session(['user' => $user]);
//                $invoices = $this->InvoiceSync();
                return view('ksef.get_info_user', compact('user', 'name', 'status'));
            } else {
                return redirect()->route('home');
            }
        } catch (Exception $e) {
            return $e;
        }
    }


//REQUESTS to KSEF

    public function AuthorisationChallenge($nip)
    {
        try {
            $data = array(
                'contextIdentifier' => array(
                    'type' => 'onip',
                    'identifier' => $nip
                )
            );
            $curl = curl_init();
            curl_setopt_array($curl, array(
                CURLOPT_URL => 'https://ksef-test.mf.gov.pl/api//online/Session/AuthorisationChallenge',
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'POST',
                CURLOPT_POSTFIELDS => json_encode($data),
                CURLOPT_HTTPHEADER => array(
                    'Content-Type: application/json'
                ),
            ));
            $response = curl_exec($curl);
            curl_close($curl);
            $response = json_decode($response);

//            $fake = '{"timestamp":"2023-04-28T11:28:01.376Z","challenge":"20230428-CR-E774B6721B-94EF3EC867-89"}';
//            $response = json_decode($fake);
            return $response;
        } catch (Exception $e) {
            return false;
        }
    }

    public function SessionStatus($token): bool
    {
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://ksef-test.mf.gov.pl/api/online/Session/Status?PageSize=10&PageOffset=0&IncludeDetails=true',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => array(
                'SessionToken: ' . $token
            ),
        ));
        $response = curl_exec($curl);
        curl_close($curl);
        $response = json_decode($response);

        if (isset($response->timestamp)) {
            return true;
        } else {
            return false;
        }
    }

    public function InitToken()
    {
        try {
            $nip = session('user')->nip;
            $constantToken = session('user')->token;
            $authChallenge = $this->AuthorisationChallenge($nip);
            if ($authChallenge) {
                $timestamp = strtotime($authChallenge->timestamp) * 1000;
                $string = sprintf("%s|%s", $constantToken, $timestamp);
                $public_key = file_get_contents('files/publicKey.pem');
                openssl_public_encrypt($string, $encrypted, $public_key);
                $token = base64_encode($encrypted);
                $str = '<?xml version="1.0" encoding="UTF-8" standalone="no"?>
<ns3:InitSessionTokenRequest xmlns:ns3="http://ksef.mf.gov.pl/schema/gtw/svc/online/auth/request/2021/10/01/0001" xmlns="http://ksef.mf.gov.pl/schema/gtw/svc/online/types/2021/10/01/0001" xmlns:ns2="http://ksef.mf.gov.pl/schema/gtw/svc/types/2021/10/01/0001">
<ns3:Context>
	<Challenge>' . $authChallenge->challenge . '</Challenge>
	<Identifier xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:type="ns2:SubjectIdentifierByCompanyType">
		<ns2:Identifier>' . $nip . '</ns2:Identifier>
	</Identifier>
	<DocumentType>
		<ns2:Service>KSeF</ns2:Service>
		<ns2:FormCode>
			<ns2:SystemCode>FA (1)</ns2:SystemCode>
			<ns2:SchemaVersion>1-0E</ns2:SchemaVersion>
			<ns2:TargetNamespace>http://crd.gov.pl/wzor/2021/11/29/11089/</ns2:TargetNamespace>
			<ns2:Value>FA</ns2:Value>
		</ns2:FormCode>
	</DocumentType>
	<Token>' . $token . '</Token>
</ns3:Context>
</ns3:InitSessionTokenRequest>';
                $curl = curl_init();
                curl_setopt_array($curl, array(
                    CURLOPT_URL => 'https://ksef-test.mf.gov.pl/api//online/Session/InitToken',
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_ENCODING => '',
                    CURLOPT_MAXREDIRS => 10,
                    CURLOPT_TIMEOUT => 0,
                    CURLOPT_FOLLOWLOCATION => true,
                    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                    CURLOPT_CUSTOMREQUEST => 'POST',
                    CURLOPT_POSTFIELDS => $str,
                    CURLOPT_HTTPHEADER => array(
                        'Content-Type: application/octet-stream'
                    ),
                ));
                $response = curl_exec($curl);
                curl_close($curl);
//                $res = "{\"timestamp\":\"2023-04-29T10:12:06.450Z\",\"referenceNumber\":\"20230429-SE-56B92E3E78-E790828C0B-54\",\"sessionToken\":{\"token\":\"8717d06c77d9ff51f40c1e1d0e1f337fec99bf2477c4e2165539274d190ca55f\",\"context\":{\"contextIdentifier\":{\"type\":\"onip\",\"identifier\":\"8888888888\"},\"contextName\":{\"type\":\"fn\",\"tradeName\":null,\"fullName\":\"CN_8888888888\"},\"credentialsRoleList\":[{\"type\":\"token\",\"roleType\":\"invoice_read\",\"roleDescription\":\"test_user_2\",\"startTimestamp\":\"2023-04-28T10:48:29.418Z\"},{\"type\":\"token\",\"roleType\":\"invoice_write\",\"roleDescription\":\"test_user_2\",\"startTimestamp\":\"2023-04-28T10:48:29.418Z\"},{\"type\":\"token\",\"roleType\":\"credentials_read\",\"roleDescription\":\"test_user_2\",\"startTimestamp\":\"2023-04-28T10:48:29.418Z\"},{\"type\":\"token\",\"roleType\":\"credentials_manage\",\"roleDescription\":\"test_user_2\",\"startTimestamp\":\"2023-04-28T10:48:29.418Z\"},{\"type\":\"granted\",\"roleType\":\"court_bailiff\",\"roleDescription\":\"testowy komornik CN8\",\"startTimestamp\":\"2021-12-13T03:19:51.305Z\",\"roleGrantorIdentifier\":{\"type\":\"onip\",\"identifier\":\"8888888888\"}},{\"type\":\"granted\",\"roleType\":\"self_invoicing\",\"roleDescription\":\"ABS Tax\",\"startTimestamp\":\"2023-01-27T09:54:29.898Z\",\"roleGrantorIdentifier\":{\"type\":\"onip\",\"identifier\":\"7777777777\"}},{\"type\":\"granted\",\"roleType\":\"self_invoicing\",\"roleDescription\":\"Podmiot testowy samofakturowanie\",\"startTimestamp\":\"2023-01-26T08:20:45.507Z\",\"roleGrantorIdentifier\":{\"type\":\"onip\",\"identifier\":\"9999999999\"}},{\"type\":\"granted\",\"roleType\":\"self_invoicing\",\"roleDescription\":\"Administracja\",\"startTimestamp\":\"2022-09-05T12:12:05.135Z\",\"roleGrantorIdentifier\":{\"type\":\"onip\",\"identifier\":\"5260151365\"}},{\"type\":\"granted\",\"roleType\":\"self_invoicing\",\"roleDescription\":\"5t5r45tr\",\"startTimestamp\":\"2023-04-06T12:32:00.210Z\",\"roleGrantorIdentifier\":{\"type\":\"onip\",\"identifier\":\"9731007458\"}}]}}}";
                $response = json_decode($response);

                $save = DB::table('kser_active_sessions')->updateOrInsert(
                    ['user_id' => session('user')->id],
                    [
                        'timestamp' => $response->timestamp,
                        'referenceNumber' => $response->referenceNumber,
                        'sessionToken' => $response->sessionToken->token,
                    ]
                );
            }
            return back()->withInput();
        } catch (\Exception $e) {
            return $e;
        }
    }
    public function InvoiceSyncFilter()
    {

        $data = request('data');
        $from = Carbon::parse($data['dataFrom'])->toDateTimeLocalString();
        $to = Carbon::parse($data['dataTo'])->toDateTimeLocalString();
        $type = $data['type'];
        $userSession = DB::table('kser_active_sessions')->where('user_id',session('user')->id )->first();
        $token = $userSession->sessionToken;

        $data = array(
            'queryCriteria'=>array(
                'type'=>'range',
                'subjectType'=>$type,
                'invoicingDateFrom'=>$from,
                'invoicingDateTo'=>$to
            )
        );
//        $curl = curl_init();
//        curl_setopt_array($curl, array(
//            CURLOPT_URL => 'https://ksef-test.mf.gov.pl/api//online/Query/Invoice/Sync?PageSize=30&PageOffset=0',
//            CURLOPT_RETURNTRANSFER => true,
//            CURLOPT_ENCODING => '',
//            CURLOPT_MAXREDIRS => 10,
//            CURLOPT_TIMEOUT => 0,
//            CURLOPT_FOLLOWLOCATION => true,
//            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
//            CURLOPT_CUSTOMREQUEST => 'POST',
//            CURLOPT_POSTFIELDS =>json_encode($data),
//            CURLOPT_HTTPHEADER => array(
//                'SessionToken: '.$token,
//                'Content-Type: application/json'
//            ),
//        ));
//        $invoices = curl_exec($curl);
//        curl_close($curl);
//        return $invoices;
//        dd(json_decode($invoices));
        $invoices = '[
        {
            "invoiceReferenceNumber": "FV2022/08/0359",
            "ksefReferenceNumber": "1111111111-20230425-AA2783-ECCE1F-5E",
            "invoiceHash": {
                "hashSHA": {
                    "algorithm": "SHA-256",
                    "encoding": "Base64",
                    "value": "Qxqi22jLO/zdBWJsHmBaJ0zGQLLxPjKPuZLODjgC73I="
                },
                "fileSize": 5429
            },
            "invoicingDate": "2023-04-25",
            "acquisitionTimestamp": "2023-04-25T12:23:00.889Z",
            "subjectBy": {
                "issuedByIdentifier": {
                    "type": "onip",
                    "identifier": "1111111111"
                },
                "issuedByName": {
                    "type": "fn",
                    "tradeName": null,
                    "fullName": "ABC Developex SA"
                }
            },
            "subjectTo": {
                "issuedToIdentifier": {
                    "type": "none"
                },
                "issuedToName": {
                    "type": "pn",
                    "tradeName": null,
                    "firstName": "Jan",
                    "surname": "Kowalski"
                }
            },
            "subjectsOtherList": [
                {
                    "issuedToIdentifier": {
                        "type": "none"
                    },
                    "issuedToName": {
                        "type": "pn",
                        "tradeName": null,
                        "firstName": "Grażyna",
                        "surname": "Kowalska"
                    },
                    "subjectOtherType": "additional_purchaser"
                },
                {
                    "issuedToIdentifier": {
                        "type": "onip",
                        "identifier": "9999999999"
                    },
                    "issuedToName": {
                        "type": "fn",
                        "tradeName": null,
                        "fullName": "ABC Developex sp. z o. o."
                    },
                    "subjectOtherType": "original_subject"
                }
            ],
            "net": "284277.75",
            "vat": "23357.25",
            "gross": "307635.00",
            "currency": "PLN"
        },
        {
            "invoiceReferenceNumber": "FV2023/11/6822",
            "ksefReferenceNumber": "1111111111-20230425-BF9E77-6EDCEB-38",
            "invoiceHash": {
                "hashSHA": {
                    "algorithm": "SHA-256",
                    "encoding": "Base64",
                    "value": "AazAssXH9fV8UJuJ7AdvqSJWs0VNRRnFtPgnSlmyxXM="
                },
                "fileSize": 5429
            },
            "invoicingDate": "2023-04-25",
            "acquisitionTimestamp": "2023-04-25T12:18:18.016Z",
            "subjectBy": {
                "issuedByIdentifier": {
                    "type": "onip",
                    "identifier": "1111111111"
                },
                "issuedByName": {
                    "type": "fn",
                    "tradeName": null,
                    "fullName": "ABC Developex SA"
                }
            },
            "subjectTo": {
                "issuedToIdentifier": {
                    "type": "none"
                },
                "issuedToName": {
                    "type": "pn",
                    "tradeName": null,
                    "firstName": "Jan",
                    "surname": "Kowalski"
                }
            },
            "subjectsOtherList": [
                {
                    "issuedToIdentifier": {
                        "type": "none"
                    },
                    "issuedToName": {
                        "type": "pn",
                        "tradeName": null,
                        "firstName": "Grażyna",
                        "surname": "Kowalska"
                    },
                    "subjectOtherType": "additional_purchaser"
                },
                {
                    "issuedToIdentifier": {
                        "type": "onip",
                        "identifier": "9999999999"
                    },
                    "issuedToName": {
                        "type": "fn",
                        "tradeName": null,
                        "fullName": "ABC Developex sp. z o. o."
                    },
                    "subjectOtherType": "original_subject"
                }
            ],
            "net": "284277.75",
            "vat": "23357.25",
            "gross": "307635.00",
            "currency": "PLN"
        },
        {
            "invoiceReferenceNumber": "FV2023/06/9508",
            "ksefReferenceNumber": "1111111111-20230425-688B88-F37F9D-B3",
            "invoiceHash": {
                "hashSHA": {
                    "algorithm": "SHA-256",
                    "encoding": "Base64",
                    "value": "wKu0QmJo2mcrKoKYhvC3tF0/qgVr9A6Wzzx/GUBmJxM="
                },
                "fileSize": 5429
            },
            "invoicingDate": "2023-04-25",
            "acquisitionTimestamp": "2023-04-25T12:15:27.504Z",
            "subjectBy": {
                "issuedByIdentifier": {
                    "type": "onip",
                    "identifier": "1111111111"
                },
                "issuedByName": {
                    "type": "fn",
                    "tradeName": null,
                    "fullName": "ABC Developex SA"
                }
            },
            "subjectTo": {
                "issuedToIdentifier": {
                    "type": "none"
                },
                "issuedToName": {
                    "type": "pn",
                    "tradeName": null,
                    "firstName": "Jan",
                    "surname": "Kowalski"
                }
            },
            "subjectsOtherList": [
                {
                    "issuedToIdentifier": {
                        "type": "none"
                    },
                    "issuedToName": {
                        "type": "pn",
                        "tradeName": null,
                        "firstName": "Grażyna",
                        "surname": "Kowalska"
                    },
                    "subjectOtherType": "additional_purchaser"
                },
                {
                    "issuedToIdentifier": {
                        "type": "onip",
                        "identifier": "9999999999"
                    },
                    "issuedToName": {
                        "type": "fn",
                        "tradeName": null,
                        "fullName": "ABC Developex sp. z o. o."
                    },
                    "subjectOtherType": "original_subject"
                }
            ],
            "net": "284277.75",
            "vat": "23357.25",
            "gross": "307635.00",
            "currency": "PLN"
        },
        {
            "invoiceReferenceNumber": "FV2023/06/5390",
            "ksefReferenceNumber": "1111111111-20230425-CB8083-8BCDA9-F8",
            "invoiceHash": {
                "hashSHA": {
                    "algorithm": "SHA-256",
                    "encoding": "Base64",
                    "value": "KJUCWcjIW76HUoPBK0Rf6Kz6WTBvZVqM7XIuC/ZCv/Q="
                },
                "fileSize": 5429
            },
            "invoicingDate": "2023-04-25",
            "acquisitionTimestamp": "2023-04-25T12:11:31.932Z",
            "subjectBy": {
                "issuedByIdentifier": {
                    "type": "onip",
                    "identifier": "1111111111"
                },
                "issuedByName": {
                    "type": "fn",
                    "tradeName": null,
                    "fullName": "ABC Developex SA"
                }
            },
            "subjectTo": {
                "issuedToIdentifier": {
                    "type": "none"
                },
                "issuedToName": {
                    "type": "pn",
                    "tradeName": null,
                    "firstName": "Jan",
                    "surname": "Kowalski"
                }
            },
            "subjectsOtherList": [
                {
                    "issuedToIdentifier": {
                        "type": "none"
                    },
                    "issuedToName": {
                        "type": "pn",
                        "tradeName": null,
                        "firstName": "Grażyna",
                        "surname": "Kowalska"
                    },
                    "subjectOtherType": "additional_purchaser"
                },
                {
                    "issuedToIdentifier": {
                        "type": "onip",
                        "identifier": "9999999999"
                    },
                    "issuedToName": {
                        "type": "fn",
                        "tradeName": null,
                        "fullName": "ABC Developex sp. z o. o."
                    },
                    "subjectOtherType": "original_subject"
                }
            ],
            "net": "284277.75",
            "vat": "23357.25",
            "gross": "307635.00",
            "currency": "PLN"
        },
        {
            "invoiceReferenceNumber": "FV2022/08/1082",
            "ksefReferenceNumber": "1111111111-20230425-72C18C-CA6D1A-89",
            "invoiceHash": {
                "hashSHA": {
                    "algorithm": "SHA-256",
                    "encoding": "Base64",
                    "value": "UI2RaB86BX2tR0BZhqmTFOZTsN0Op+23fdXoA9j2A0Y="
                },
                "fileSize": 5429
            },
            "invoicingDate": "2023-04-25",
            "acquisitionTimestamp": "2023-04-25T11:52:26.759Z",
            "subjectBy": {
                "issuedByIdentifier": {
                    "type": "onip",
                    "identifier": "1111111111"
                },
                "issuedByName": {
                    "type": "fn",
                    "tradeName": null,
                    "fullName": "ABC Developex SA"
                }
            },
            "subjectTo": {
                "issuedToIdentifier": {
                    "type": "none"
                },
                "issuedToName": {
                    "type": "pn",
                    "tradeName": null,
                    "firstName": "Jan",
                    "surname": "Kowalski"
                }
            },
            "subjectsOtherList": [
                {
                    "issuedToIdentifier": {
                        "type": "none"
                    },
                    "issuedToName": {
                        "type": "pn",
                        "tradeName": null,
                        "firstName": "Grażyna",
                        "surname": "Kowalska"
                    },
                    "subjectOtherType": "additional_purchaser"
                },
                {
                    "issuedToIdentifier": {
                        "type": "onip",
                        "identifier": "9999999999"
                    },
                    "issuedToName": {
                        "type": "fn",
                        "tradeName": null,
                        "fullName": "ABC Developex sp. z o. o."
                    },
                    "subjectOtherType": "original_subject"
                }
            ],
            "net": "284277.75",
            "vat": "23357.25",
            "gross": "307635.00",
            "currency": "PLN"
        },
        {
            "invoiceReferenceNumber": "FV2022/02/9176",
            "ksefReferenceNumber": "1111111111-20230425-EFFC5C-8D0DAA-16",
            "invoiceHash": {
                "hashSHA": {
                    "algorithm": "SHA-256",
                    "encoding": "Base64",
                    "value": "5h24WQU59iq3Fnv61p09E5raWAUXxBXB7m/rHtDmedA="
                },
                "fileSize": 5429
            },
            "invoicingDate": "2023-04-25",
            "acquisitionTimestamp": "2023-04-25T11:51:11.673Z",
            "subjectBy": {
                "issuedByIdentifier": {
                    "type": "onip",
                    "identifier": "1111111111"
                },
                "issuedByName": {
                    "type": "fn",
                    "tradeName": null,
                    "fullName": "ABC Developex SA"
                }
            },
            "subjectTo": {
                "issuedToIdentifier": {
                    "type": "none"
                },
                "issuedToName": {
                    "type": "pn",
                    "tradeName": null,
                    "firstName": "Jan",
                    "surname": "Kowalski"
                }
            },
            "subjectsOtherList": [
                {
                    "issuedToIdentifier": {
                        "type": "none"
                    },
                    "issuedToName": {
                        "type": "pn",
                        "tradeName": null,
                        "firstName": "Grażyna",
                        "surname": "Kowalska"
                    },
                    "subjectOtherType": "additional_purchaser"
                },
                {
                    "issuedToIdentifier": {
                        "type": "onip",
                        "identifier": "9999999999"
                    },
                    "issuedToName": {
                        "type": "fn",
                        "tradeName": null,
                        "fullName": "ABC Developex sp. z o. o."
                    },
                    "subjectOtherType": "original_subject"
                }
            ],
            "net": "284277.75",
            "vat": "23357.25",
            "gross": "307635.00",
            "currency": "PLN"
        },
        {
            "invoiceReferenceNumber": "FV2023/01/3476",
            "ksefReferenceNumber": "1111111111-20230425-21B8E6-26EA19-FD",
            "invoiceHash": {
                "hashSHA": {
                    "algorithm": "SHA-256",
                    "encoding": "Base64",
                    "value": "mRYVGZX4UE9Jw08hK9KqA76ycalV+VvoFtV8SEQdcg8="
                },
                "fileSize": 5429
            },
            "invoicingDate": "2023-04-25",
            "acquisitionTimestamp": "2023-04-25T11:47:48.854Z",
            "subjectBy": {
                "issuedByIdentifier": {
                    "type": "onip",
                    "identifier": "1111111111"
                },
                "issuedByName": {
                    "type": "fn",
                    "tradeName": null,
                    "fullName": "ABC Developex SA"
                }
            },
            "subjectTo": {
                "issuedToIdentifier": {
                    "type": "none"
                },
                "issuedToName": {
                    "type": "pn",
                    "tradeName": null,
                    "firstName": "Jan",
                    "surname": "Kowalski"
                }
            },
            "subjectsOtherList": [
                {
                    "issuedToIdentifier": {
                        "type": "none"
                    },
                    "issuedToName": {
                        "type": "pn",
                        "tradeName": null,
                        "firstName": "Grażyna",
                        "surname": "Kowalska"
                    },
                    "subjectOtherType": "additional_purchaser"
                },
                {
                    "issuedToIdentifier": {
                        "type": "onip",
                        "identifier": "9999999999"
                    },
                    "issuedToName": {
                        "type": "fn",
                        "tradeName": null,
                        "fullName": "ABC Developex sp. z o. o."
                    },
                    "subjectOtherType": "original_subject"
                }
            ],
            "net": "284277.75",
            "vat": "23357.25",
            "gross": "307635.00",
            "currency": "PLN"
        },
        {
            "invoiceReferenceNumber": "FV2022/08/4534",
            "ksefReferenceNumber": "1111111111-20230425-ED4097-E2E92D-01",
            "invoiceHash": {
                "hashSHA": {
                    "algorithm": "SHA-256",
                    "encoding": "Base64",
                    "value": "JrOs3M21B/paj7cVmWFcHcBeTVkwBMCsTJYgU3ALQiI="
                },
                "fileSize": 5429
            },
            "invoicingDate": "2023-04-25",
            "acquisitionTimestamp": "2023-04-25T11:47:35.484Z",
            "subjectBy": {
                "issuedByIdentifier": {
                    "type": "onip",
                    "identifier": "1111111111"
                },
                "issuedByName": {
                    "type": "fn",
                    "tradeName": null,
                    "fullName": "ABC Developex SA"
                }
            },
            "subjectTo": {
                "issuedToIdentifier": {
                    "type": "none"
                },
                "issuedToName": {
                    "type": "pn",
                    "tradeName": null,
                    "firstName": "Jan",
                    "surname": "Kowalski"
                }
            },
            "subjectsOtherList": [
                {
                    "issuedToIdentifier": {
                        "type": "none"
                    },
                    "issuedToName": {
                        "type": "pn",
                        "tradeName": null,
                        "firstName": "Grażyna",
                        "surname": "Kowalska"
                    },
                    "subjectOtherType": "additional_purchaser"
                },
                {
                    "issuedToIdentifier": {
                        "type": "onip",
                        "identifier": "9999999999"
                    },
                    "issuedToName": {
                        "type": "fn",
                        "tradeName": null,
                        "fullName": "ABC Developex sp. z o. o."
                    },
                    "subjectOtherType": "original_subject"
                }
            ],
            "net": "284277.75",
            "vat": "23357.25",
            "gross": "307635.00",
            "currency": "PLN"
        },
        {
            "invoiceReferenceNumber": "FV2022/06/2177",
            "ksefReferenceNumber": "1111111111-20230425-9276BD-3EFA61-5B",
            "invoiceHash": {
                "hashSHA": {
                    "algorithm": "SHA-256",
                    "encoding": "Base64",
                    "value": "TJr0zVRORvD08AF6rBQFTWlkwR6nG4otDxS/NWTcp7k="
                },
                "fileSize": 5429
            },
            "invoicingDate": "2023-04-25",
            "acquisitionTimestamp": "2023-04-25T11:47:04.448Z",
            "subjectBy": {
                "issuedByIdentifier": {
                    "type": "onip",
                    "identifier": "1111111111"
                },
                "issuedByName": {
                    "type": "fn",
                    "tradeName": null,
                    "fullName": "ABC Developex SA"
                }
            },
            "subjectTo": {
                "issuedToIdentifier": {
                    "type": "none"
                },
                "issuedToName": {
                    "type": "pn",
                    "tradeName": null,
                    "firstName": "Jan",
                    "surname": "Kowalski"
                }
            },
            "subjectsOtherList": [
                {
                    "issuedToIdentifier": {
                        "type": "none"
                    },
                    "issuedToName": {
                        "type": "pn",
                        "tradeName": null,
                        "firstName": "Grażyna",
                        "surname": "Kowalska"
                    },
                    "subjectOtherType": "additional_purchaser"
                },
                {
                    "issuedToIdentifier": {
                        "type": "onip",
                        "identifier": "9999999999"
                    },
                    "issuedToName": {
                        "type": "fn",
                        "tradeName": null,
                        "fullName": "ABC Developex sp. z o. o."
                    },
                    "subjectOtherType": "original_subject"
                }
            ],
            "net": "284277.75",
            "vat": "23357.25",
            "gross": "307635.00",
            "currency": "PLN"
        },
        {
            "invoiceReferenceNumber": "FV2023/02/8723",
            "ksefReferenceNumber": "1111111111-20230425-2F033C-4754E7-49",
            "invoiceHash": {
                "hashSHA": {
                    "algorithm": "SHA-256",
                    "encoding": "Base64",
                    "value": "oA7jOF8xDcHfCdK5CWSh3JM5hOsQFGxGq7+t9Avu0q4="
                },
                "fileSize": 5429
            },
            "invoicingDate": "2023-04-25",
            "acquisitionTimestamp": "2023-04-25T11:46:19.757Z",
            "subjectBy": {
                "issuedByIdentifier": {
                    "type": "onip",
                    "identifier": "1111111111"
                },
                "issuedByName": {
                    "type": "fn",
                    "tradeName": null,
                    "fullName": "ABC Developex SA"
                }
            },
            "subjectTo": {
                "issuedToIdentifier": {
                    "type": "none"
                },
                "issuedToName": {
                    "type": "pn",
                    "tradeName": null,
                    "firstName": "Jan",
                    "surname": "Kowalski"
                }
            },
            "subjectsOtherList": [
                {
                    "issuedToIdentifier": {
                        "type": "none"
                    },
                    "issuedToName": {
                        "type": "pn",
                        "tradeName": null,
                        "firstName": "Grażyna",
                        "surname": "Kowalska"
                    },
                    "subjectOtherType": "additional_purchaser"
                },
                {
                    "issuedToIdentifier": {
                        "type": "onip",
                        "identifier": "9999999999"
                    },
                    "issuedToName": {
                        "type": "fn",
                        "tradeName": null,
                        "fullName": "ABC Developex sp. z o. o."
                    },
                    "subjectOtherType": "original_subject"
                }
            ],
            "net": "284277.75",
            "vat": "23357.25",
            "gross": "307635.00",
            "currency": "PLN"
        },
        {
            "invoiceReferenceNumber": "FV2023/01/6513",
            "ksefReferenceNumber": "1111111111-20230425-A75776-008896-AF",
            "invoiceHash": {
                "hashSHA": {
                    "algorithm": "SHA-256",
                    "encoding": "Base64",
                    "value": "iZiK/U4TL0JFbnEPWHUDAhF6mskmmf9OapLTCq1E5Sg="
                },
                "fileSize": 5429
            },
            "invoicingDate": "2023-04-25",
            "acquisitionTimestamp": "2023-04-25T11:28:26.645Z",
            "subjectBy": {
                "issuedByIdentifier": {
                    "type": "onip",
                    "identifier": "1111111111"
                },
                "issuedByName": {
                    "type": "fn",
                    "tradeName": null,
                    "fullName": "ABC Developex SA"
                }
            },
            "subjectTo": {
                "issuedToIdentifier": {
                    "type": "none"
                },
                "issuedToName": {
                    "type": "pn",
                    "tradeName": null,
                    "firstName": "Jan",
                    "surname": "Kowalski"
                }
            },
            "subjectsOtherList": [
                {
                    "issuedToIdentifier": {
                        "type": "none"
                    },
                    "issuedToName": {
                        "type": "pn",
                        "tradeName": null,
                        "firstName": "Grażyna",
                        "surname": "Kowalska"
                    },
                    "subjectOtherType": "additional_purchaser"
                },
                {
                    "issuedToIdentifier": {
                        "type": "onip",
                        "identifier": "9999999999"
                    },
                    "issuedToName": {
                        "type": "fn",
                        "tradeName": null,
                        "fullName": "ABC Developex sp. z o. o."
                    },
                    "subjectOtherType": "original_subject"
                }
            ],
            "net": "284277.75",
            "vat": "23357.25",
            "gross": "307635.00",
            "currency": "PLN"
        },
        {
            "invoiceReferenceNumber": "FV2022/10/6064",
            "ksefReferenceNumber": "1111111111-20230425-D76BA4-71774A-E7",
            "invoiceHash": {
                "hashSHA": {
                    "algorithm": "SHA-256",
                    "encoding": "Base64",
                    "value": "deM/9x7Dg52vFZ+DeB6q2lPaPS16wZzfCf3MSbovSiU="
                },
                "fileSize": 5429
            },
            "invoicingDate": "2023-04-25",
            "acquisitionTimestamp": "2023-04-25T11:25:47.530Z",
            "subjectBy": {
                "issuedByIdentifier": {
                    "type": "onip",
                    "identifier": "1111111111"
                },
                "issuedByName": {
                    "type": "fn",
                    "tradeName": null,
                    "fullName": "ABC Developex SA"
                }
            },
            "subjectTo": {
                "issuedToIdentifier": {
                    "type": "none"
                },
                "issuedToName": {
                    "type": "pn",
                    "tradeName": null,
                    "firstName": "Jan",
                    "surname": "Kowalski"
                }
            },
            "subjectsOtherList": [
                {
                    "issuedToIdentifier": {
                        "type": "none"
                    },
                    "issuedToName": {
                        "type": "pn",
                        "tradeName": null,
                        "firstName": "Grażyna",
                        "surname": "Kowalska"
                    },
                    "subjectOtherType": "additional_purchaser"
                },
                {
                    "issuedToIdentifier": {
                        "type": "onip",
                        "identifier": "9999999999"
                    },
                    "issuedToName": {
                        "type": "fn",
                        "tradeName": null,
                        "fullName": "ABC Developex sp. z o. o."
                    },
                    "subjectOtherType": "original_subject"
                }
            ],
            "net": "284277.75",
            "vat": "23357.25",
            "gross": "307635.00",
            "currency": "PLN"
        },
        {
            "invoiceReferenceNumber": "FV2023/08/7628",
            "ksefReferenceNumber": "1111111111-20230425-965D1C-3328E8-F1",
            "invoiceHash": {
                "hashSHA": {
                    "algorithm": "SHA-256",
                    "encoding": "Base64",
                    "value": "fiQ8WECftVij4zjXTSb2gHUS1Y7mnujMhsQekPU6LzA="
                },
                "fileSize": 5429
            },
            "invoicingDate": "2023-04-25",
            "acquisitionTimestamp": "2023-04-25T11:25:09.680Z",
            "subjectBy": {
                "issuedByIdentifier": {
                    "type": "onip",
                    "identifier": "1111111111"
                },
                "issuedByName": {
                    "type": "fn",
                    "tradeName": null,
                    "fullName": "ABC Developex SA"
                }
            },
            "subjectTo": {
                "issuedToIdentifier": {
                    "type": "none"
                },
                "issuedToName": {
                    "type": "pn",
                    "tradeName": null,
                    "firstName": "Jan",
                    "surname": "Kowalski"
                }
            },
            "subjectsOtherList": [
                {
                    "issuedToIdentifier": {
                        "type": "none"
                    },
                    "issuedToName": {
                        "type": "pn",
                        "tradeName": null,
                        "firstName": "Grażyna",
                        "surname": "Kowalska"
                    },
                    "subjectOtherType": "additional_purchaser"
                },
                {
                    "issuedToIdentifier": {
                        "type": "onip",
                        "identifier": "9999999999"
                    },
                    "issuedToName": {
                        "type": "fn",
                        "tradeName": null,
                        "fullName": "ABC Developex sp. z o. o."
                    },
                    "subjectOtherType": "original_subject"
                }
            ],
            "net": "284277.75",
            "vat": "23357.25",
            "gross": "307635.00",
            "currency": "PLN"
        },
        {
            "invoiceReferenceNumber": "FV2023/04/7102",
            "ksefReferenceNumber": "1111111111-20230425-838E42-45A7B7-59",
            "invoiceHash": {
                "hashSHA": {
                    "algorithm": "SHA-256",
                    "encoding": "Base64",
                    "value": "FGOfBnD9SGaatU+ZTGZFKXrk4dANCsWuqz2phed/jYw="
                },
                "fileSize": 5429
            },
            "invoicingDate": "2023-04-25",
            "acquisitionTimestamp": "2023-04-25T11:16:08.131Z",
            "subjectBy": {
                "issuedByIdentifier": {
                    "type": "onip",
                    "identifier": "1111111111"
                },
                "issuedByName": {
                    "type": "fn",
                    "tradeName": null,
                    "fullName": "ABC Developex SA"
                }
            },
            "subjectTo": {
                "issuedToIdentifier": {
                    "type": "none"
                },
                "issuedToName": {
                    "type": "pn",
                    "tradeName": null,
                    "firstName": "Jan",
                    "surname": "Kowalski"
                }
            },
            "subjectsOtherList": [
                {
                    "issuedToIdentifier": {
                        "type": "none"
                    },
                    "issuedToName": {
                        "type": "pn",
                        "tradeName": null,
                        "firstName": "Grażyna",
                        "surname": "Kowalska"
                    },
                    "subjectOtherType": "additional_purchaser"
                },
                {
                    "issuedToIdentifier": {
                        "type": "onip",
                        "identifier": "9999999999"
                    },
                    "issuedToName": {
                        "type": "fn",
                        "tradeName": null,
                        "fullName": "ABC Developex sp. z o. o."
                    },
                    "subjectOtherType": "original_subject"
                }
            ],
            "net": "284277.75",
            "vat": "23357.25",
            "gross": "307635.00",
            "currency": "PLN"
        },
        {
            "invoiceReferenceNumber": "CNPL/24/23",
            "ksefReferenceNumber": "1570317527-20230424-E49090-B08B6A-23",
            "invoiceHash": {
                "hashSHA": {
                    "algorithm": "SHA-256",
                    "encoding": "Base64",
                    "value": "/KSukIe71Z+4KAbRY9BsnKxkaaWok1grt6JnTBVGpQ0="
                },
                "fileSize": 4175
            },
            "invoicingDate": "2023-04-24",
            "acquisitionTimestamp": "2023-04-24T09:37:50.182Z",
            "subjectBy": {
                "issuedByIdentifier": {
                    "type": "onip",
                    "identifier": "1570317527"
                },
                "issuedByName": {
                    "type": "fn",
                    "tradeName": null,
                    "fullName": "*az*a ****Y"
                }
            },
            "subjectTo": {
                "issuedToIdentifier": {
                    "type": "onip",
                    "identifier": "9999999090"
                },
                "issuedToName": {
                    "type": "fn",
                    "tradeName": null,
                    "fullName": "ąęćółńżźĄĘĆÓŁŃŻŹ"
                }
            },
            "subjectsOtherList": [
                {
                    "issuedToIdentifier": {
                        "type": "onip",
                        "identifier": "9999999999"
                    },
                    "issuedToName": {
                        "type": "fn",
                        "tradeName": null,
                        "fullName": "****a*az*a"
                    },
                    "subjectOtherType": "factor"
                }
            ],
            "net": "-1217.52",
            "vat": "-280.03",
            "gross": "-1497.55",
            "currency": "PLN"
        },
        {
            "invoiceReferenceNumber": "INPL/220/23",
            "ksefReferenceNumber": "1570317527-20230424-1F578A-B4FEE0-6C",
            "invoiceHash": {
                "hashSHA": {
                    "algorithm": "SHA-256",
                    "encoding": "Base64",
                    "value": "lMde1goIrtlcGJtQtRxKwF7whLUncyN4Zq17potI69E="
                },
                "fileSize": 9823
            },
            "invoicingDate": "2023-04-24",
            "acquisitionTimestamp": "2023-04-24T09:31:12.801Z",
            "subjectBy": {
                "issuedByIdentifier": {
                    "type": "onip",
                    "identifier": "1570317527"
                },
                "issuedByName": {
                    "type": "fn",
                    "tradeName": null,
                    "fullName": "*az*a ****Y"
                }
            },
            "subjectTo": {
                "issuedToIdentifier": {
                    "type": "onip",
                    "identifier": "9999999090"
                },
                "issuedToName": {
                    "type": "fn",
                    "tradeName": null,
                    "fullName": "ąęćółńżźĄĘĆÓŁŃŻŹ"
                }
            },
            "subjectsOtherList": [
                {
                    "issuedToIdentifier": {
                        "type": "onip",
                        "identifier": "9999999999"
                    },
                    "issuedToName": {
                        "type": "fn",
                        "tradeName": null,
                        "fullName": "****a*az*a"
                    },
                    "subjectOtherType": "factor"
                }
            ],
            "net": "65375.00",
            "vat": "15036.26",
            "gross": "80411.26",
            "currency": "PLN"
        },
        {
            "invoiceReferenceNumber": "FV2022/08/12",
            "ksefReferenceNumber": "4968403069-20230423-7D8639-C93610-AF",
            "invoiceHash": {
                "hashSHA": {
                    "algorithm": "SHA-256",
                    "encoding": "Base64",
                    "value": "rAwuo/Qtdo/bnjOpIknjvoAfzx+eY06bUVotLLsS/GA="
                },
                "fileSize": 4649
            },
            "invoicingDate": "2023-04-23",
            "acquisitionTimestamp": "2023-04-23T21:53:16.966Z",
            "subjectBy": {
                "issuedByIdentifier": {
                    "type": "onip",
                    "identifier": "4968403069"
                },
                "issuedByName": {
                    "type": "fn",
                    "tradeName": null,
                    "fullName": "ABC Developex SA"
                }
            },
            "subjectTo": {
                "issuedToIdentifier": {
                    "type": "none"
                },
                "issuedToName": {
                    "type": "pn",
                    "tradeName": null,
                    "firstName": "Jan",
                    "surname": "Kowalski"
                }
            },
            "subjectsOtherList": [
                {
                    "issuedToIdentifier": {
                        "type": "none"
                    },
                    "issuedToName": {
                        "type": "pn",
                        "tradeName": null,
                        "firstName": "Grażyna",
                        "surname": "Kowalska"
                    },
                    "subjectOtherType": "additional_purchaser"
                },
                {
                    "issuedToIdentifier": {
                        "type": "onip",
                        "identifier": "9999999999"
                    },
                    "issuedToName": {
                        "type": "fn",
                        "tradeName": null,
                        "fullName": "ABC Developex sp. z o. o."
                    },
                    "subjectOtherType": "original_subject"
                }
            ],
            "net": "284277.75",
            "vat": "23357.25",
            "gross": "307635.00",
            "currency": "PLN"
        }
    ]';
        $invoicesData = json_decode(stripslashes($invoices), true);
//        $invoicesData = json_decode(stripslashes($invoices), true)['invoiceHeaderList'];

//       return $invoicesData;
        if($type == "subject1"){
            $data = array();
            foreach ($invoicesData as $i){
                $u = array();
                $u['n_nip'] = $i['subjectBy']['issuedByIdentifier']['identifier'];
                if($i['subjectBy']['issuedByName']['type'] == "fn"){
                    $u['n_name'] = $i['subjectBy']['issuedByName']['fullName'];
                }elseif ($i['subjectBy']['issuedByName']['type'] == "pn"){
                    $u['n_name'] = sprintf("%s %s",$i['subjectBy']['issuedByName']['firstName'],$i['subjectBy']['issuedByName']['surname']);
                }$u['ksefNumber'] = $i['ksefReferenceNumber'];
                $u['invoiceNumber'] = $i['invoiceReferenceNumber'];
                $u['invoicingDate'] = $i['invoicingDate'];
                $u['net'] = $i['net'];
                $u['gross'] = $i['gross'];
                $u['vat'] = $i['vat'];
                $data[]=$u;
            }
            return json_encode($data);
        }elseif ($type == "subject2"){
            $data = array();
            foreach ($invoicesData as $i){
                $u = array();
                $u['sp_nip'] = $i['subjectBy']['issuedByIdentifier']['identifier'];
                if($i['subjectBy']['issuedByName']['type'] == "fn"){
                    $u['sp_name'] = $i['subjectBy']['issuedByName']['fullName'];
                }elseif ($i['subjectBy']['issuedByName']['type'] == "pn"){
                    $u['sp_name'] = sprintf("%s %s",$i['subjectBy']['issuedByName']['firstName'],$i['subjectBy']['issuedByName']['surname']);
                }
                $u['ksefNumber'] = $i['ksefReferenceNumber'];
                $u['invoiceNumber'] = $i['invoiceReferenceNumber'];
                $u['invoicingDate'] = $i['invoicingDate'];
                $u['acquisitionTimestamp'] =  Carbon::parse($i['acquisitionTimestamp'])->format('Y-m-d');
                $u['net'] = $i['net'];
                $u['gross'] = $i['gross'];
                $u['vat'] = $i['vat'];
                $data[]=$u;
            }
            return $data;
            return json_encode($data);
        }else{
            $data = array();
            foreach ($invoicesData as $i){
                $u = array();
                $u['sp_nip'] = $i['subjectBy']['issuedByIdentifier']['identifier'];
                if(isset($i['subjectTo']['issuedToIdentifier']['identifier'])){
                    $u['n_nip'] = $i['subjectTo']['issuedToIdentifier']['identifier'];
                }else{ $u['n_nip'] = "";}

                if($i['subjectBy']['issuedByName']['type'] == "fn"){
                    $u['n_name'] = $i['subjectBy']['issuedByName']['fullName'];
                }elseif ($i['subjectBy']['issuedByName']['type'] == "pn"){
                    $u['n_name'] = sprintf("%s %s",$i['subjectBy']['issuedByName']['firstName'],$i['subjectBy']['issuedByName']['surname']);
                }
                if($i['subjectTo']['issuedToName']['type'] == "fn"){
                    $u['sp_name'] = $i['subjectTo']['issuedToName']['fullName'];
                }elseif ($i['subjectTo']['issuedToName']['type'] == "pn") {
                    $u['sp_name'] = sprintf("%s %s", $i['subjectTo']['issuedToName']['firstName'], $i['subjectTo']['issuedToName']['surname']);
                }
                $u['ksefNumber'] = $i['ksefReferenceNumber'];
                $u['invoiceNumber'] = $i['invoiceReferenceNumber'];
                $u['invoicingDate'] = $i['invoicingDate'];
                $u['net'] = $i['net'];
                $u['gross'] = $i['gross'];
                $u['vat'] = $i['vat'];
                $data[]=$u;
            }
            return json_encode($data);
        }
    }
    public function InvoiceSync()
    {


//        $data = request('data');
//        $from = Carbon::parse($data['dataFrom'])->toDateTimeLocalString();
//        $to = Carbon::parse($data['dataTo'])->toDateTimeLocalString();
//        $type = $data['type'];
//        $data = array(
//            'queryCriteria'=>array(
//                'type'=>'range',
//                'subjectType'=>'subject1',
//                'invoicingDateFrom'=>'2022-05-01T00:00:00',
//                'invoicingDateTo'=>'2023-04-27T10:19:07'
//            )
//        );
//        $curl = curl_init();
//        curl_setopt_array($curl, array(
//            CURLOPT_URL => 'https://ksef-test.mf.gov.pl/api//online/Query/Invoice/Sync?PageSize=10&PageOffset=1',
//            CURLOPT_RETURNTRANSFER => true,
//            CURLOPT_ENCODING => '',
//            CURLOPT_MAXREDIRS => 10,
//            CURLOPT_TIMEOUT => 0,
//            CURLOPT_FOLLOWLOCATION => true,
//            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
//            CURLOPT_CUSTOMREQUEST => 'POST',
//            CURLOPT_POSTFIELDS =>json_encode($data),
//            CURLOPT_HTTPHEADER => array(
//                'SessionToken: d1c1d51c22673fb04e4e9a7cbd01bb99df704693c7112435f70b0b44583a8543',
//                'Content-Type: application/json'
//            ),
//        ));
//        $invoices = curl_exec($curl);
//        curl_close($curl);
////        dd(json_decode($invoices));
////        $invoices = '{"timestamp":"2023-04-30T08:49:20.436Z","referenceNumber":"20230430-SE-6BA071310D-EDB61DF159-37","numberOfElements":2143,"pageSize":10,"pageOffset":1,"invoiceHeaderList":[{"invoiceReferenceNumber":"1/1/2024","ksefReferenceNumber":"9999999999-20230425-D21F31-4C9B86-F6","invoiceHash":{"hashSHA":{"algorithm":"SHA-256","encoding":"Base64","value":"vkmNEcUaQXBDUpodnTG3xZQ6QLef6GQpPqQwmtYaBuM="},"fileSize":1793},"invoicingDate":"2023-04-25","acquisitionTimestamp":"2023-04-25T13:22:14.811Z","subjectBy":{"issuedByIdentifier":{"type":"onip","identifier":"9999999999"},"issuedByName":{"type":"fn","tradeName":"test","fullName":"abc"}},"subjectTo":{"issuedToIdentifier":{"type":"onip","identifier":"1111111111"},"issuedToName":{"type":"fn","tradeName":null,"fullName":"xyz"}},"net":"1000.00","vat":"230.00","gross":"1230.00","currency":"PLN"},{"invoiceReferenceNumber":"1798","ksefReferenceNumber":"9999999999-20230425-1E1731-DFE019-1F","invoiceHash":{"hashSHA":{"algorithm":"SHA-256","encoding":"Base64","value":"4paRs1omNLGo6eY/ZwjEdCO1oEcDTzfRZhM4u3J7G4g="},"fileSize":1881},"invoicingDate":"2023-04-25","acquisitionTimestamp":"2023-04-25T12:44:54.027Z","subjectBy":{"issuedByIdentifier":{"type":"onip","identifier":"9999999999"},"issuedByName":{"type":"fn","tradeName":null,"fullName":"ABC"}},"subjectTo":{"issuedToIdentifier":{"type":"onip","identifier":"1111111111"},"issuedToName":{"type":"fn","tradeName":null,"fullName":"ABC"}},"net":"383.10","vat":"84.28","gross":"467.38","currency":"PLN"},{"invoiceReferenceNumber":"125/mgj/2023","ksefReferenceNumber":"9999999999-20230425-2DC616-D69944-E7","invoiceHash":{"hashSHA":{"algorithm":"SHA-256","encoding":"Base64","value":"R0zHy8mbZeeJxpyYc9dNR2SmVIelsLM8cKUysCp6yQ0="},"fileSize":1718},"invoicingDate":"2023-04-25","acquisitionTimestamp":"2023-04-25T11:43:13.483Z","subjectBy":{"issuedByIdentifier":{"type":"onip","identifier":"9999999999"},"issuedByName":{"type":"pn","tradeName":null,"firstName":"Helena","surname":"Helena"}},"subjectTo":{"issuedToIdentifier":{"type":"onip","identifier":"4444444444"},"issuedToName":{"type":"pn","tradeName":null,"firstName":"hhhhhhhhh","surname":"hhhhhhhhhhhhhhhhh"}},"net":"12195.12","vat":"2804.88","gross":"15000.00","currency":"PLN"},{"invoiceReferenceNumber":"FA/125/2023","ksefReferenceNumber":"9999999999-20230425-96E681-7A75D0-DF","invoiceHash":{"hashSHA":{"algorithm":"SHA-256","encoding":"Base64","value":"Jfr8v4zqpwQQgMvCzdWIWCIJDG+SdUKdOZu8WdSFB4w="},"fileSize":2461},"invoicingDate":"2023-04-25","acquisitionTimestamp":"2023-04-25T07:32:01.836Z","subjectBy":{"issuedByIdentifier":{"type":"onip","identifier":"9999999999"},"issuedByName":{"type":"fn","tradeName":"MEDIALAB","fullName":"MEDIA LAB s.c. Bożena Rożenek, Zbigniew Rożenek"}},"subjectTo":{"issuedToIdentifier":{"type":"onip","identifier":"7291946279"},"issuedToName":{"type":"fn","tradeName":"MEDIALAB_DE","fullName":"MEDIALAB Deutschland GmbH"}},"net":"3650.00","vat":"0.00","gross":"3650.00","currency":"PLN"},{"invoiceReferenceNumber":"FV2022/02/150","ksefReferenceNumber":"9999999999-20230425-08927A-FFCF8F-3E","invoiceHash":{"hashSHA":{"algorithm":"SHA-256","encoding":"Base64","value":"tQ8NvWTwO6USR3Nsr8T6a6dbaty/ztiNQhFME2ScqqE="},"fileSize":3645},"invoicingDate":"2023-04-25","acquisitionTimestamp":"2023-04-25T06:58:55.604Z","subjectBy":{"issuedByIdentifier":{"type":"onip","identifier":"9999999999"},"issuedByName":{"type":"fn","tradeName":null,"fullName":"ABC AGD sp. z o. o."}},"subjectTo":{"issuedToIdentifier":{"type":"none"},"issuedToName":{"type":"pn","tradeName":null,"firstName":"Jan","surname":"Kowalski"}},"net":"1667.61","vat":"383.38","gross":"2051.00","currency":"PLN"},{"invoiceReferenceNumber":"1\\23","ksefReferenceNumber":"9999999999-20230424-A69AD2-CACE69-29","invoiceHash":{"hashSHA":{"algorithm":"SHA-256","encoding":"Base64","value":"X1BDKGq3Trvogn7shYvlOaFpTK0ie8W3ozSb1MEOOm8="},"fileSize":2417},"invoicingDate":"2023-04-24","acquisitionTimestamp":"2023-04-24T16:18:47.346Z","subjectBy":{"issuedByIdentifier":{"type":"onip","identifier":"9999999999"},"issuedByName":{"type":"pn","tradeName":null,"firstName":"Monika","surname":"tt"}},"subjectTo":{"issuedToIdentifier":{"type":"onip","identifier":"7777777777"},"issuedToName":{"type":"pn","tradeName":null,"firstName":"Monika","surname":"uuu"}},"net":"1000.00","vat":"0.00","gross":"1000.00","currency":"EUR"},{"invoiceReferenceNumber":"1\\2023","ksefReferenceNumber":"9999999999-20230424-7AEF77-404E48-36","invoiceHash":{"hashSHA":{"algorithm":"SHA-256","encoding":"Base64","value":"wcysRcbtz4YfHycEe+QhtNVYSX7ibfSrEN78WiUp0Ek="},"fileSize":1995},"invoicingDate":"2023-04-24","acquisitionTimestamp":"2023-04-24T15:12:57.341Z","subjectBy":{"issuedByIdentifier":{"type":"onip","identifier":"9999999999"},"issuedByName":{"type":"pn","tradeName":null,"firstName":"Monika","surname":"Kot"}},"subjectTo":{"issuedToIdentifier":{"type":"onip","identifier":"1112223332"},"issuedToName":{"type":"pn","tradeName":null,"firstName":"ttt","surname":"bbb"}},"net":"0.00","vat":"0.00","gross":"18000.00","currency":"PLN"},{"invoiceReferenceNumber":"FK/04/0001","ksefReferenceNumber":"9999999999-20230424-3FC294-9B6333-64","invoiceHash":{"hashSHA":{"algorithm":"SHA-256","encoding":"Base64","value":"VR7kb9bPmtZWohshgjA+CRtWDoN4VGnurez9G3rLY/4="},"fileSize":2373},"invoicingDate":"2023-04-24","acquisitionTimestamp":"2023-04-24T14:51:45.776Z","subjectBy":{"issuedByIdentifier":{"type":"onip","identifier":"9999999999"},"issuedByName":{"type":"fn","tradeName":null,"fullName":"Tulipan"}},"subjectTo":{"issuedToIdentifier":{"type":"onip","identifier":"3567424510"},"issuedToName":{"type":"fn","tradeName":null,"fullName":"Testowa"}},"net":"-350.00","vat":"-65.50","gross":"-415.50","currency":"PLN"},{"invoiceReferenceNumber":"test 24/04 fdsfdsfsfds","ksefReferenceNumber":"9999999999-20230424-4D2315-3BA83D-73","invoiceHash":{"hashSHA":{"algorithm":"SHA-256","encoding":"Base64","value":"EK52KNczvNPxIFpVwHSN14s3tOEDiXSSfxmLDXU8mrI="},"fileSize":1558},"invoicingDate":"2023-04-24","acquisitionTimestamp":"2023-04-24T14:36:53.587Z","subjectBy":{"issuedByIdentifier":{"type":"onip","identifier":"9999999999"},"issuedByName":{"type":"fn","tradeName":null,"fullName":"test"}},"subjectTo":{"issuedToIdentifier":{"type":"onip","identifier":"6750002236"},"issuedToName":{"type":"fn","tradeName":null,"fullName":"uj"}},"net":"2000.00","vat":"0.00","gross":"2000.00","currency":"PLN"},{"invoiceReferenceNumber":"test 24/04/2023","ksefReferenceNumber":"9999999999-20230424-872670-6AA15B-BD","invoiceHash":{"hashSHA":{"algorithm":"SHA-256","encoding":"Base64","value":"eS/oRmwuIAPAOJK9oWpV7oGZSnKrh1SFSqgqR2mVpZ8="},"fileSize":1553},"invoicingDate":"2023-04-24","acquisitionTimestamp":"2023-04-24T14:33:20.254Z","subjectBy":{"issuedByIdentifier":{"type":"onip","identifier":"9999999999"},"issuedByName":{"type":"fn","tradeName":null,"fullName":"test"}},"subjectTo":{"issuedToIdentifier":{"type":"onip","identifier":"6750001946"},"issuedToName":{"type":"fn","tradeName":null,"fullName":"uj"}},"net":"10000.00","vat":"0.00","gross":"10000.00","currency":"PLN"}]} ';
//        $invoicesData = json_decode(stripslashes($invoices), true)['invoiceHeaderList'];
//        $data = array();
//        foreach ($invoicesData as $i){
//            $u = array();
//            $u['n_nip'] = $i['subjectBy']['issuedByIdentifier']['identifier'];
//            if($i['subjectBy']['issuedByName']['type'] == "fn"){
//                $u['n_name'] = $i['subjectBy']['issuedByName']['fullName'];
//            }elseif ($i['subjectBy']['issuedByName']['type'] == "pn"){
//                $u['n_name'] = sprintf("%s %s",$i['subjectBy']['issuedByName']['firstName'],$i['subjectBy']['issuedByName']['surname']);
//            }$u['ksefNumber'] = $i['ksefReferenceNumber'];
//            $u['invoiceNumber'] = $i['invoiceReferenceNumber'];
//            $u['invoicingDate'] = $i['invoicingDate'];
//            $u['net'] = $i['net'];
//            $u['gross'] = $i['gross'];
//            $u['vat'] = $i['vat'];
//            $data[]=$u;
//        }
//        return json_encode($data);
    }

    public function sendInvoice(){
        $invoice = file_get_contents('files/example.xml');

        $bytes = unpack('C*', $invoice);

        $size = count($bytes);
        $shaBase64 = base64_encode(hash('sha256', $invoice, True));

        $invoice = base64_encode($invoice);

        dd($size, $shaBase64, $invoice);
    }

}

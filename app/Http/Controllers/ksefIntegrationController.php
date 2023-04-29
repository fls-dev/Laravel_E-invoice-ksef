<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use mysql_xdevapi\Exception;

class ksefIntegrationController extends Controller
{
//    https://ksef-test.mf.gov.pl/web/api/invoice/query?
//    {
//    "results": [
//        {
//            "invoiceReferenceNumber": "FK2022/04/24_ PODMIOT_2K",
//            "ksefReferenceNumber": "9999999999-20230428-693D47-0AED73-37",
//            "invoicingDate": "2023-04-28T00:00:00",
//            "acquisitionTimestamp": "2023-04-28T09:05:43.174Z",
//            "net": "0.00",
//            "vat": "0.00",
//            "gross": "0.00",
//            "currency": "PLN",
//            "contractorName": "CDE Sp.z o.o.",
//            "contractorIdentifier": "1111111111",
//            "contractorIdentifierType": "onip",
//            "buyer": {
//                "name": "CDE Sp.z o.o.",
//                "identifier": "1111111111",
//                "identifierType": "onip"
//            }
//        },
//        {
//            "invoiceReferenceNumber": "12/04/2023",
//            "ksefReferenceNumber": "9999999999-20230427-6B310D-EF1AC9-44",
//            "invoicingDate": "2023-04-27T00:00:00",
//            "acquisitionTimestamp": "2023-04-27T10:59:40.729Z",
//            "net": "-3000.00",
//            "vat": "-690.00",
//            "gross": "-3690.00",
//            "currency": "PLN",
//            "contractorName": "jhlhklhkkj",
//            "contractorIdentifier": "1111111111",
//            "contractorIdentifierType": "onip",
//            "buyer": {
//                "name": "jhlhklhkkj",
//                "identifier": "1111111111",
//                "identifierType": "onip"
//            }
//        },
//        {
//            "invoiceReferenceNumber": "FVTest/0001",
//            "ksefReferenceNumber": "9999999999-20230427-90E256-6DF1E0-21",
//            "invoicingDate": "2023-04-27T00:00:00",
//            "acquisitionTimestamp": "2023-04-27T10:52:33.312Z",
//            "net": "100.00",
//            "vat": "23.00",
//            "gross": "123.00",
//            "currency": "PLN",
//            "contractorName": "Bo tak ma byc",
//            "contractorIdentifier": "4870679868",
//            "contractorIdentifierType": "onip",
//            "buyer": {
//                "name": "Bo tak ma byc",
//                "identifier": "4870679868",
//                "identifierType": "onip"
//            }
//        },
//        {
//            "invoiceReferenceNumber": "11/04/2023",
//            "ksefReferenceNumber": "9999999999-20230427-4025C6-3B32EF-44",
//            "invoicingDate": "2023-04-27T00:00:00",
//            "acquisitionTimestamp": "2023-04-27T10:46:48.473Z",
//            "net": "104065.04",
//            "vat": "23934.96",
//            "gross": "128000.00",
//            "currency": "PLN",
//            "contractorName": "hjgjgj",
//            "contractorIdentifier": "1111111111",
//            "contractorIdentifierType": "onip",
//            "buyer": {
//                "name": "hjgjgj",
//                "identifier": "1111111111",
//                "identifierType": "onip"
//            }
//        },
//        {
//            "invoiceReferenceNumber": "10/04/2023",
//            "ksefReferenceNumber": "9999999999-20230427-F4E795-50807D-8C",
//            "invoicingDate": "2023-04-27T00:00:00",
//            "acquisitionTimestamp": "2023-04-27T10:41:18.153Z",
//            "net": "8130.08",
//            "vat": "1869.92",
//            "gross": "10000.00",
//            "currency": "PLN",
//            "contractorName": "m,nfdm,gn,.dmh,.",
//            "contractorIdentifier": "1111111111",
//            "contractorIdentifierType": "onip",
//            "buyer": {
//                "name": "m,nfdm,gn,.dmh,.",
//                "identifier": "1111111111",
//                "identifierType": "onip"
//            }
//        },
//        {
//            "invoiceReferenceNumber": "1169999",
//            "ksefReferenceNumber": "9999999999-20230427-3C1E82-0588B1-F3",
//            "invoicingDate": "2023-04-27T00:00:00",
//            "acquisitionTimestamp": "2023-04-27T10:03:40.385Z",
//            "net": "1656.00",
//            "vat": "380.88",
//            "gross": "2036.88",
//            "currency": "PLN",
//            "contractorName": "RAZ SP ZO.O.",
//            "contractorIdentifier": "7777777777",
//            "contractorIdentifierType": "onip",
//            "buyer": {
//                "name": "RAZ SP ZO.O.",
//                "identifier": "7777777777",
//                "identifierType": "onip"
//            }
//        },
//        {
//            "invoiceReferenceNumber": "KOR/2023/04/27/1",
//            "ksefReferenceNumber": "9999999999-20230427-BA4FD2-F78BA9-01",
//            "invoicingDate": "2023-04-27T00:00:00",
//            "acquisitionTimestamp": "2023-04-27T08:44:38.256Z",
//            "net": "-162.60",
//            "vat": "-37.40",
//            "gross": "-200.00",
//            "currency": "PLN",
//            "contractorName": "Selfbiller Sp. z o.o.",
//            "contractorIdentifier": "1234563218",
//            "contractorIdentifierType": "onip",
//            "buyer": {
//                "name": "Selfbiller Sp. z o.o.",
//                "identifier": "1234563218",
//                "identifierType": "onip"
//            }
//        },
//        {
//            "invoiceReferenceNumber": "2023/04/27/1",
//            "ksefReferenceNumber": "1234563218-20230427-3A23FF-1D2E40-AB",
//            "invoicingDate": "2023-04-27T00:00:00",
//            "acquisitionTimestamp": "2023-04-27T08:40:50.343Z",
//            "net": "1667.61",
//            "vat": "383.38",
//            "gross": "2051.00",
//            "currency": "PLN",
//            "contractorName": "Selfbiller Sp. z o.o.",
//            "contractorIdentifier": "1234563218",
//            "contractorIdentifierType": "onip",
//            "buyer": {
//                "name": "Selfbiller Sp. z o.o.",
//                "identifier": "1234563218",
//                "identifierType": "onip"
//            }
//        },
//        {
//            "invoiceReferenceNumber": "FK2022/03/200",
//            "ksefReferenceNumber": "9999999999-20230426-2D0093-F54A24-53",
//            "invoicingDate": "2023-04-26T00:00:00",
//            "acquisitionTimestamp": "2023-04-26T12:58:40.439Z",
//            "net": "-162.60",
//            "vat": "-37.40",
//            "gross": "-200.00",
//            "currency": "PLN",
//            "contractorName": "Jan Kowalski",
//            "buyer": {
//                "name": "Jan Kowalski"
//            }
//        },
//        {
//            "invoiceReferenceNumber": "FV2022/02/150/111111",
//            "ksefReferenceNumber": "9999999999-20230426-45B4AD-50F407-E1",
//            "invoicingDate": "2023-04-26T00:00:00",
//            "acquisitionTimestamp": "2023-04-26T06:56:44.682Z",
//            "net": "1667.61",
//            "vat": "383.38",
//            "gross": "2051.00",
//            "currency": "PLN",
//            "contractorName": "Jan Kowalski",
//            "buyer": {
//                "name": "Jan Kowalski"
//            }
//        }
//    ],
//    "count": 124
//}

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
                return view('ksef.get_info_user', compact('user', 'name', 'status'));
            } else {
                return redirect()->route('home');
            }
        } catch (Exception $e) {
            return $e;
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


}

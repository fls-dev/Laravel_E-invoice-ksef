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


        $invoices = file_get_contents("tests/$type.txt");

        $invoicesData = json_decode(stripslashes($invoices), true);

//        $invoicesData = json_decode(stripslashes($invoices), true)['invoiceHeaderList'];

//       return $invoicesData;
        if($type == "subject1"){
            $data = array();
            foreach ($invoicesData as $i){
                $u = array();
                $u[] = $i['subjectBy']['issuedByIdentifier']['identifier'];
                if($i['subjectBy']['issuedByName']['type'] == "fn"){
                    $u[] = $i['subjectBy']['issuedByName']['fullName'];
                }elseif ($i['subjectBy']['issuedByName']['type'] == "pn"){
                    $u[] = sprintf("%s %s",$i['subjectBy']['issuedByName']['firstName'],$i['subjectBy']['issuedByName']['surname']);
                }$u[] = $i['ksefReferenceNumber'];
                $u[] = $i['invoiceReferenceNumber'];
                $u[] = $i['invoicingDate'];
                $u[] = $i['net'];
                $u[] = $i['gross'];
                $u[] = $i['vat'];
                $u[]  = '<button class="open-invoice" data-ref="'. $i['ksefReferenceNumber'] . '">Open</button>';
//                $u['n_nip'] = $i['subjectBy']['issuedByIdentifier']['identifier'];
//                if($i['subjectBy']['issuedByName']['type'] == "fn"){
//                    $u['n_name'] = $i['subjectBy']['issuedByName']['fullName'];
//                }elseif ($i['subjectBy']['issuedByName']['type'] == "pn"){
//                    $u['n_name'] = sprintf("%s %s",$i['subjectBy']['issuedByName']['firstName'],$i['subjectBy']['issuedByName']['surname']);
//                }$u['ksefNumber'] = $i['ksefReferenceNumber'];
//                $u['invoiceNumber'] = $i['invoiceReferenceNumber'];
//                $u['invoicingDate'] = $i['invoicingDate'];
//                $u['net'] = $i['net'];
//                $u['gross'] = $i['gross'];
//                $u['vat'] = $i['vat'];
                $data[]=$u;
            }
            return $data;
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
        }else{
            $data = array();
            foreach ($invoicesData as $i){
                $u = array();
                if($i['subjectBy']['issuedByName']['type'] == "fn"){
                    $u['n_name'] = $i['subjectBy']['issuedByName']['fullName'];
                }elseif ($i['subjectBy']['issuedByName']['type'] == "pn"){
                    $u['n_name'] = sprintf("%s %s",$i['subjectBy']['issuedByName']['firstName'],$i['subjectBy']['issuedByName']['surname']);
                }
                $u['sp_nip'] = $i['subjectBy']['issuedByIdentifier']['identifier'];
                if(isset($i['subjectTo']['issuedToIdentifier']['identifier'])){
                    $u['n_nip'] = $i['subjectTo']['issuedToIdentifier']['identifier'];
                }else{ $u['n_nip'] = "no data";}
                if($i['subjectTo']['issuedToName']['type'] == "fn"){
                    $u['sp_name'] = $i['subjectTo']['issuedToName']['fullName'];
                }elseif ($i['subjectTo']['issuedToName']['type'] == "pn") {
                    $u['sp_name'] = sprintf("%s %s", $i['subjectTo']['issuedToName']['firstName'], $i['subjectTo']['issuedToName']['surname']);
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
        }
    }
    public function getDataFromInvoice()
    {
        $invoice = file_get_contents("tests/invoiceTestDef.txt");
        $xml = simplexml_load_string($invoice, "SimpleXMLElement", LIBXML_NOCDATA);
        $json = json_encode($xml);
        $array = json_decode($json,TRUE);
        return $array;
    }

    public function sendInvoice(){
        $invoice = file_get_contents('tests/default.xml');

        $bytes = unpack('C*', $invoice);

        $size = count($bytes);
        $shaBase64 = base64_encode(hash('sha256', $invoice, True));

        $invoice = base64_encode($invoice);

        dd($size, $shaBase64, $invoice);
    }

}

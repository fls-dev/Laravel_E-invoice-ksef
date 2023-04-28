<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use mysql_xdevapi\Exception;
use SimpleXMLElement;

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
       $id = request('id');
       $user = $users = DB::table('users')->where('id', $id)->first();
       if($user) {
           $name = $user->name;
           return view('ksef.get_info_user', compact('user', 'name'));
       }else{
           return redirect()->route('home');
       }
   }


//REQUESTS to KSEF

    public function AuthorisationChallenge()
    {
        try {
//            $nip = request('nip');
//            $data = array(
//                'contextIdentifier'=>array(
//                    'type'=>'onip',
//                    'identifier'=> $nip
//                )
//            );
//
//            $curl = curl_init();
//            curl_setopt_array($curl, array(
//                CURLOPT_URL => 'https://ksef-test.mf.gov.pl/api//online/Session/AuthorisationChallenge',
//                CURLOPT_RETURNTRANSFER => true,
//                CURLOPT_ENCODING => '',
//                CURLOPT_MAXREDIRS => 10,
//                CURLOPT_TIMEOUT => 0,
//                CURLOPT_FOLLOWLOCATION => true,
//                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
//                CURLOPT_CUSTOMREQUEST => 'POST',
//                CURLOPT_POSTFIELDS => json_encode($data),
//                CURLOPT_HTTPHEADER => array(
//                    'Content-Type: application/json'
//                ),
//            ));
//
//            $response = curl_exec($curl);
//            curl_close($curl);
//
//            $response = json_decode($response);


            $fake = '{"timestamp":"2023-04-28T11:28:01.376Z","challenge":"20230428-CR-E774B6721B-94EF3EC867-89"}';
            $response = json_decode($fake);

            return $response;

        }catch (Exception $e) {
            return false;
        }
    }


    public function InitToken()
    {
        try {
            $authChallenge = $this->AuthorisationChallenge();
            if($authChallenge){
                $xml = new SimpleXMLElement('<?xml version="1.0" encoding="UTF-8" standalone="no"?>
<ns3:InitSessionTokenRequest xmlns:ns3="http://ksef.mf.gov.pl/schema/gtw/svc/online/auth/request/2021/10/01/0001" xmlns="http://ksef.mf.gov.pl/schema/gtw/svc/online/types/2021/10/01/0001" xmlns:ns2="http://ksef.mf.gov.pl/schema/gtw/svc/types/2021/10/01/0001">
<ns3:Context>
	<Challenge>'.$authChallenge->challenge.'</Challenge>
	<Identifier xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:type="ns2:SubjectIdentifierByCompanyType">
		<ns2:Identifier>9999999999</ns2:Identifier>
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
	<Token>LUi973EA7RCInbrryrj8DcE9N0uR8ynylbTfZ8c8pS/ZDl/+HpJb8Ej/zMwapXFMol50KDADFKRjQ+51LiWaEhL9cHeNKem3xazdEen3wC9lID27YiL45O3AykqOLmdmRMAA14Rq/wB1Hxq3aDCk8dXN2Uolzj+xsjtpw6pGKXLxBnHd+uwuZLrtVWb1bHZnB/K84ZKSF4DRYQBiJ8DDno7ElNdqac+er4+rnAjFm0FHOWw5TSc0nfdY//7kZr7mQRPs9AvrH2Da6V7XmMTyq030XoYoltK4e0PshFlXQsFOIZJWMu38uYkKwE+6AlydLBBVVk+EyMSqXNzgLZJUHg==</Token>
</ns3:Context>
</ns3:InitSessionTokenRequest>');


                $xmlString = $xml->asXML();

                dd($xml, $xmlString);
            }
        }catch (\Exception $e){

    }


//        $curl = curl_init();
//        curl_setopt_array($curl, array(
//            CURLOPT_URL => 'https://ksef-test.mf.gov.pl/api//online/Session/InitToken',
//            CURLOPT_RETURNTRANSFER => true,
//            CURLOPT_ENCODING => '',
//            CURLOPT_MAXREDIRS => 10,
//            CURLOPT_TIMEOUT => 0,
//            CURLOPT_FOLLOWLOCATION => true,
//            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
//            CURLOPT_CUSTOMREQUEST => 'POST',
//            CURLOPT_POSTFIELDS => "<file contents here>",
//            CURLOPT_HTTPHEADER => array(
//                'Content-Type: application/octet-stream'
//            ),
//        ));
//
//        $response = curl_exec($curl);
//
//        curl_close($curl);
//        echo $response;

    }



}
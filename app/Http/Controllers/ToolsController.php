<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ToolsController extends Controller
{
    public function getIp(){
    $client_ip = $this->get_client_ip();
    $curl = curl_init();

    curl_setopt_array($curl, array(

        CURLOPT_URL => "https://freegeoip.app/json/",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_HTTPHEADER => array(
            "accept: application/json",
            "content-type: application/json"
        ),
    ));

    $res = curl_exec($curl);
    curl_close($curl);
    $jsonRes = json_decode($res);

    // dd($jsonRes);
    $data = [
        'ip' => $client_ip,
        'city' => $jsonRes->city,
        'country_code' => $jsonRes->country_code,
        'country_name' => $jsonRes->country_name,
        'region_code' => $jsonRes->region_code,
        'region_name' => $jsonRes->region_name,
        'zip_code' => $jsonRes->zip_code,
        'time_zone' => $jsonRes->time_zone,
        'latitude' => $jsonRes->latitude,
        'longitude' => $jsonRes->longitude
    ];
    return view('tools.get_ip')->with('data', $data);  
    }
    public function get_client_ip() {
        $ipaddress = '';
        if (isset($_SERVER['HTTP_CLIENT_IP']))
            $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
        else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
            $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
        else if(isset($_SERVER['HTTP_X_FORWARDED']))
            $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
        else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
            $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
        else if(isset($_SERVER['HTTP_FORWARDED']))
            $ipaddress = $_SERVER['HTTP_FORWARDED'];
        else if(isset($_SERVER['REMOTE_ADDR']))
            $ipaddress = $_SERVER['REMOTE_ADDR'];
        else
            $ipaddress = 'UNKNOWN';
        return $ipaddress;
      }
}

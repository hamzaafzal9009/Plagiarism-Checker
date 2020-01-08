<?php

namespace App\Http\Controllers;
use App\IP;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){
      // $client_ip = $this->get_client_ip();
      // $ip = new IP;
      // $ip->address = $client_ip;
      // $ip->save();
      // return $client_ip;
      // dd($client_ip);
      return view('index');
    }
    public function about(){
      return view('about');
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

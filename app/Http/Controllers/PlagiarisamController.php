<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlagiarisamController extends Controller
{

    public function index(){
      return view('plagiarism.index');
    }

    public function store(Request $request){
      $text = $request->text;
      
      $key = 'AIzaSyD9ZrQLJdSpCutQ7UMKrEwLZNMbTyYTuSA';
      $cxx = '014284782560130126209:8mhayiijzia';
      $tooSearch = str_replace(' ', '+', $text);
      $url = "https://www.googleapis.com/customsearch/v1?key=" . $key . "&cx=" . $cxx . "&q=". $tooSearch;
      $ch = curl_init($url);
      curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
      curl_setopt($ch, CURLOPT_URL,$url);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      $output = curl_exec ($ch);

      $obj = json_decode($output);
      // dd($obj);
      // echo "Search Time = " . $obj->searchInformation->searchTime;
      // echo '<br>';
      // echo "Total Time = " . $obj->searchInformation->formattedTotalResults;
      // echo '<br>';
      $avarage = array();
      $result_data = array();
      foreach ($obj->items as $key => $item) {
        // echo ' Index = '.$key . '<br>';
        // echo ' Title = ' . $item->title . '<br>';
        // echo ' Matched = ' . $item->htmlSnippet . '<br>' ;
        $searchFrom = explode(' ', $text);
        $searchResult = explode(' ', $item->htmlSnippet);
        $common = array_intersect($searchFrom, $searchResult);
        $totalMatch = count($common);
        $totalPerc = $totalMatch/str_word_count($text) * 100;
        array_push($avarage, $totalPerc);
        // echo '<br>';
    }

    // print_r($avarage);
    $avarage_sum = array_sum($avarage);
    $avarage_length = count($avarage);
    $totalAvarage = $avarage_sum/$avarage_length;
    $unique = 100 - round($totalAvarage);
    // echo $totalAvarage;

      // $client = new \GuzzleHttp\Client;
      // $info = curl_getinfo($ch);
      // $http_result = $info ['http_code'];
      // dd($http_result);
      // $data =$client->request('GET', "https://www.googleapis.com/customsearch/v1?key=" . $key . "&cx=" . $cxx . "&q=". $tooSearch, [
      //  'headers' => [
      //      'Accept'     => 'application/json',
      //      'Content-type' => 'application/json'
      //  ]
      //  ]);
      //  $x = json_decode($data->getBody()->getContents());
      //  return $x;
      $data = [
        'plagrized' => round($totalAvarage),
        'unique' => $unique
      ];
       return view('plagiarism.index')->with('data', $data);
    }


}

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
      $client = new \GuzzleHttp\Client;

      $key = 'AIzaSyD9ZrQLJdSpCutQ7UMKrEwLZNMbTyYTuSA';
      $cxx = '014284782560130126209:8mhayiijzia';
      $tooSearch = str_replace(' ', '+', $text);
      $data =$client->request('GET', "https://www.googleapis.com/customsearch/v1?key=" . $key . "&cx=" . $cxx . "&q=". $tooSearch, [
       'headers' => [
           'Accept'     => 'application/json',
           'Content-type' => 'application/json'
       ]
       ]);

       $x = json_decode($data->getBody()->getContents());
       return view('plagiarism.index')->with('data', $x);
      //  foreach ($x->items as $key => $value) {

      //   echo $key  . $value->htmlSnippet . '<br><br>';
      //   $searchFrom = explode(' ', $text);
      //   $searchResult = explode(' ', $value->htmlSnippet);

      //   // print_r($searchResult);
      //   $common = array_intersect($searchFrom, $searchResult);
      //   // print_r($common);
      //   $totalMatch = count($common);
      //   $totalMatch/str_word_count($text) * 100 . '%';
        
      //  }
      //  return $x->items[0]->title;
      //  $response = response()->json($x);
      //  return $response->items;
      
      // return $response->title;
      //  return response()->json($x->items);
    }


}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use GuzzleHttp\Client;

class PageController extends Controller
{
    public function index () {
        $user = Auth::user();
        return view('pages/home', compact('user'));
    }

    public function results(){
    //    'https://api.unsplash.com/photos/?client_id=omz2aIY5tZ1_JlR584Rzuze9P7_uaaoEA8HgzTnyYog'

   


    
        $client = new Client();
        $res = $client->request('GET', 'https://api.unsplash.com/photos/?client_id=omz2aIY5tZ1_JlR584Rzuze9P7_uaaoEA8HgzTnyYog');
        $body = $res->getBody();
        $bodyString = $body->__toString();
        $data = json_decode($bodyString);
      
         
        $imageUrl = $data[2]->user->profile_image->large;
        return $data; 
     
        // foreach($data[0]->urls as $category ) {
           
           
            // if(in_array("raw", $category)) {
            //     array_push($filteredData, $category[0]);
                
            // }
            // else {
               
                // return $data; 
               
                 
        // $testString = ($data[0]->urls);
        // return gettype(var_dump($testString));
        // return gettype($testString);
        // $testString = $testString->__toString(); 
        //  return explode(',', $testString) ;
          
        // return str_split(',',$data[0]->urls);
        // return $data; 
       
        // foreach($data->results as $result){
        //     $tags = $result->tags;
        //     // return $tags;
        //     foreach($tags as $tag){
        //       $title = $tag->title;
        //       // return $title;
        //       $arr = explode(" ",$title);
        //       if(in_array("city", $arr)){
        //         array_push($filteredData, $result);
        //       }
        //     }
        //   }

      
        $user = Auth::user();
        return view('pages/results', compact('user', 'imageUrl'));
    }
}

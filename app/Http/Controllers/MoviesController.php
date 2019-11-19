<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;


class MoviesController extends Controller

{
    function seeAllMovies(){

      $client = new Client();
      $response = $client->request('GET', 'http://www.omdbapi.com/?apikey=27f1cf09&t=widows&y=2018');
      $dataJson = $response->getBody()->getContents();
      $movie = json_decode($dataJson);
      // dd($dataJson, $movie);
      return view('movies', compact('movie'));
    }

}    



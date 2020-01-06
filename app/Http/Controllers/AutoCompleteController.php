<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
Use App\Article;


class AutoCompleteController extends Controller
{
    public function index() {
        return view('search');
    }
 
    public function search(Request $request) {
          $data = Article::select("title")->where("title","LIKE","%{$request->input('search')}%")->take(5)->get();


          $modified_data = array();

          foreach ($data as $key) {
          		$modified_data[] = $key->title;
           } 


          return $modified_data;
            
    } 
}


		
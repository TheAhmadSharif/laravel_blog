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

          $data = Article::Where("title","like","%{$request->input('search')}%")->take(3)->get();


          return $data;
            
    } 
}
<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
Use App\Article;


class AutoCompleteController extends Controller
{
    public function index(Request $request) {
    	  $data = Article::Where("title","like","%{$request->input('search')}%")->orderBy('id', 'asc')->paginate(6);
          return view('search', ['Articles' => $data]);
    }
 
    public function search(Request $request) {
          $data = Article::Where("title","like","%{$request->input('search')}%")->take(3)->get();
          return $data;
            
    } 
}
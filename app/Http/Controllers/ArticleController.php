<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
Use App\Article;
use Illuminate\Routing\UrlGenerator;
use Session;
use Redirect;



class ArticleController extends Controller
{
  

    public function create (Request $request) {
    	$rules = [
    		'title' => 'regex:/^[\a-zA-Z.&();, ]{10,60}$/i',
            'body' => 'required|min:10/i'
    	];
        
        
        $title = $request->input('title');
        $body = $request->input('body');

        if ($this->validate($request, $rules)) {
            DB::insert('insert into articles (title, body) values(?, ?)',[$title, $body]);
            $request->session()->flash('message', 'Article save successfully!');
            return Redirect::to('article/list');
        }

    	
    }


    public function update (Request $request, $id) {

        $rules = [
            'title' => 'regex:/^[\a-zA-Z.&();,+-? ]{10,60}$/i',
            'body' => 'required|min:10/i'
        ];

        if ($this->validate($request, $rules)) {
             $article = Article::find($id);
             $article->title = $request->input('title');
             $article->body  = $request->input('body');
             $article->save();
             $request->session()->flash('message', 'Article updated successfully!');
             return Redirect::to('article/list');
        }

       
        
    }


   

    public function query (Request $request) {
        $search = Article::search('Modi tempora optio et quia.')->get();
        return $search;
    }

 }

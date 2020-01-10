<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
Use App\Article;
use Illuminate\Routing\UrlGenerator;
use Session;
use Redirect;
use Laravel\Scout\Searchable;




class ArticleController extends Controller
{
  

    public function store (Request $request) {
    	$rules = [
    		'title' => 'required|min:10/i',
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


public function delete (Request $request, $id) {
        $article = Article::find($id);
        if($article){
            $destroy = Article::destroy($id);
        }
        
        $request->session()->flash('message', 'Article deleted successfully!');
        return Redirect::to('article/list');
}


   

    public function query (Request $request) {


        $search = Article::search('Amet ducimus')->raw();

        echo $search;


        return $search;
    }

 }

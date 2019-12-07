<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
  

    public function create (Request $request) {
    	$rules = [
    		'title' => 'required|min:10',
            'body' => 'required|min:10'
    	];
    	$this->validate($request, $rules);


        $title = $request->input('title');
        $body = $request->input('body');
        DB::insert('insert into articles (title, body) values(?, ?)',[$title, $body]);

        echo "Record inserted successfully.";

    	return $request->all();
    }


    public function edit($id){
        $user = User::find($id);
        return View::('edit')->with(compact('user'));
    }
 }

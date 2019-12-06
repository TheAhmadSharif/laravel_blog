<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        return 'hi';
    }
 
    public function show($id)
    {
        return Article::find($id);
    }
}

<?php
Use App\Article;
use Illuminate\Http\Request; 
use Illuminate\Support\Facades\DB;
use App\Http\Controllers;


Route::get('/', function () {
    return view('welcome', ['name' => 'AhmadSharif']);
});

Route::get('/about', function () {
	return view('about');
});

Route::get('api', function () {
	$Article = DB::select('select * from articles order by id desc limit 10');
	return $Article;
});

Route::get('article/list', function() {
	$Article = DB::table('articles')->orderBy('id', 'asc')->paginate(10);
	return view('article/index', ['Articles' => $Article]);
});

Route::get('articles/{id}', function($id) {
	return Article::find($id);
});

Route::get('article/create', function() {
	return view('article.create');
});

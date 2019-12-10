<?php
Use App\Article;
use Illuminate\Http\Request; 
use Illuminate\Support\Facades\DB;
use App\Http\Controllers;
use Laravel\Scout\Searchable;
use Illuminate\Routing\UrlGenerator;
use Illuminate\Validation\Validator;

Route::get('api', function () {
	$Article = DB::select('select * from articles order by id desc limit 100');
	return $Article;
});

Route::get('/', function () {
	$data = DB::select('select * from articles order by id desc limit 9');
    return view('welcome', ['Articles' => $data]);
});

Route::get('about', function () {
	return view('about');
});

Route::get('article/list', function() {
	$Article = DB::table('articles')->orderBy('id', 'asc')->paginate(10);
	return view('article/index', ['Articles' => $Article]);
});


Route::get('article/list/{id}', function($id) {
	$data = Article::find($id);
	if ($data) {
		return view('article/single', ['Article' => $data]);
	}
	else {
		return view('errors/404');
	}
});

Route::get('article/create', function() {
	return view('article.create');
});


Route::get('article/edit/{id}', function($id) {
	$data = Article::find($id);
	return view('article.edit', ['Article' => $data]);
});

Route::put('article/update/{id}', 'ArticleController@update');
Route::get('article/delete/{id}', 'ArticleController@delete');


Route::post('article/store', 'ArticleController@store');
Route::get('/search/query', 'ArticleController@query');






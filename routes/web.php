<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
// ---------------------------------------------------------------
// Route::get('/posts/{post}', function ($post) {
//     $posts = [
//         'first-post' => 'this is my first post',
//         'second-post' => 'this is my second post'
//     ];
//     return view( 'test.post', [
//         'postee' => $posts[$post]
//     ]);
// });
// ----------------------------------------------------------------

// Route::get('/test', function() {
//     $name = request('name');
//     return $name;
// });

// ----------------------------------------------------------------

// Route::get('/post/{slug}','PostController@show');

// ----------------------------------------------------------------

Route::get('/about', function(){
    return view('test.article');
});

Route::get('/article',function (){
    $article = App\Articles::all();
    return $article;
    return view('test.about', [ 'article'=>$article ]);
});

Route::get('/article/{article}', 'ArticlesController@show');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//Questionnaires
Route::get('/questionnaires/create', 'QuestionnairesController@create');
Route::post('/questionnaires', 'QuestionnairesController@store');
Route::get('/questionnaires/{questionnaire}', 'QuestionnairesController@show');

//Question
Route::get('/questionnaires/{questionnaire}/question/create', 'QuestionController@create');
Route::post('/questionnaires/{questionnaire}/question', 'QuestionController@store');


//Answare

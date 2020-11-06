<?php


//use 
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

// Route::get('/', 'PageController@home');

// Route::get('/about', 'PageController@about');

// Route::get('/contact', 'PageController@contact');

// Route::get('/', function() {
//     $articles = App\Article::latest('id')->get();

//     return view('welcome', [
//         'articles' => $articles
//     ]);
        
// });

//Route::get('/','PageController@index');


// Route::get('/', function() {
//     return view('welcome');
// });

Route::get('/about', function() {
    return view('about');
});

Route::get('/post', function() {
    return view('post');
});

Route::get('/article/{article}', 'ArticleController@index');

Route::get('/contact', function() {
    return view('contact');
});
Auth::routes();
Route::get('/home', 'HomeController1@index')->name('home');

Route::get('/manage', 'ManageController@manage')->name('manage');
Route::get('/manage/addArticle','ManageController@add');
Route::post('/addArticle/create','ManageController@create');
Route::get('/manage/editArticle/{id}','ManageControlle@edit');
Route::post('/editArticle/update/{id}','ManageController@update');
Route::get('/manage/delete/{id}','ManageController@delete');

Route::get('/manageUser', 'ManageUserController@manageUser');
Route::get('/manageUser/addUser','ManageUserController@add');
Route::post('/manageUser/create','ManageUserController@create');
Route::get('/manageUser/editUser/{id}','ManageUserController@edit');
Route::post('/manageUser/update/{id}','ManageUserController@update');
Route::get('/manageUser/delete/{id}','ManageUserController@delete');
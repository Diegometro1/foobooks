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


//Route::view('/' , 'welcome');


/*
Route::get('/book/war-and-peace',  function(){
    return 'you want to view the book war and peace';

});
*/


//route parameters

Route::get('/book/{title?}', function($title = ''){

    if($title == ' '){
        return 'you have to specify a book title';

    }


    return 'You are viewing war and peace' . $title;

});




Route::get('/example', function () {
    return view('abc');
});


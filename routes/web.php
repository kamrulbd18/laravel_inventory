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
    return view('page.index');
});

Route::get('/about', function(){
	return view('page.about');
})->name('about');

Route::get('/contact', function(){
	return view('page.contact');
})->name('contact');

Route::get('/writepost', 'postController@AddNewPost')->name('writepost');

// Category CRUD Here ========
Route::get('/addcategory', 'postController@AddNewCategory')->name('addcategory');
Route::post('/storecategory','postController@StoreCategory')->name('storecategory');
Route::get('/allcategories','postController@AllCategory')->name('allcategories');
Route::get('/viewCategory/{id}', 'postController@ViewCategory');
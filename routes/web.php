<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index','NavController@goHome')->name('index');
Route::get('/learnMore','NavController@learnMore')->name('learnmore');
Route::get('/programs','NavController@programs')->name('programs');

Route::get('/about','NavController@about')->name('about');
Route::get('/contact','NavController@goContact')->name('contact');

Route::get('/posts',function(){
    return view('crud.createNews');
})->name('posts');
Route::get('/news','NavController@goToNews')->name('news');
Route::get('/image/{filename}', 'PostController@image' )->name('image');
Route::post('/createPost','PostController@createPost')->name('createPost');
Route::get('/post-details/{post}','PostController@post_details')->name('post-details');

Route::get('/test/image', function(){
    $file=Storage::disk('local')->get("image15.png");        
    return response($file)->header('Content-type','image/png');
});

Route::get('/activities','NavController@goToActivities')->name('activities');
Route::get('/announcements','NavController@goToAnnouncements')->name('announcements');
Route::get('/events','NavController@goToEvents')->name('events');
Route::get('/post-details/{post}','NavController@post_details')->name('post-details');

Route::get('/edit/{post}', 'PostController@edit')->name('edit-post')->middleware('auth');
Route::get('/delete/{post}', 'PostController@delete')->name('delete')->middleware('auth');
Route::post('/store-update/{post}', 'PostController@update')->name('store-update')->middleware('auth');

Route::get('/gallery','NavController@goToGallery')->name('gallery');
Route::post('/upload-image','GalleryController@store')->name('upload-image')->middleware('auth');

Route::get('/search', 'NavController@search')->name('search');



Auth::routes();

Route::get('/logout-user', function(){
    auth()->logout();
    return redirect('index');
})->name('logout-user')->middleware('auth');

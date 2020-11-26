<?php

// Route::get('/', 'welcomeController@index');

// home page for all  normal users  
Route::get('/',  'myHome@index')->name('main_page');

Auth::routes();

// this route  already not used 
// Route::get('/home', 'HomeController@index')->name('home');




Route::group(['middleware' => ['auth']], function () {
    // admin dashboard  shoud loged in 
    Route::get('/admin','AdminController@index'); 
    
    // route dashboard  student 
    Route::get('/student_home', 'myHome@index')->name('student_index');
    
    // route dashboard  doctor 
    Route::get('/doctor_home',  'myHome@doctor')->name('doctor_index');
    
    // route dashboard  admin 
    Route::get('/admin_home',   'AdminController@index')->name('admin_index');
    
    // route dashboard  super admin  
    Route::get('/super_admin_index', 'AdminController@index')->name('super_admin_index');
    
    // all cruds 
    Route::resource('categories','CategoryController');
    Route::resource('book','BookController');
    Route::resource('issue','IssueController');
    Route::resource('user','UserController');
    Route::resource('author','AuthorController');
    Route::resource('publisher','PublisherController');
    Route::resource('visitor','VisitorController');
    Route::any('visitor/user','VisitorController@insert_registered_user')->name("store_exist_user");
    Route::get('logs','LogsController@index')->name('log.index');
});


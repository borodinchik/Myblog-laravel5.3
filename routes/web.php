<?php
//Ссылка на главную станицу
Route::get('/', 'HomeController@index')->name('/');
//Ссылка на добавление нового админа
Route::get('/user_admin/register', function () {
    return view('user_admin.register');
});
//Cсылка на всод в админку
Route::get('/user_admin/sing_in', function () {
    return view('user_admin.sing_in');
});
//Ссылка на саму админку
Route::get('/user_admin/profile_admin', function () {
    return view('user_admin.profile_admin');
});
Route::get('/post/{slug}',[
    'as' => 'get-post',
    'uses' => 'PostController@getPost'
]);
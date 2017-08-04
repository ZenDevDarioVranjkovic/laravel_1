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

Route::get('/', [
    'uses' => 'PostController@getIndex',
    'as' => 'blog.index'
]);

Route::get('post/{id}', [
    'uses' => 'PostController@getPost',
    'as' => 'blog.post'
]);

Route::get('post/{id}/likes', [
    'uses' => 'PostController@getLikePost',
    'as' => 'blog.post.like'
]);

Route::get('about', function () {
    return view('other.about');
})->name('other.about');

Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function() {
    Route::get('', [
        'uses' => 'PostController@getAdminIndex',
        'as' => 'admin.index'
    ]);

    Route::get('create', [
        'uses' => 'PostController@getAdminCreate',
        'as' => 'admin.create'
    ]);

    Route::post('create', [
        'uses' => 'PostController@postAdminCreate',
        'as' => 'admin.create'
    ]);

    Route::get('edit/{id}', [
        'uses' => 'PostController@getAdminEdit',
        'as' => 'admin.edit'
    ]);

    Route::post('edit', [
        'uses' => 'PostController@postAdminUpdate',
        'as' => 'admin.update'
    ]);

    Route::get('delete/{id}', [
        'uses' => 'PostController@getAdminDelete',
        'as' => 'admin.delete'
    ]);

});

Route::get('ticketapi', [
    'uses' => 'TicketApiController@getEvents',
    'as' => 'ticketapi.index'
]);
Route::get('ticketapi/search-events/{searchTerms}', [
    'uses' => 'TicketApiController@searchEvents',
    'as' => 'ticketapi.searchevents'
]);

Route::get('tickets/{id}', function () {
    return view('ticketoffice.tickets');
})->name('ticketoffice.tickets');


Route::get('ticketapi/sport', [
    'uses' => 'TicketApiController@sportEvents',
    'as' => 'ticketapi.sportevents'
]);

Route::get('events/sport', function () {
    return view('ticketoffice.sport');
})->name('ticketoffice.sport');

Route::get('ticketapi/concert', [
    'uses' => 'TicketApiController@concertEvents',
    'as' => 'ticketapi.concertevents'
]);

Route::get('events/concert', function () {
    return view('ticketoffice.concert');
})->name('ticketoffice.concert');


Route::get('events', function () {
    return view('ticketoffice.index');
})->name('ticketoffice.index');

Route::get('search-events', function () {
    return view('ticketoffice.searchevents');
})->name('ticketoffice.searchevents');

Auth::routes();

Route::post('login',[
    'uses' => 'SigninController@signin',
    'as' => 'auth.signin'
]);
<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('leyouts.app');
});


// Route::group(['namespace'=>'Work'],function(){

// });

Route::group(['namespace'=>'Login'], function(){
    Route::group(['namespace' => 'Student', 'prefix'=>'students'], function(){
    // Route::get('/','IndexController')->name('student.index');
    Route::get('/create','CreateController')->name('student.create');
    Route::post('/','StoreController')->name('student.store');
    // Route::get('/{student}','ShowController')->name('student.show');
    // Route::get('/{student}/edit','EditController')->name('student.edit');
    // Route::patch('/{student}','UpdateController')->name('student.update');
    // Route::delete('/{student}','DeleteController')->name('student.delete');
    });
    // Route::group(['namespace' => 'Partner', 'prefix'=>'partners'], function(){
        // Route::get('/','IndexController')->name('partner.index');
        // Route::get('/create','CreateController')->name('student.create');
        // Route::post('/','StoreController')->name('student.store');
        // Route::get('/{student}','ShowController')->name('student.show');
        // Route::get('/{student}/edit','EditController')->name('student.edit');
        // Route::patch('/{student}','UpdateController')->name('student.update');
        // Route::delete('/{student}','DeleteController')->name('student.delete');
    // });
    Route::group(['namespace' => 'Lecturer', 'prefix'=>'lecturers'], function(){
        // Route::get('/','IndexController')->name('lecturer.index');
        Route::get('/create','CreateController')->name('lecturer.create');
        Route::post('/','StoreController')->name('lecturer.store');
        // Route::get('/{student}','ShowController')->name('student.show');
        // Route::get('/{student}/edit','EditController')->name('student.edit');
        // Route::patch('/{student}','UpdateController')->name('student.update');
        // Route::delete('/{student}','DeleteController')->name('student.delete');
    });
    // Route::group(['namespace' => 'Institution', 'prefix'=>'institutions'], function(){
        // Route::get('/','IndexController')->name('institution.index');
        // Route::get('/create','CreateController')->name('institution.create');
        // Route::post('/','StoreController')->name('institution.store');
        // Route::get('/{student}','ShowController')->name('student.show');
        // Route::get('/{student}/edit','EditController')->name('student.edit');
        // Route::patch('/{student}','UpdateController')->name('student.update');
        // Route::delete('/{student}','DeleteController')->name('student.delete');
    // });
    Route::group(['namespace' => 'Guest', 'prefix'=>'guests'], function(){
        // Route::get('/','IndexController')->name('guest.index');
        Route::get('/create','CreateController')->name('guest.create');
        Route::post('/','StoreController')->name('guest.store');
        // Route::get('/{student}','ShowController')->name('student.show');
        // Route::get('/{student}/edit','EditController')->name('student.edit');
        // Route::patch('/{student}','UpdateController')->name('student.update');
        // Route::delete('/{student}','DeleteController')->name('student.delete');
    });
    Route::group(['namespace' => 'Employer', 'prefix'=>'employers'], function(){
        // Route::get('/','IndexController')->name('employer.index');
        Route::get('/create','CreateController')->name('employer.create');
        Route::post('/','StoreController')->name('employer.store');
        // Route::get('/{student}','ShowController')->name('employer.show');
        // Route::get('/{student}/edit','EditController')->name('employer.edit');
        // Route::patch('/{student}','UpdateController')->name('employer.update');
        // Route::delete('/{student}','DeleteController')->name('employer.delete');
    });

});

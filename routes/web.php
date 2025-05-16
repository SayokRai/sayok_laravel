<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/company',function(){
    return view('company.index');
});

Route::get('/company/create',function(){
    return view('company.create');
});

Route::get('/company/edit',function(){
    return view('company.edit');
});

route::get('/save-company',function(Request $request){
    return $request;
});

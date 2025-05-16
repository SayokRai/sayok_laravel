<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Company;

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
    // return $request;
    $company = new Company();
    $company->name = $request->name;
    $company->email = $request->email;
    $company->address = $request->address;
    $company->save();
    return redirect('/company');
});

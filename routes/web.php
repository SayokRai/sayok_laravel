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
    $companies = Company::all();
    return view('company.index', compact('companies'));
});

Route::get('/company/create',function(){
    return view('company.create');
});

Route::get('/company/edit',function(){
    return view('company.edit');
});

route::post('/save-company',function(Request $request){
    // return $request;
    $company = new Company();
    $company->name = $request->name;
    $company->email = $request->email;
    $company->address = $request->address;
    $file = $request->logo;
    if ($file){
        $file_name = time() . "." . $file->getClientOriginalExtension();
        $file->move("photos",$file_name);
        $company->logo = "photos/$file_name";
    }//name+.+file_extension 122345.jpg
    $company->save();
    return redirect('/company');
});

Route::delete("/delete-company/{id}", function($id){
    Company::find($id)->delete();
    return redirect('/company');
});

Route::get("/edit-company/{id}", function($id){
    $company = Company::find($id);
    return view('company.edit', compact('company'));
});

route::put('/update-company/{id}',function(Request $request, $id){
    // return $request;
    $company = Company::find($id);
    $company->name = $request->name;
    $company->email = $request->email;
    $company->address = $request->address;
    $file = $request->logo;
    if ($file){
        $file_name = time() . "." . $file->getClientOriginalExtension();
        $file->move("photos",$file_name);
        $company->logo = "photos/$file_name";
    }//name+.+file_extension 122345.jpg
    $company->save();
    return redirect()->back();
});
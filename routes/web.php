<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Company;
use App\Models\Student;

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

route::get('/students', function () {
    return view('students.index');
});

route::get('/students/create', function () {
    return view('students.create');
});

route::post('/save-students', function (Request $request) {
    $student = new Student();
    $student->name = $request->name;
    $student->age = $request->age;
    $student->grade = $request->grade;
    $student->address = $request->address;
    $file = $request->photo;
    if ($file){
        $fileName = time() . '.' . $file->getClientOriginalExtension();
        $file->move ("photos",$fileName);
        $student-> photo = "photos/$fileName";
    }
    $student->save();
    return redirect('/student');
});

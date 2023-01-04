<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\maincontroller;


Route::get('/', function () {
    return view('welcome');
});

Route::view('admin_item','itemlist');
Route::post('insertdata',[maincontroller::class,"insert"]);
Route::get('Update',[maincontroller::class,'updateData']);
Route::get('updatedata',[maincontroller::class,'Updatee']);
Route::get('showdata',[maincontroller::class,'retrieveData'])->name('showdata');
Route::get('menu',[maincontroller::class,'getEachItems']);
Route::get('contact',[maincontroller::class,'contact'])->name('contact');
Route::post('addcontact',[maincontroller::class,'send'])->name('addcontact');
Route::view('about','about');

Route::get('admin_login',[maincontroller::class,'adminindex'])->name('admin_login'); 
Route::post('admin',[maincontroller::class,'adminlogin'])->name('admin');  

Route::group(['middleware'=>'guest'],function(){ 
    Route::get('login',[maincontroller::class,'index'])->name('login'); 
    Route::post('login',[maincontroller::class,'login'])->name('login');    

    Route::get('register',[maincontroller::class,'register'])->name('register');
    Route::post('register',[maincontroller::class,'registered'])->name('register');
});

Route::group(['middleware'=>'auth'],function(){
    Route::get('home',[maincontroller::class,'welcome'])->name('welcome');
    Route::get('logout',[maincontroller::class,'logout'])->name('logout');
});

?>


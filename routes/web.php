<?php

use App\Http\Controllers\beehiveController;
use App\Http\Controllers\tablighController;
use App\Http\Controllers\descController;
use App\Http\Controllers\kandooController;
use App\Http\Controllers\textmainpage\Groupcontroller;
use App\Http\Controllers\textmainpage\MainpageController;
use App\Http\Controllers\serachController;


use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('kandoo.index');
});
Route::get('/contact', function () {
    return view('Oder.contact');
});
Route::resource('main2', serachController::class);
Route::resource('desc',descController::class);
Route::resource('show',MainpageController::class)->name('show','textmainshow');

Auth::routes();
//مسیر های زنبورستان
Route::resource('/beehive/createbeehive',beehiveController::class)->name('create','addbeehive');
Route::resource('/beehive/addbeehive',beehiveController::class)->name('store','storebeehive');
Route::resource('/beehive/deletebeehive',beehiveController::class)->name('destroy','deletebeehive');

Route::resource('main2', serachController::class);
Route::resource('desc',descController::class);
//مسیر های تبلیغ
Route::resource('/profile/tabligh',tablighController::class)->name('index','tabligh');
Route::resource('/profile/aatabligh',tablighController::class)->name('store','tabligh1');
Route::resource('/profile/delete',tablighController::class)->name('destroy','deletetabligh');
Route::resource('/profile/create',tablighController::class)->name('create','createtabligh');

//مسیر های مطالب سفحه اصلی
Route::resource('profile/addtextmainpage/save',MainpageController::class)->name('store','storepage');
Route::resource('/profile/addtextmainpage',MainpageController::class)->name('index','mainpage');
Route::resource('/profile/addtextmainpage/addmainpage',MainpageController::class)->name('create','addpage');
Route::resource('/profile/addtextmainpage/delete',MainpageController::class)->name('destroy','delete');
Route::resource('/profile/addtext/edit',MainpageController::class)->name('edit','editemainpage');
Route::resource('/profile/addtext/update',MainpageController::class)->name('update','updatemainpage');
//میر دسته بندی های مطلب
Route::resource('/profile/group/add',Groupcontroller::class)->name('create','addgroups');
Route::resource('/profile/group/store',Groupcontroller::class)->name('store','storegroup');
Route::resource('/profile/group/delete',Groupcontroller::class)->name('destroy','deletegroup');



//اطلاعات کاربر
Route::resource('/profile',UserController::class)->name('index','profile.index');

Route::resource('/profile/show',UserController::class)->name('show','showuser');
Route::resource('/profile/edit',UserController::class)->name('edit','showedit');
Route::resource('/profile/update',UserController::class)->name('update','updateuser');




//مسیر های اصلی قسمت کندو ها و پنل کاربری
Route::resource('/profile',UserController::class);
Route::resource('main',kandooController::class);
Route::resource('main',kandooController::class)->name('index','main.index');
//مسیر تغییر عکس پروفایل کاربر
Route::resource('/profile',UserController::class)->name('picture','picturee');


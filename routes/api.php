<?php


use App\Models\bee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
//اطلاعات کاربر
Route::get('/user', function (Request $request){
    return  $request->user();
})->middleware('auth:sanctum');
//اتصال کاربر و دریافت توکن
Route::post('/login', 'App\Http\Controllers\Auth\UserController@login');
//نمایش لیست کندو های مرتبط با کاربر
Route::get('/coloni', function (Request $request){
    $bee=\App\Models\bee::where('id_user',$request->user()->id)->get();
    return $bee;

})->middleware('auth:sanctum');
//نمایش جزئیات کندوها بر اساس id کندوی اصلی
Route::get('/bee3/{id}', function (Request $request){

    $desc = \App\Models\desc::where('desc_id',$request->id)->get();

    return $desc;
})->middleware('auth:sanctum');
//ثبت اطلاعات کندو ها در دیتابیس
Route::post('/create', function (Request $request){


    $rows = $request->all();
    $user_id=$request->user()->id;
    $rows['id_user']=$user_id;
    $rows['picture'] = 'test';
    $id = Bee::create($rows)->id;

    $file_data = $request->picture;
    $image = base64_decode($file_data);
    $image_name= $id.'.'.'jpg';
    $rows['picture'] = $image_name;
    $path = public_path( "upload/image/").$image_name;
    file_put_contents($path, $image);
    $row = Bee::find($id);

    $row->update($rows);
    echo 'successfully !';
})->middleware('auth:sanctum');
//ارسال مطالب سیت
Route::get('/news', function (Request $request){

    $news=\App\Models\Mainpage::all();
    return $news;
});

@extends('profile')
@section('info')
    @include('profile.navbar')
    @include('profile.sidebar')

        <div  dir="rtl" align="right">
    <div class="row form-group" >
        <h1>مشخصات کاربر  </h1>
    </div>
    <div class="row form-group">
        <label class="col-sm-2">نام : </label>
        <div class="col-sm-8">
            {{$info->name}}
        </div>
    </div>
    <div class="row form-group">
        <label class="col-sm-2">نام خانوادگی : </label>
        <div class="col-sm-8">
            {{$info->fname}}
        </div>
    </div>
    <div class="row form-group">
        <label class="col-sm-2">آدرس ایمیل : </label>
        <div class="col-sm-8">
            {{$info->email}}
        </div>
    </div>
    <div class="row form-group">
        <label class="col-sm-2">نقش کاربر : </label>
        <div class="col-sm-8">
            {{$info->rols}}
        </div>
    </div>
    <div class="row form-group">
        <label class="col-sm-2">تاریخ ثبت نام: </label>
        <div class="col-sm-8">
            {{$info->created_at}}
        </div>
    </div>
    <div>
        <a style="float: left ; margin-bottom: 0.5px" href="{{route('profile.index')}}" class="btn btn-info">بازگشت</a>
    </div>
        </div>
@endsection

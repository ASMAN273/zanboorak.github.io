@extends('profile')
@section('edite')
    @include('profile.navbar')
    @include('profile.sidebar')
    <form action="{{route('updateuser',$row->id)}}" method="post" enctype="multipart/form-data" >
        {{csrf_field()}}
        {{method_field('patch')}}
        <div class="row form-group">
            <label class="col-sm-2">عکس</label>
            <div class="col-sm-8">
                <input type="hidden" name="picture" value="{{$row->picture}}">
                <input class="form-control" name="picture" type="file" >
            </div>
        </div>
        <div class="row form-group">
            <label class="col-sm-2"> نام:</label>
            <div class="col-sm-8">
                <input class="form-control" name="name" value="{{$row->name}}" type="text" >
            </div>
        </div>
        <div class="row form-group">
            <label class="col-sm-2"> نام خانوادگی: </label>
            <div class="col-sm-8">
                <input class="form-control" name="fname" value="{{$row->fname}}" type="text" >
            </div>
        </div>
        <div class="row form-group">
            <label class="col-sm-2"> ایمیل :</label>
            <div class="col-sm-8">
                <input class="form-control" name="email" value="{{$row->email}}" type="text" >
            </div>
        </div>
        <div class="row form-group">
            <label class="col-sm-2"> نقش :</label>
            <div class="col-sm-8">
                <select class="form-control" name="rols">
                    <option value="user" >user</option>
                    <option value="admin" >admin</option>

                </select>
            </div>
        </div>
        <div class="row form-group" >
            <label class="col-sm-2"></label>
            <div class="col-sm-8">
                <input class="btn btn-group" type="submit"  value="ویرایش">
            </div>
        </div>
    </form>
@endsection

@extends('layout')
@section('title','ثبت کندوی جدید')
@section('content')
@include('notfication')
    <form action="{{route('storebeehive')}}" method="post" >
        {{csrf_field()}}
    <input name="user_id" type="hidden" value="{{Auth::user()->id}}">
        <div class="row form-group">
            <label class="col-sm-2">نام زنبورستان</label>
            <div class="col-sm-8">
                <input class="form-control" name="beehive_name" type="text" >
            </div>
        </div>

        <div class="row form-group">
            <label class="col-sm-2"> محل زنبورستان :</label>
            <div class="col-sm-8">
                <input class="form-control" name="beehive_location"  type="text" >
            </div>
        </div>
        <div class="row form-group">
            <label class="col-sm-2">شماره مجوز : </label>
            <div class="col-sm-8">
                <input class="form-control" name="beehive_licence" type="text" >
            </div>
        </div>

        <div class="row form-group" >
            <label class="col-sm-2"></label>
            <div class="col-sm-8">
                <input class="btn btn-group" type="submit"  value="ارسال">
            </div>
        </div>

    </form>
<table class="table table-hover" style="text-align: right">
    <tr>
        <th>نام زنبورستان</th>
        <th>منطقه</th>
    </tr>

        @foreach($hive as $hi)
            @if($hi->user_id == Auth::user()->id)
        <tr>
        <td>{{$hi->beehive_name}}</td>
        <td>{{$hi->beehive_location}}</td>

            <td>  <form style="float:right;margin: 1%" method="POST" action="{{route('deletebeehive',$hi->id)}}">
                  {{ csrf_field() }}
                  <input type="hidden" name="_method" value="DELETE">
                  <input type="submit" value="حذف" class="btn btn-danger">
              </form></td>
        </tr>
        @endif
        @endforeach

</table>
<div>
    <a style="float: left ; margin-bottom: 0.5px" href="{{route('main.index')}}" class="btn btn-info">بازگشت</a>
</div>
@endsection

@extends('layout')
@section('title','ثبت کندوی جدید')
@section('content')

    <form action="{{route('desc.store')}}" method="post" >
        {{csrf_field()}}


        <input class="form-control" type="hidden" name="desc_id" value="{{$row->id}} " type="text" >
        <div class="row form-group">

            <label class="col-sm-2">تاریخ بازدید</label>
            <div class="col-sm-8">
                <input class="form-control" name="date_k" value="{{old('date_k')}} " type="text" >
            </div>
        </div>

              <div class="row form-group">
            <label class="col-sm-2">توضیحات</label>
            <div class="col-sm-8">
                <input class="form-control" name="desc" vlaue="{{old('desc')}}" type="text" >
            </div>
        </div>
        <div class="row form-group" >
            <label class="col-sm-2"></label>
            <div class="col-sm-8">
                <input class="btn btn-group"type="submit"  value="ثبت">
            </div>
        </div>

    </form>
@endsection

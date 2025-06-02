@extends('layout')
@section('title','ویرایش')
@section('content')

   <form action="{{route('main.update',$row->id)}}" method="post" enctype="multipart/form-data" >
       {{csrf_field()}}
   {{method_field('patch')}}
        <div class="row form-group">
           <label class="col-sm-2">عکس</label>
           <div class="col-sm-8">
               <input type="hidden" name="ifile" value="{{$row->picture}}">
               <input class="form-control" name="picture" type="file" >
           </div>
       </div>
       <div class="row form-group">
           <label class="col-sm-2">شماره کندوی مادر</label>
           <div class="col-sm-8">
               <input class="form-control" name="id_mother" value="{{$row->id_mother}}" type="text" >
           </div>
       </div>
       <div class="row form-group">
           <label class="col-sm-2">نوع کلونی</label>
           <div class="col-sm-8">
               <input class="form-control" name="cloni_type" value="{{$row->cloni_type}}" type="text" >
           </div>
       </div>
       <div class="row form-group">
           <label class="col-sm-2">شماره کندو</label>
           <div class="col-sm-8">
               <input class="form-control" name="box_number" value="{{$row->box_number}}" type="text" >
           </div>
       </div>
       <div class="row form-group">
           <label class="col-sm-2">سن ملکه</label>
           <div class="col-sm-8">
               <input class="form-control" name="age_queen" value="{{$row->age_queen}}" type="text" >
           </div>
       </div>
       <div class="row form-group">
           <label class="col-sm-2">نژاد ملکه</label>
           <div class="col-sm-8">
               <input class="form-control" name="qeen_race" value="{{$row->qeen_race}}" type="text" >
           </div>
       </div>
       <div class="row form-group">
           <label class="col-sm-2">شاخون</label>
           <div class="col-sm-8">
               <input class="form-control" name="shakhoon" value="{{$row->shakhoon}}" type="text" >
           </div>
       </div>
       <div class="row form-group">
           <label class="col-sm-2">بیماری</label>
           <div class="col-sm-8">
               <input class="form-control" name="bimari" value="{{$row->bimari}}" type="text" >
           </div>
       </div>
       <div class="row form-group">
           <label class="col-sm-2">تاریخ بازدید</label>
           <div class="col-sm-8">
               <input class="form-control datepiker" name="date_bazdid" value="{{$row->date_bazdid}}" type="text" >

           </div>
       </div>
       <div class="row form-group">
           <label class="col-sm-2">انتخاب زنبورستان :</label>
           <div class="col-sm-8">
               <select name="id_beehive" class="form-control">
                   <option value="" disabled selected>انتخاب کنید</option>
                   @foreach($hive as $h)
                       @if($h->user_id == Auth::user()->id)
                           <option value="{{$h->id}}">{{$h->beehive_name}}</option>
                       @endif
                   @endforeach
               </select>
           </div>
       </div>
       <div class="row form-group">
           <label class="col-sm-2">توضیحات</label>
           <div class="col-sm-8">
               <textarea  class="ckeditor" name="description" type="text" >
                   {{$row->description}}
               </textarea>
           </div>
       </div>
           <div class="row form-group" >
               <label class="col-sm-2"></label>
               <div class="col-sm-8">
                   <input class="btn btn-group" type="submit"  value="ویرایش">
               </div>
           </div>

   </form>

   <div>
       <a style="float: left ; margin-bottom: 0.5px" href="{{route('main.index')}}" class="btn btn-info">بازگشت</a>
   </div>
@endsection

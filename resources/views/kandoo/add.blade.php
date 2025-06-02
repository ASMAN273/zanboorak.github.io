@extends('layout')
@section('title','ثبت کندوی جدید')
@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul style="margin-left: 80%">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
   <form action="{{route('main.store')}}" method="post" enctype="multipart/form-data" >
       {{csrf_field()}}
        <div class="row form-group">
           <label class="col-sm-2">عکس</label>
           <div class="col-sm-8">
               <input class="form-control" name="picture" type="file" >
           </div>
       </div>
       <div class="row form-group">
           <label class="col-sm-2">شماره کندوی مادر</label>
           <div class="col-sm-8">
           <input class="form-control" name="id_mother" value="{{old('id_mother')}}" type="text" >
           </div>
       </div>
       <div class="row form-group">
           <label class="col-sm-2">نوع کلونی</label>
           <div class="col-sm-8">
                  <select name="cloni_type" class="form-control">
        <option value="" disabled selected>انتخاب کنید</option>
        <option value="مادر">مادر</option>
        <option value="کندوچه">کندوچه</option>
        <option value="ژل ریز">ژل ریز</option>
        <option value="عسل ریز">عسل ریز</option>
        <option value="پشتیبان">پشتیبان</option>
    </select>
           </div>
       </div>
       <div class="row form-group">
           <label class="col-sm-2">تعداد قاب در کندو</label>
           <div class="col-sm-8">
           <input class="form-control" name="box_number" value="" type="text" >
           </div>
       </div>
       <div class="row form-group">
           <label class="col-sm-2">سن ملکه</label>
           <div class="col-sm-8">
               <input class="form-control" name="age_queen" value=" " type="text" >
           </div>
       </div>
       <div class="row form-group">
           <label class="col-sm-2">نژاد ملکه</label>
           <div class="col-sm-8">
            <select name="qeen_race" class="form-control">
        <option value="" disabled selected>انتخاب کنید</option>
        <option value="قفقازی">قفقازی</option>
        <option value="کارنیکا">کارنیکا</option>
        <option value="بومی">بومی</option>
        <option value="اروپایی">اروپایی</option>
        <option value="کارنیولان">کارنیولان</option>
    </select>           </div>
       </div>
       <div class="row form-group">
           <label class="col-sm-2">شاخون</label>
           <div class="col-sm-8">
      <select name="shakhoon" class="form-control">
        <option value="" disabled selected>انتخاب کنید</option>
        <option value="دارد">دارد</option>
        <option value="ندارد">ندارد</option>
    </select>             </div>
       </div>
       <div class="row form-group">
           <label class="col-sm-2">بیماری</label>
           <div class="col-sm-8">
               <input class="form-control" name="bimari" value="" type="text" >
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
           <label class="col-sm-2">تاریخ ورود کندو به زنبورستان</label>
           <div class="col-sm-8">
               <input class="form-control datepiker" name="date_bazdid" value="" type="text" >
           </div>
       </div>
       <div class="row form-group">
           <label class="col-sm-2">توضیحات</label>
           <div class="col-sm-8">
           <textarea id="ckeditor" class="ckeditor" name="description" ></textarea>
           </div>
       </div>
           <div class="row form-group" >
               <label class="col-sm-2"></label>
               <div class="col-sm-8">
                   <input class="btn btn-group"type="submit"  value="ارسال">
               </div>
           </div>

   </form>
    <div>
        <a style="float: left ; margin-bottom: 0.5px" href="{{route('main.index')}}" class="btn btn-info">بازگشت</a>
    </div>
@endsection

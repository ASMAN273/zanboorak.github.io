@extends('profile')
@section('tab')

    @include('profile.sidebar')
    <form action="{{route('tabligh1')}}" method="post" enctype="multipart/form-data" style="margin-right: 10%" >
        {{csrf_field()}}

        <div class="row form-group">
            <label class="col-sm-2">موقعیت</label>
            <div class="col-sm-8">
                <select name="position" class="form-control">
                    <option value="" disabled selected>انتخاب کنید</option>
                    <option value="1">سمت چپ</option>
                    <option value="0">سمت راست</option>
                </select>
            </div>
        </div>
        <div class="row form-group">
            <label class="col-sm-2">عکس تبلیغات</label>
            <div class="col-sm-8">
                <input class="form-control" name="picture" type="file" >
            </div>
        </div>

        <div class="row form-group">
            <label class="col-sm-2">توضیحات</label>
            <div class="col-sm-8">
                <textarea id="ckeditor" class="ckeditor" name="description" vlaue="" ></textarea>
            </div>
        </div>
        <div class="row form-group" >
            <label class="col-sm-2"></label>
            <div class="col-sm-8">
                <input class="btn btn-group"type="submit"  value="ارسال">
            </div>
        </div>

    </form>
@endsection

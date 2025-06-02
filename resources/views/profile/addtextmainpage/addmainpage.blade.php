@extends('profile')
@section('addmain')

    @include('profile.sidebar')
    <form action="{{route("storepage")}}" method="post" enctype="multipart/form-data" style="margin-right: 10%" >
        {{csrf_field()}}
        <input name="rols" type="hidden" value="{{ Auth::user()->name }}">
        <div class="row form-group">
            <label class="col-sm-2">دسته بندی</label>
            <div class="col-sm-8">

                <select name="groups_id" class="form-control">
                    <option value="3">انتخاب کنید</option>
                    @foreach($row as $rows)
                    <option value="{{$rows->id}}">{{$rows->groups}}</option>
                    @endforeach
                </select>

            </div>
        </div>
        <div class="row form-group">
            <label class="col-sm-2">عنوان</label>
            <div class="col-sm-8">
           <input class="form-control" name="subject" placeholder="عنوان ..." type="text">
            </div>
        </div>
        <div class="row form-group">
            <label class="col-sm-2">تصویر</label>
            <div class="col-sm-8">
                <input class="form-control" name="picture" type="file" >
            </div>
        </div>

        <div class="row form-group">
            <label class="col-sm-2">نوشته</label>
            <div class="col-sm-8">
                <textarea id="ckeditor" class="ckeditor" name="mainpage" vlaue="" placeholder="مطلب را وارد کنید"></textarea>
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

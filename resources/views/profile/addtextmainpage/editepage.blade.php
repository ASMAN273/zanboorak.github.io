@extends('profile')
@section('edite')

    @include('profile.sidebar')
    <form action="{{route('updatemainpage',$matn->id)}}" method="post" enctype="multipart/form-data" >
        {{csrf_field()}}
        {{method_field('patch')}}
        <input name="rols" type="hidden" value="{{ Auth::user()->name }}">
        <div class="row form-group">
            <label class="col-sm-2">دسته بندی</label>
            <div class="col-sm-8">

                <select name="groups_id" class="form-control">
                    <option value="3" disabled selected>انتخاب کنید</option>
                    @foreach($group as $row)
                        <option value="{{$row->id}}">{{$row->groups}}</option>
                    @endforeach
                </select>

            </div>
        </div>
        <div class="row form-group">
            <label class="col-sm-2">عنوان</label>
            <div class="col-sm-8">
                <input class="form-control" name="subject" placeholder="عنوان ..." value="{{$matn->subject}}" type="text">
            </div>
        </div>
        <div class="row form-group">
            <label class="col-sm-2">تصویر</label>
            <div class="col-sm-8">
                <input class="form-control" name="picture" value="{{old($matn->picture)}}"  type="file" >
            </div>
        </div>

        <div class="row form-group">
            <label class="col-sm-2">نوشته</label>
            <div class="col-sm-8">
                <textarea id="ckeditor" class="ckeditor" name="mainpage"  placeholder="مطلب را وارد کنید">
                    {{$matn->mainpage}}
                </textarea>
            </div>
        </div>
        <div class="row form-group" >
            <label class="col-sm-2"></label>
            <div class="col-sm-8">
                <input class="btn btn-group" type="submit"  value="ارسال">
            </div>
        </div>

    </form>
@endsection

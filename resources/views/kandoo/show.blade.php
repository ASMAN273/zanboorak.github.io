@extends('layout')
@section('title','مشاهده جزئیات')
@section('content')

    <div class="row form-group">
        <label class="col-sm-2">عکس</label>
        <div class="col-sm-8">
            @if($row->picture!='')
                <img style="margin-left:40% " src="{{asset('upload/image/'.$row->picture)}}" width="200" height="200">
            @endif

        </div>
    </div>
    <div class="row form-group">
        <label class="col-sm-2">شماره کندوی مادر</label>
        <div class="col-sm-8">
            {{$row->id_mother}}
        </div>
    </div>
    <div class="row form-group">
        <label class="col-sm-2">نوع کلونی</label>
        <div class="col-sm-8">
            {{$row->cloni_type}}
        </div>
    </div>
    <div class="row form-group">
        <label class="col-sm-2">تعداد قاب در کندو</label>
        <div class="col-sm-8">
            {{$row->box_number}}
        </div>
    </div>
    <div class="row form-group">
        <label class="col-sm-2">سن ملکه</label>
        <div class="col-sm-8">
            {{$row->age_queen}}
        </div>
    </div>
    <div class="row form-group">
        <label class="col-sm-2">نژاد ملکه</label>
        <div class="col-sm-8">
            {{$row->qeen_race}}
        </div>
    </div>
    <div class="row form-group">
        <label class="col-sm-2">شاخون</label>
        <div class="col-sm-8">
            {{$row->shakhoon}}
        </div>
    </div>
    <div class="row form-group">
        <label class="col-sm-2">بیماری</label>
        <div class="col-sm-8">
            {{$row->bimari}}
        </div>
    </div>
    <div class="row form-group">
        <label class="col-sm-2">تاریخ بازدید</label>
        <div class="col-sm-8">
            {{$row->date_bazdid}}
        </div>
    </div>
    <div class="row form-group">
        <label class="col-sm-2">توضیحات</label>
        <div class="col-sm-8">
            {!!nl2br( $row->description)!!}
        </div>
    </div>
    <div>
        <table class="table table-bordered">
            <tr>
                <th>ایدی</th>
                <th>تاریخ بازدید</th>
                <th>توضیحات</th>
                <a href="{{route('desc.show',$row->id)}}" class="btn bg-success">افزودن جزئیات</a>
            </tr>
            @foreach($desc as $rows)

                <tr>
                    <td>{{$rows->id}}</td>
                    <td>{{$rows->date_k}}</td>
                    <td>{{$rows->desc}}</td>
                    <td>
                        <form style="float:right;margin: 1%" method="POST" action="{{route('desc.destroy',$rows->id)}}">
                            {{ csrf_field() }}
                            <input type="hidden" name="_method" value="DELETE">
                            <input type="submit" value="حذف" class="btn btn-danger">
                        </form>
                    </td>

                </tr>

            @endforeach
        </table>
    </div>
    <div>
        <a style="float: left ; margin-bottom: 0.5px" href="{{route('main.index')}}" class="btn btn-info">بازگشت</a>
    </div>

@endsection

@extends('layout')

@section('content')


<div>
                <div dir="rtl" align="right" class="col-12">
                                @foreach($rows as $row)

                    <h1>{{$row->subject}}</h1>
                </div>
                <hr>
                <div align="right" class="date">تاریخ انتشار : {{$row->created_at}} نوشته شده توسط : {{$row->rols}}</div>
                <hr>

                <div dir="rtl" align="right">

                    دسته بندی  : {{$group}}

                </div>

                <hr>
                <div class="row">
                    <div class="col-12 col-lg-9 single-content order-2 order-md-1">
                        <img src="{{asset('upload/image/mainpage/'.$row->picture)}}" width="80%" height="80%">
                    </div>
                </div>
                <hr>
                <div align="right" style="font-size: x-large">
                    <p style="text-align: justify;">{!! nl2br($row->mainpage) !!}</p>
                </div>
            @endforeach

</div>
            <div>
                <a style="float: left ; margin-bottom: 0.5px" href="http://localhost/Zanboorak/public/" class="btn btn-info">بازگشت</a>
            </div>
@endsection

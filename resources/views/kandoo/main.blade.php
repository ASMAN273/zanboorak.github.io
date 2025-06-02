@extends('layout')
@section('content')
@include('notfication')
    <form action="{{route('main2.store')}}" method="POST">
        {{ csrf_field() }}
        <table class="table">
            <tr>
                <td>جستجو بر اساس کندوی مادر
                </td>

                <td>
                    <input name="searc" type="text" class="form-control " style="width:200px"/>
                </td>
                <td>
                    <input type="submit" class="btn btn-info" value="جستجو"/>
                    <input type="hidden" value="{{ Auth::user()->id }}">
                <td>

            </tr>
        </table>

    </form>
    <table class="table table-hover" style="text-align: center">
        <tr>
            <th>id</th>
            <th>عکس</th>
            <th>شماره کندوی مادر</th>
            <th>نوع کلونی</th>
            <th>شماره کندو</th>
            <th>سن ملکه</th>
            <th>نژاد ملکه</th>
            <th>شاخون</th>
            <th>بیماری</th>
            <th>زنبورستان</th>
            <th>تاریخ بازدید</th>

            <th>
                <a href="{{route('main.create')}}" class="btn bg-success">افزودن کندو</a>
                <hr>


            </th>
        </tr>

        @foreach($rows as $row)

            <tr>
                <td>{{$row->id}}</td>
                <td> @if($row->picture!='')
                        <img src="{{asset('upload/image/'.$row->picture)}}" class="rounded-circle" width="150"
                             height="150">
                    @else
                        تصویر موجود نیست
                    @endif
                </td>
                <td>{{$row->id_mother}}</td>
                <td>{{$row->cloni_type}}</td>
                <td>{{$row->box_number}}</td>
                <td>{{$row->age_queen}}</td>
                <td>{{$row->qeen_race}}</td>
                <td>{{$row->shakhoon}}</td>
                <td>{{$row->bimari}}</td>
                <td> @foreach($hive as $go)
                        @if($go->id == $row->id_beehive)
                            {{$go->	beehive_name}}

                        @endif
                    @endforeach
                </td>
                <td>{{$row->date_bazdid}}</td>

                <td>
                    <div class="btn-group">
                        <a style="float:right;margin: 1%" href="{{route('main.edit',$row->id)}}" class="btn btn-info">ویرایش</a>
                        <a style="float:right;margin: 1%" href="{{route('main.show',$row->id)}}" class="btn btn-info">جزئیات</a>
                        <form style="float:right;margin: 1%" method="POST" action="{{route('main.destroy',$row->id)}}">
                            {{ csrf_field() }}
                            <input type="hidden" name="_method" value="DELETE">
                            <input type="submit" value="حذف" class="btn btn-danger">
                        </form>
                    </div>
                </td>

            </tr>
        @endforeach
    </table>
    {!!$rows->links()!!}
@endsection

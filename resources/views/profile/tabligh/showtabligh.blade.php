@extends('profile')
@section('main')

    @include('profile.sidebar')
    @include('notfication')

    <table class="table table-bordered">
        <tr>
            <th>عملیات</th>
            <th>تصویر آگهی</th>
            <th>موقعیت</th>
            <th>توضیحات زیر عکس</th>

        </tr>
        @foreach($tabligh as $row)
            <tr>
                <td>
                    <form style="float:right;margin: 1%" method="POST" action="{{route('deletetabligh',$row->id)}}">
                        {{ csrf_field() }}
                        <input type="hidden" name="_method" value="DELETE">
                        <input  type="submit" value="حذف" class="btn btn-danger">
                    </form>
                </td>
                <td> @if($row->picture!='')
                        <img src="{{asset('upload/image/tabligh/'.$row->picture)}}" width="150" height="150">
                    @else
                        تصویر موجود نیست
                    @endif</td>
                <td>@if($row->position ==0 )
                        سمت چپ
                    @else
                    سمت راست
                    @endif
                </td>
                <td>{!! nl2br(substr($row->description,0,200)) !!}...</td>)

            </tr>
        @endforeach
    </table>
    {!! $tabligh->links() !!}
@endsection

@extends('profile')
@section('main')

    @include('profile.sidebar')
   @include('notfication')

  <table class="table table-bordered">
      <tr>
          <th>عملیات</th>
          <th>عکس</th>
          <th>عنوان</th>
          <th>خلاصه نوشته</th>
          <th>دسته بندی</th>
          <th>نوشته شده توسط</th>
      </tr>
      @foreach($data as $row)
      <tr>
          <td>
              <a style="float:right;margin: 1%" href="{{route('editemainpage',$row->id)}}" class="btn btn-info" >ویرایش</a>
              <form style="float:right;margin: 1%" method="POST" action="{{route('delete',$row->id)}}">
                  {{ csrf_field() }}
                  <input type="hidden" name="_method" value="DELETE">
                  <input  type="submit" value="حذف" class="btn btn-danger">
              </form>

          </td>
          <td> @if($row->picture!='')
                  <img src="{{asset('upload/image/mainpage/'.$row->picture)}}" width="150" height="150">
              @else
                  تصویر موجود نیست
              @endif</td>
          <td>{{$row->subject}}</td>
          <td>{!! nl2br(substr($row->mainpage,0,200)) !!}...</td>)

              <td> @foreach($group as $go)
                  @if($go->id == $row->groups_id)
                  {{$go->groups}}
                  @endif
                  @endforeach
              </td>


          <td>{{$row->rols}}</td>
      </tr>
      @endforeach
  </table>
    {{$data->links()}}
@endsection

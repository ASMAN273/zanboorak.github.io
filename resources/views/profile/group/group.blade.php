@extends('profile')
@section('edite')

    @include('profile.sidebar')
<form action="{{route("storegroup")}}" method="post" style="margin-right: 10%" >
    {{csrf_field()}}

    <div class="row form-group">
        <label class="col-sm-2">دسته بندی : </label>
        <div class="col-sm-8">
            <input class="form-control" name="groups" placeholder="دسته بندی را وارد کنید " type="text">
        </div>
    </div>

    <div class="row form-group" >
        <label class="col-sm-2"></label>
        <div class="col-sm-8">
            <input class="btn btn-group" type="submit"  value="ثبت">
        </div>
    </div>
</form>
    <table class="table table-hover" style="text-align: right">
        <tr>
            <th>دسته بندی ها </th>

        </tr>

        @foreach($go as $hi)
            <tr>
                <td>{{$hi->groups}}</td>
                <td>
                    <form style="float:right;margin: 1%" method="POST" action="{{route('deletegroup',$hi->id)}}">
                        {{ csrf_field() }}
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="submit" value="حذف" class="btn btn-danger">
                    </form></td>
            </tr>
        @endforeach

    </table>
@endsection

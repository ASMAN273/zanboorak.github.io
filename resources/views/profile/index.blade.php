@extends('profile')
@section('index')

<div class="wrapper">
    <!-- Navbar -->
   @include('profile.navbar')


    <!-- /.navbar -->
@include('profile.sidebar')
<!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Info boxes -->
            <div class="row">
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box">
                        <span class="info-box-icon bg-info elevation-1"><i class="fa fa-list"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">تعداد مطالب : </span>
                            <span class="info-box-number">
                  {{$mainpage}}
                </span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-danger elevation-1"><i class="fa fa-adn"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">تعداد کندوهای ثبت شده</span>
                            <span class="info-box-number">{{$bee}}</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->

                <!-- fix for small devices only -->
                <div class="clearfix hidden-md-up"></div>

                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3">
                            <span class="info-box-icon bg-success elevation-1"><i
                                    class="fa fa-list"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">جزئیات اضافه شده</span>
                            <span class="info-box-number">{{$desc}}</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-warning elevation-1"><i class="fa fa-users"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">تعداد کاربران : </span>
                            <span class="info-box-number">{{$nuser}}</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">گزارش ماهیانه</h5>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-widget="collapse">
                                    <i class="fa fa-minus"></i>
                                </button>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-tool dropdown-toggle"
                                            data-toggle="dropdown">
                                        <i class="fa fa-wrench"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-left" role="menu">
                                        <a href="#" class="dropdown-item">منو اول</a>
                                        <a href="#" class="dropdown-item">منو دوم</a>
                                        <a href="#" class="dropdown-item">منو سوم</a>
                                        <a class="dropdown-divider"></a>
                                        <a href="#" class="dropdown-item">لینک</a>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-tool" data-widget="remove">
                                    <i class="fa fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-8">
                                    <p class="text-center">
                                        <strong>فعالیت کاربران</strong>
                                    </p>

                                    <div class="chart">
                                        <!-- Sales Chart Canvas -->
                                        <canvas id="salesChart" height="180" style="height: 180px;"></canvas>
                                    </div>
                                    <!-- /.chart-responsive -->
                                </div>
                                <!-- /.col -->
                                <div class="col-md-4">
                                    <p class="text-center">
                                        <strong>  میزان پیشرفت اهداف یک ماهه</strong>
                                    </p>

                                    <div class="progress-group">
                                        تعداد کندو های اضافه شده
                                        <span class="float-left"><b>{{$bee}}</b>/200</span>
                                        <div class="progress progress-sm">
                                            <div class="progress-bar bg-primary" style="width: {{$bee}}%"></div>
                                        </div>
                                    </div>
                                    <!-- /.progress-group -->

                                    <div class="progress-group">
                                        تعداد اعضای جدید
                                        <span class="float-left"><b>{{$nuser}}</b>/400</span>
                                        <div class="progress progress-sm">
                                            <div class="progress-bar bg-danger" style="width: {{$nuser}}%"></div>
                                        </div>
                                    </div>
                                    <!-- /.progress-group -->
                                    <div class="progress-group">
                                        رضایت کاربران
                                        <span class="float-left"><b>250</b>/500</span>
                                        <div class="progress progress-sm">
                                            <div class="progress-bar bg-warning" style="width: 80%"></div>
                                        </div>
                                    </div>
                                    <!-- /.progress-group -->
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- ./card-body -->

                        <!-- /.description-block -->

                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.card-footer -->

                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->

        <!-- Main row -->
        <div class="row">
            <!-- Left col -->
            <div class="col-md-8">
                <!-- MAP & BOX PANE -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">کاربران</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-widget="collapse">
                                <i class="fa fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-widget="remove">
                                <i class="fa fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <!-- /.card-header -->  <div class="card-body table-responsive p-0">
                        <table class="table table-hover">
                            <tr>
                                <th>عکس پروفایل</th>
                                <th>نام</th>
                                <th>نام خانوادگی</th>
                                <th>ایمیل</th>
                                <th>سطح دسترسی</th>
                                <th>جزئیات</th>
                            </tr>
                            @foreach($User as $row)
                                <tr>
                                    <td> @if($row->picture!='')
                                            <img src="{{asset('upload/image/profile/'.$row->picture)}}" class="rounded-circle"  width="100"
                                                 height="100">
                                        @else
                                            تصویر موجود نیست
                                        @endif</td>
                                    <td>{{$row->name}}</td>
                                    <td>{{$row->fname}}</td>
                                    <td>{{$row->email}}</td>
                                    <td><span class="badge badge-success">{{$row->rols}}</span></td>
                                    <td>

                                        <a style="float:right;margin: 1%" href="{{route('showedit',$row->id)}}" class="btn btn-info" >ویرایش</a>
                                        <a style="float:right;margin: 1%" href="{{route('showuser',$row->id)}}" class="btn btn-info" >جزئیات</a>
                                        <form style="float:right;margin: 1%" method="POST" action="{{route('profile.destroy',$row->id)}}">
                                            {{ csrf_field() }}
                                            <input type="hidden" name="_method" value="DELETE">
                                            <input  type="submit" value="حذف" class="btn btn-danger">
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </table>

                    </div>
                    <!-- /.card-body -->
                </div>
                <div class="card-body p-0">
                    <div class="d-md-flex">
                        <div class="p-1 flex-1" style="overflow: hidden">

                            <!-- /.card-body -->
                        </div>
                    </div>

                </div><!-- /.d-md-flex -->
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
        <div class="row">


        </div>
        <!-- /.col -->
    </section></div>
<!-- /.row -->

<!-- TABLE: LATEST ORDERS -->

<!-- /.content-wrapper -->

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>

@endsection

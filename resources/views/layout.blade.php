<!DOCTYPE html>
<html lang="en">
<head>
    <title>مدیریت زنبورستان - @yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <link rel="stylesheet" href="//cdn.rawgit.com/morteza/bootstrap-rtl/v3.3.4/dist/css/bootstrap-rtl.min.css">
    <link rel='stylesheet' href='css/animate.min.css'>
    <link rel='stylesheet' href='css/font-awesome.min.css'>
    <link type="text/css" href="css/style1.css" rel="stylesheet"/>
    <script src="//cdn.ckeditor.com/4.15.1/full/ckeditor.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('.ckeditor').ckeditor();
        });
    </script>
    <style type="text/css">
        @font-face {
            font-family: OptimusPrinceps;
            src: url('{{ public_path('assets\fonts\byekan.ttf') }}');
        }

        /* Remove the navbar's default margin-bottom and rounded borders */
        .navbar {
            margin-bottom: 0;
            border-radius: 0;
        }

        /* Add a gray background color and some padding to the footer */
        footer {
            background-color: #ffd433;
            padding: 25px;
        }

        .dropbtn {
            background-color: #3498DB;
            color: white;
            padding: 16px;
            font-size: 16px;
            border: none;
            cursor: pointer;
        }

        /* Dropdown button on hover & focus */
        .dropbtn:hover, .dropbtn:focus {
            background-color: #2980B9;
        }

        /* The container <div> - needed to position the dropdown content */
        .dropdown {
            position: relative;
            display: inline-block;
        }

        /* Dropdown Content (Hidden by Default) */
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f1f1f1;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        /* Links inside the dropdown */
        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        /* Change color of dropdown links on hover */
        .dropdown-content a:hover {
            background-color: #ddd
        }

        /* Show the dropdown menu (use JS to add this class to the .dropdown-content container when the user clicks on the dropdown button) */
        .show {
            display: block;
        }
    </style>
    <link rel="stylesheet" href="/zanboorak/public/dist/css/persian.datepicker.css"/>
    <script src="/zanboorak/public/dist/js/jquery.js"></script>
    <script src="/zanboorak/public/dist/js/persian.date.js"></script>
    <script src="/zanboorak/public/dist/js/persian.datepicker.js"></script>
</head>
<script type="text/javascript">
    $(document).ready(function () {
        $(".datepiker").pDatepicker();
    });
</script>
<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <div class="container-fluid" style="font-family: 'B Yekan'">
        <div class="navbar-header">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">مدیریت زنبورستان</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="http://localhost/Zanboorak/public/">خانه</a></li>

                <li class="nav-item"><a class="nav-link" href="contact">تماس با ما</a></li>

                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li class="nav-item"><a class="nav-link" class="nav-link" href="{{ route('login') }}">ورود</a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">ثبت نام</a></li>
                    @else
                        <li class="nav-item"><a href="{{route('addbeehive')}}" class="nav-link">افزودن زنبورستان </a>
                        </li>
                        <li class="dropdown nav-item">
                            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                {{ Auth::user()->name }}
                                <span class="caret"></span>
                            </a>
                            <div class="dropdown-menu" style="text-align: center">

                                @can('admin')

                                    <a class="dropdown-item" href="profile">

                                         پنل کاربری

                                    </a>
                                    <a class="dropdown-item" href="{{route('main.index')}}">

                                        کندو های من
                                    </a>
                                @endcan
                                @can('user')
                                    <a class="dropdown-item" href="main">
                                        کندو های من
                                    </a>
                                @endcan
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    خروج
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                      style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </div>
                        </li>
                    @endif
                </ul>
            </ul>
        </div>
    </div>
</nav>


<div class="jumbotron">
    <div class="container text-center">
        <h1> سلام! </h1>
        @if(Auth::guest())
            <h1></h1>
        @else
            <h1> {{Auth::user()->name}}</h1>


        @endif
        <p> سیستم مدیریت زنبورستان (زنبورک)</p>
    </div>
</div>


<div class="container-fluid bg-3 ">


    @if ($errors->any())
        <div class="alert alert-danger">
            <ul style="margin-left: 80%">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="container-fluid">

        <div class="row">
            <div class="col">
                @foreach($tab as $row)
                    @if($row->position==0)

                        @if($row->picture!='')

                            <img src="{{asset('upload/image/tabligh/'.$row->picture)}}" width="150" height="250">
                        @endif

                        <p>{!!nl2br( $row->description)!!}</p>

                    @endif
                @endforeach

            </div>
            <div class="col-xl-9">@yield('content') @yield('index')</div>
            <div class="col" style="justify-items:center">

                @foreach($tab as $row)
                    @if($row->position==1)

                        @if($row->picture!='')

                            <img src="{{asset('upload/image/tabligh/'.$row->picture)}}" width="200" height="200">
                        @endif

                        <p>{!!nl2br( $row->description)!!}</p>

                    @endif
                @endforeach

            </div>

        </div>

    </div>


</div>
</div><br><br>

<footer class="container-fluid text-center">
    <p>Zanboorak</p>
</footer>

</body>
</html>


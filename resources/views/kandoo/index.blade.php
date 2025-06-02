@extends('layout')
@section('title','صفحه اصلی')
@section('index')
<head>

    <link href="css/bootstrap.min.css" type="text/css" rel="stylesheet"/>
    <link href="css/style.css" type="text/css" rel="stylesheet"/>
</head>
<body class="rtl">
<div class="container-fluid">
    <section class="cards-wrapper">
        @foreach($page as $row)
            <div class="col-4">
                <div class="card-grid-space">
                    <a class="card" href="#"
                       style="background-image: url({{asset('upload/image/mainpage/'.$row->picture)}})">
                        <div>
                            <h1 style="font-size: large; font-family: 'B Yekan'">{{$row->subject}}</h1>
                                <p>{!!nl2br(substr($row->mainpage,0,100))!!}...</p>

                            <div class="date">{{$row->created_at}}-{{$row->rols}}</div>


                        </div>
                    </a>
                    <div class="tags">
                        <div class="tag"  >
                            <a href="{{route('textmainshow',$row->id)}}" >ادامه مطلب </a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

    </section>
    {!!$page->links()!!}
</div>

</body>
</html>

@endsection

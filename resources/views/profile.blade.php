
<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>

    <title>پنل مدیریت</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="/zanboorak/public/plugins/font-awesome/css/font-awesome.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/zanboorak/public/dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <!-- bootstrap rtl -->
    <link rel="stylesheet" href="/zanboorak/public/dist/css/bootstrap-rtl.min.css">
    <!-- template rtl version -->
    <link rel="stylesheet" href="/zanboorak/public/dist/css/custom-style.css">
    <script src="//cdn.ckeditor.com/4.15.1/full/ckeditor.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.ckeditor').ckeditor();
        });
    </script>
</head>
<body class="hold-transition sidebar-mini">

@yield('tab')
@yield('main')
@yield('addmain')
@yield('index')
@yield('edite')
@yield('info')
<footer class="main-footer">
    <!-- To the right -->

    <!-- Default to the left -->
    <strong>CopyLeft &copy; 2020 <a>Zanboorak</a>.</strong>
</footer>
</section></div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="/zanboorak/public/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="/zanboorak/public/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="/zanboorak/public/dist/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="/zanboorak/public/dist/js/demo.js"></script>

<!-- PAGE PLUGINS -->
<!-- SparkLine -->
<script src="/zanboorak/public/plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jVectorMap -->
<script src="/zanboorak/public/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="/zanboorak/public/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- SlimScroll 1.3.0 -->
<script src="/zanboorak/public/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- ChartJS 1.0.2 -->
<script src="/zanboorak/public/plugins/chartjs-old/Chart.min.js"></script>

<!-- PAGE SCRIPTS -->
<script src="/zanboorak/public/dist/js/pages/dashboard2.js"></script>
</body>
</html>

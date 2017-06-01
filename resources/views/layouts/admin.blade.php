<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="Couture,Fashion,African Wear, Coporate Wear">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>{{config('app.name')}}</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('admin/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('admin/css/bootstrap-reset.css')}}" rel="stylesheet">
    <!--external css-->
    <link href="{{asset('admin/assets/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />
    <link href="{{asset('admin/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css')}}" rel="stylesheet" type="text/css" media="screen"/>
    <link rel="stylesheet" href="{{asset('admin/css/owl.carousel.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('admin/assets/data-tables/DT_bootstrap.css')}}" />
    <!-- Custom styles for this template -->
    <link href="{{asset('admin/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('admin/css/style-responsive.css')}}" rel="stylesheet" />

    <link rel="stylesheet" href="{{asset('css/toastr.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/fileinput.min.css')}}">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<section id="container" >
    <!--header start-->
@include('admin.partials.header')
<!--header end-->
    <!--sidebar start-->
@include('admin.partials.aside')
<!--sidebar end-->
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            @yield('content')

        </section>
    </section>
    <!--main content end-->
    <!--footer start-->
@include('admin.partials.footer')
<!--footer end-->
</section>

<!-- js placed at the end of the document so the pages load faster -->
<script src="{{asset('admin/js/jquery.js')}}"></script>
<script src="{{asset('admin/js/jquery-1.8.3.min.js')}}"></script>
<script src="{{asset('admin/js/bootstrap.min.js')}}"></script>
<script class="include" type="text/javascript" src="{{asset('admin/js/jquery.dcjqaccordion.2.7.js')}}"></script>
<script src="{{asset('admin/js/jquery.scrollTo.min.js')}}"></script>
<script src="{{asset('admin/js/jquery.nicescroll.js')}}" type="text/javascript"></script>
<script src="{{asset('admin/js/jquery.sparkline.js')}}'" type="text/javascript"></script>
<script src="{{asset('admin/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js')}}"></script>
<script src="{{asset('admin/js/owl.carousel.js')}}" ></script>
<script src="{{asset('admin/js/jquery.customSelect.min.js')}}" ></script>
<script src="{{asset('admin/js/respond.min.js')}}" ></script>
<script type="text/javascript" src="{{asset('admin/assets/data-tables/jquery.dataTables.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/assets/data-tables/DT_bootstrap.js')}}"></script>

<script class="include" type="text/javascript" src="{{asset('admin/js/jquery.dcjqaccordion.2.7.js')}}"></script>
<script src="{{asset('js/fileinput.min.js')}}"></script>
<script src="{{asset('js/toastr.min.js')}}"></script>
<!--common script for all pages-->
<script src="{{asset('admin/js/common-scripts.js')}}"></script>

<!--script for this page-->
<script src="{{asset('admin/js/sparkline-chart.js')}}"></script>
<script src="{{asset('admin/js/easy-pie-chart.js')}}"></script>
<script src="{{asset('admin/js/count.js')}}"></script>
<script src="{{asset('admin/js/editable-table.js')}}"></script>
@stack('scripts')

<script>

    //owl carousel

    $(document).ready(function() {
        $("#owl-demo").owlCarousel({
            navigation : true,
            slideSpeed : 300,
            paginationSpeed : 400,
            singleItem : true,
            autoPlay:true

        });
    });

    //custom select box

    $(function(){
        $('select.styled').customSelect();
    });

</script>

</body>
</html>

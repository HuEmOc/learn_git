<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>@yield('title')</title>
    <meta content="<?php if (isset($keyword)) {
        echo $keyword;
    } ?>">
    <meta name="keywords" content="<?php if (isset($keyword)) {
        echo $keyword;
    } ?>">
    <meta name="description" content="<?php if (isset($description)) {
        echo $description;
    } ?>">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{ url('/frontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('/frontend/css/bootstrap.min.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ url('/frontend/css/css.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ url('/frontend/css/font-awesome.min.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ url('/frontend/css/jquery.mmenu.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ url('/frontend/css/owl.carousel.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ url('/frontend/css/style.css') }}"/>
    <script type="text/javascript" src="{{ url('/frontend/js/jquery-1.11.3.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('/frontend/js/ajax_cart.js') }}"></script>
    <script type="text/javascript" src="{{ url('/frontend/js/danh_gia.js') }}"></script>
</head>
<body>

@include('frontend.masterpage.menu_responsive')

<div class="page mm-page mm-slideout" id="mm-0">
    <div id="content">

    <!-- header -->
        @include('frontend.masterpage.header')
    <!--end header-->

    <!--content-->
        @yield('content')
    <!--end content-->

    <!--Button go to top-->
        <a id="yt-totop" href="#" title="Go to Top" style="display: block;"></a>
    <!--End butoon go to top-->

    <!--Send mail-->
        @include('frontend.masterpage.send_mail')
    <!--End Send mail-->
    </div>

    <!-- footer -->
        @include('frontend.masterpage.footer')
    <!-- end footer -->
</div>


<script type="text/javascript" src="{{ url('/frontend/js/option-selectors.js') }}"></script>
<script type="text/javascript" src="{{ url('/frontend/js/jquery.elevatezoom.js') }}"></script>
<script type="text/javascript" src="{{ url('/frontend/js/api.jquery.js') }}"></script>
<script type="text/javascript" src="{{ url('/frontend/js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ url('/frontend/js/jquery.mmenu.min.js') }}"></script>
<script type="text/javascript" src="{{ url('/frontend/js/main.js') }}"></script>
<script type="text/javascript" src="{{ url('/frontend/js/notify.js') }}"></script>
<script type="text/javascript" src="{{ url('/frontend/js/owl.carousel.min.js') }}"></script>

<script lang="javascript">(function() {var pname = ( (document.title !='')? document.title : document.querySelector('h1').innerHTML );var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async=1; ga.src = '//live.vnpgroup.net/js/web_client_box.php?hash=a2d037085697ad15098bbc2ceba5e42e&data=eyJzc29faWQiOjIxODY3NTgsImhhc2giOiJlNmVmOTQ2ZjhiNDI3YzYyNmFlOGFiMjlmZjJhMjg1YiJ9&pname='+pname;var s = document.getElementsByTagName('script');s[0].parentNode.insertBefore(ga, s[0]);})();</script>

</body>
</html>
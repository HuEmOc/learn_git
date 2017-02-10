<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="IE=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('public/css/style.css')}}" >

</head>
<body>
    <div class="container">
        @section('content')
            <p id = 'pmaster' >Summer or winter ?this is page master</p>
        @show

    </div>
</body>
</html>
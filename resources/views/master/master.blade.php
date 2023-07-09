<!DOCTYPE html>

<html lang="en">

<!-- Begin Head -->

<head>
    <meta charset="utf-8" />
    @yield('title')
    
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    
    <meta name="MobileOptimized" content="320" />

    <!--srart theme style -->
    <link href="../assets/css/main.css" rel="stylesheet" type="text/css" />
    <link href="../assets/css/default-style.css" rel="stylesheet" type="text/css" />

    <!-- favicon links -->
   
    <link rel="shortcut icon" type="image/png" href="{{ url('assets/images/header/tab_logo.png') }}" />
</head>
<body>

@include('master.header')
@yield('content')

@include('master.footer')

    
</body>

</html>
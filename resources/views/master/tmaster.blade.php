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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon" type="image/png" href="{{ url('assets/images/header/edu-white.png') }}" />
</head>
<body class="bg-blue"> 

@include('master.theader')

@if(Session('success'))
<div class=" p-2 d-flex justify-content-between  " >
		<div class="align-self-center"></div>
        <div class=" alert alert-success m-0 p-2 align-self-center fadeIn "> {{Session::get('success')}}</div>
        
    </div>
@endif
@yield('content')

@include('master.tfooter')
<script src="../assets/js/popper.min.js"></script>
 <script src="../assets/js/bootstrap.min.js"></script>
 <script src="../assets/js/jquery.min.js"></script>
 <script src="../assets/js/jquery.nice-select.min.js"></script>
 <script src="../assets/js/modernizr.js"></script>
 <script src="../assets/js/owl.carousel.js"></script>
 <script src="../assets/js/smooth-scroll.js"></script>
 <script src="../assets/js/plugins/revel/jquery.themepunch.tools.min.js"></script>
 <script src="../assets/js/plugins/revel/jquery.themepunch.revolution.min.js"></script>
 <script src="../assets/js/plugins/revel/revolution.extension.layeranimation.min.js"></script>
 <script src="../assets/js/plugins/revel/revolution.extension.navigation.min.js"></script>
 <script src="../assets/js/plugins/revel/revolution.extension.slideanims.min.js"></script>
 <script src="../assets/js/plugins/countto/jquery.countTo.js"></script>
 <script src="../assets/js/plugins/countto/jquery.appear.js"></script>
 <script src="../assets/js/default-custom.js"></script>
    
</body>

</html>
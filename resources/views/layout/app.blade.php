<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield("title")</title>

     <!-- Favicon -->
     <link rel="icon" type="image/x-icon" href="../assets/img/favicon/favicon.ico" />

     <!-- Fonts -->
     <link rel="preconnect" href="https://fonts.googleapis.com" />
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
     <link
       href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
       rel="stylesheet"
     />

     <!-- Icons. Uncomment required icon fonts -->
     <link rel="stylesheet" href="{{asset('vendor/fonts/boxicons.css')}}" />

     <!-- Core CSS -->
     <link rel="stylesheet" href="{{asset('vendor/css/core.css')}}" class="template-customizer-core-css" />
     <link rel="stylesheet" href="{{asset('vendor/css/theme-default.css')}}" class="template-customizer-theme-css" />
     <link rel="stylesheet" href="{{asset('assets/css/demo.css')}}" />

     <!-- Vendors CSS -->
     <link rel="stylesheet" href="{{asset('vendor/libs/perfect-scrollbar/perfect-scrollbar.css')}}" />

     <link rel="stylesheet" href="{{asset('vendor/libs/apex-charts/apex-charts.css')}}" />

     <!-- Page CSS -->

     <!-- Helpers -->
     <script src="{{asset('vendor/js/helpers.js')}}"></script>

     <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
     <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
     <script src="{{asset('js/config.js')}}"></script>

    @stack('head')
</head>
<body>
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            @include('layout.sidebar')
                <div class="layout-page">
                    @include('layout.header')
                    <div class="content-wrapper">
                        <div class="container-xxl flex-grow-1 container-p-y">
                             <!-- Content -->
                             @yield("content")
                        </div>
                    </div>
                </div>
        </div>
    </div>





    <!-- build:js assets/vendor/js/core.js -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="{{asset('vendor/libs/popper/popper.js')}}"></script>
    <script src="{{asset('vendor/js/bootstrap.js')}}"></script>
    <script src="{{asset('vendor/libs/perfect-scrollbar/perfect-scrollbar.js')}}"></script>

    <script src="{{asset('vendor/js/menu.js')}}"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="{{asset('vendor/libs/apex-charts/apexcharts.js9')}}"></script>

    <!-- Main JS -->
    <script src="{{asset('js/main.js')}}"></script>

    <!-- Page JS -->
    <script src="{{asset('js/dashboards-analytics.js')}}"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    @stack('endbody')

</body>
</html>

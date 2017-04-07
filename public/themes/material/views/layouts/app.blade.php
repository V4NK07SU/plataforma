<!doctype html>
<html class="no-js" data-ng-app="app">

<head>
    <meta charset="utf-8">
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Web Application</title>
    <meta name="description" content="Responsive Admin Web App with Bootstrap and AngularJS">
    <meta name="keywords" content="angularjs admin, admin templates, admin themes, bootstrap admin">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

    <!-- Needs images, font... therefore can not be part of main.css -->
    <link rel="stylesheet" href="http://umbrella-base.dev/themes/material/dist/styles/loader.css">
    <!--
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,500,700,300,300italic,500italic|Roboto+Condensed:400,300' rel='stylesheet' type='text/css'>
    -->
    <link rel="stylesheet" href="http://umbrella-base.dev/themes/material/dist/bower_components/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://umbrella-base.dev/themes/material/dist/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css">

    <!-- end Needs images -->


    <link rel="stylesheet" href="http://umbrella-base.dev/themes/material/dist/styles/main.css">
    <script>
        var SITE_URL = "http://umbrella-base.dev";
        var THEME_URL = "http://umbrella-base.dev/themes/material/client/";

        function angularInclude(url) {
            return THEME_URL + url;
        }
    </script>

    <style>

.nav-container .nav .nav-title {
    margin: 15px 15px 10px;
    font-weight: normal;
    font-size: 20px;
}
</style>

</head>


<body id="app" class="app" data-custom-page data-ng-controller="AppCtrl" data-ng-class=" { 'layout-boxed': main.layout === 'boxed', 
                            'nav-collapsed-min': main.isMenuCollapsed
          } ">
    <!--[if lt IE 9]>
            <div class="lt-ie9-bg">
                <p class="browsehappy">You are using an <strong>outdated</strong> browser.</p>
                <p>Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
            </div>
        <![endif]-->

    <div id="loader-container"></div>

    <header data-ng-include="includeUrl('app/layout/header.html')" id="header" class="header-container " data-ng-class="{ 'header-fixed': main.fixedHeader,
                                  'bg-white': ['11','12','13','14','15','16','21'].indexOf(main.skin) >= 0,
                                  'bg-dark': main.skin === '31',
                                  'bg-primary': ['22','32'].indexOf(main.skin) >= 0,
                                  'bg-success': ['23','33'].indexOf(main.skin) >= 0,
                                  'bg-info': ['24','34'].indexOf(main.skin) >= 0,
                                  'bg-warning': ['25','35'].indexOf(main.skin) >= 0,
                                  'bg-danger': ['26','36'].indexOf(main.skin) >= 0
                 }"></header>



    <div class="main-container" data-ng-class="{ 'app-nav-horizontal': main.menu === 'horizontal' }">
        <aside data-ng-include="includeUrl('app/layout/sidebar.html')" id="nav-container" class="nav-container" data-ng-class="{ 'nav-fixed': main.fixedSidebar,
                                    'nav-horizontal': main.menu === 'horizontal',
                                    'nav-vertical': main.menu === 'vertical',
                                    'bg-white': ['31','32','33','34','35','36'].indexOf(main.skin) >= 0,
                                    'bg-dark': ['31','32','33','34','35','36'].indexOf(main.skin) < 0
                   }">



</aside>
<div id="content" class="content-container">    
     @yield('mainContent')
</div>
</div>

</body>
<!-- <script src="http://maps.google.com/maps/api/js"></script> -->

<script src="http://umbrella-base.dev/themes/material/dist/scripts/vendor.js"></script>


<script src="http://umbrella-base.dev/themes/material/dist/scripts/ui.js"></script>


<script src="http://umbrella-base.dev/themes/material/dist/scripts/app.js"></script>
</html>
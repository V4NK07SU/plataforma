<!DOCTYPE html>
<!--[if IE 9]>         <html class="ie9 no-focus" data-ng-app="app" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-focus" data-ng-app="app" lang="en"> <!--<![endif]-->
<head>
    <meta charset="utf-8">

    <title>OneUI - Admin Dashboard Template &amp; UI Framework</title>

    <meta name="description" content="OneUI - Admin Dashboard Template & UI Framework created by pixelcave and published on Themeforest">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="noindex, nofollow">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel="shortcut icon" href="themes/oneui/assets/img/favicons/favicon.png">

    <link rel="icon" type="image/png" href="themes/oneui/assets/img/favicons/favicon-16x16.png" sizes="16x16">
    <link rel="icon" type="image/png" href="themes/oneui/assets/img/favicons/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="themes/oneui/assets/img/favicons/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/png" href="themes/oneui/assets/img/favicons/favicon-160x160.png" sizes="160x160">
    <link rel="icon" type="image/png" href="themes/oneui/assets/img/favicons/favicon-192x192.png" sizes="192x192">

    <link rel="apple-touch-icon" sizes="57x57" href="themes/oneui/assets/img/favicons/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="themes/oneui/assets/img/favicons/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="themes/oneui/assets/img/favicons/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="themes/oneui/assets/img/favicons/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="themes/oneui/assets/img/favicons/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="themes/oneui/assets/img/favicons/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="themes/oneui/assets/img/favicons/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="themes/oneui/assets/img/favicons/apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="themes/oneui/assets/img/favicons/apple-touch-icon-180x180.png">
    <!-- END Icons -->

    <!-- Stylesheets -->
    <!-- Web fonts -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600,700%7COpen+Sans:300,400,400italic,600,700">

    <!-- Bootstrap and OneUI CSS framework -->
    <link rel="stylesheet" id="css-bootstrap" href="themes/oneui/assets/css/bootstrap.min.css">
    <!-- build:remove -->
    <link rel="stylesheet" id="css-main" href="themes/oneui/assets/css/oneui.css">
    <!-- /build -->

    <!-- build:template
    <link rel="stylesheet" id="css-main" href="themes/oneui/assets/css/oneui.min.css">
    /build -->
    <!-- END Stylesheets -->
</head>
<body data-ng-controller="AppCtrl">
<!-- Page loader -->
<div id="page-loader"></div>

<!-- View loader (data-js-view-loader attribute is initialized in js/directives.js) -->
<div data-js-view-loader></div>

<!-- Page Container -->
<!-- You can update template settings or enable local storage feature in js/app.js -> 'AppCtrl' controller () -->
<div id="page-container" data-ng-class="{
            'header-navbar-fixed': oneui.headerFixed,
            'header-navbar-transparent': ! oneui.admin,
            'sidebar-l': oneui.admin,
            'sidebar-o': oneui.admin,
            'side-scroll': oneui.admin,
        }">
    <!-- Side Overlay-->
    <aside ng-show="oneui.admin" data-ng-include="'themes/oneui/assets/views/partials/base_side_overlay.html'" data-ng-controller="SideOverlayCtrl" id="side-overlay"></aside>

    <!-- Sidebar -->
    <nav ng-show="oneui.admin" data-ng-include="'themes/oneui/assets/views/partials/base_sidebar.html'" data-ng-controller="SidebarCtrl" id="sidebar"></nav>

    <!-- Header -->
    <header data-ng-include="'themes/oneui/assets/views/partials/base_header.html'" data-ng-controller="HeaderCtrl" id="header-navbar" class="content-mini content-mini-full"></header>

    @yield('mainContent')

    <!-- Footer -->
    <footer data-ng-include="'themes/oneui/assets/views/partials/base_footer.html'" id="page-footer" class="content-mini content-mini-full font-s12 bg-gray-lighter clearfix"></footer>
</div>
<!-- END Page Container -->

<!-- JS Code -->
<!-- build:js themes/oneui/assets/js/oneui.min.js -->
<!-- OneUI Core JS: jQuery & Bootstrap Related -->
<script src="themes/oneui/assets/js/core/jquery.min.js"></script>
<script src="themes/oneui/assets/js/core/bootstrap.min.js"></script>
<script src="themes/oneui/assets/js/core/jquery.slimscroll.min.js"></script>
<script src="themes/oneui/assets/js/core/jquery.scrollLock.min.js"></script>
<script src="themes/oneui/assets/js/core/jquery.appear.min.js"></script>
<script src="themes/oneui/assets/js/core/jquery.countTo.min.js"></script>
<script src="themes/oneui/assets/js/core/jquery.placeholder.min.js"></script>

<!-- OneUI Core JS: AngularJS Related -->
<script src="themes/oneui/assets/js/core/angular.min.js"></script>
<script src="themes/oneui/assets/js/core/angular-ui-router.min.js"></script>
<script src="themes/oneui/assets/js/core/angular-ui-bootstrap-tpls.min.js"></script>
<script src="themes/oneui/assets/js/core/ocLazyLoad.min.js"></script>
<script src="themes/oneui/assets/js/core/ngStorage.min.js"></script>

<!-- OneUI Core JS: App Related -->
<script src="themes/oneui/assets/js/app.js"></script>
<script src="themes/oneui/assets/js/directives.js"></script>
<script src="themes/oneui/assets/js/controllers.js"></script>
<!-- /build -->
</body>
</html>

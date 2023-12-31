<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
<meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
<meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
<meta name="author" content="PIXINVENT">
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>DemontazhPro</title>
<link rel="apple-touch-icon" href="{{asset('assets/images/ico/apple-icon-120.png')}}">
<link rel="shortcut icon" type="image/x-icon" href="{{asset('favicon.ico')}}">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">
{{--<link rel="stylesheet" type="text/css" href="{{asset('admin/app-assets/vendors/css/vendors.min.css')}}">--}}
<!-- BEGIN: Theme CSS-->
<link rel="stylesheet" type="text/css" href="{{asset('admin_assets/css/bootstrap.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('admin_assets/css/bootstrap-extended.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('admin_assets/css/colors.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('admin_assets/css/components.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('admin_assets/css/themes/dark-layout.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('admin_assets/css/themes/bordered-layout.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('admin_assets/css/themes/semi-dark-layout.css')}}">

<!-- BEGIN: Page CSS-->
<link rel="stylesheet" type="text/css" href="{{asset('admin_assets/css/core/menu/menu-types/vertical-menu.css')}}">
<!-- END: Page CSS-->
@stack('styles')
<!-- BEGIN: Custom CSS-->
<link rel="stylesheet" type="text/css" href="{{asset('admin_assets/css/custom-styles.css')}}">
<!-- END: Custom CSS-->

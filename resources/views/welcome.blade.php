<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width,height=device-height, initial-scale=1">
    <!-- Chrome, Firefox OS and Opera -->
    <meta name="theme-color" content="#ff7800">
    <!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="#ff7800">
    <!-- iOS Safari -->
    <meta name="apple-mobile-web-app-status-bar-style" content="#ff7800">
    <meta name="robots" content="all"/>
    <meta name="robots" content="index,follow">
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta name="author" content="Демонтаж - Pro"/>
    {{-- Devices Meta --}}
    <meta property="fb:app_id" content="257953674358265">
    <!--  Verification  -->
    <meta name="yandex-verification" content="dc1bca05d7f3e08b"/>
    <!--  Verification  -->

    {{--Favicon--}}
    <link rel="apple-touch-icon" href="{{asset('assets/images/meta/apple-touch-icon.png')}}">
    <link rel="icon" href="{{asset('favicon.ico')}}" type="image/x-icon">
    {{--Favicon--}}

    <meta name="title" content="Демонтаж и вывоз металлоконструкций бесплатно.">
    <meta name="keywords"
          content="демонтаж металлоконструкций, демонтаж металла, демонтаж металлоконструкций в Москве, расценки на демонтаж металлоконструкций, разбор металлоконструкций, демонтаж металла цена за 1 тонну">
    <meta name="description"
          content="Бесплатный  демонтаж металлоконструкций в Москве и МО. Демонтаж и резка конструкций из металла с приемом на металлолом и вывоз мусора.">

    {{--OPEN GRAPH--}}
    <meta property="og:title" content="Демонтаж и вывоз металлоконструкций бесплатно."/>
    <meta property="og:locale" content="ru_RU">
    <meta property="og:type" content="website">
    <meta property="og:description"
          content="Бесплатный  демонтаж металлоконструкций в Москве и МО. Демонтаж и резка конструкций из металла с приемом на металлолом и вывоз мусора.">
    <meta property="og:image" content="{{asset('assets/images/base/opengraph.webp')}}">
    <meta property="og:image:secure_url" content="{{asset('assets/images/base/opengraph.webp')}}">
    <meta property="og:image:url" content="{{asset('assets/images/base/opengraph.webp')}}">
    <meta property="og:image:type" content="image/jpg">
    <meta property="og:image:width" content="1200"/>
    <meta property="og:image:height" content="630"/>
    <meta property="vk:image" content="{{asset('assets/images/base/opengraph.webp')}}"/>

    <meta name="twitter:card" content="summary">
    <meta name="twitter:description"
          content="Бесплатный  демонтаж металлоконструкций в Москве и МО. Демонтаж и резка конструкций из металла с приемом на металлолом и вывоз мусора.">
    <meta name="twitter:title" content="Демонтаж и вывоз металлоконструкций бесплатно.">
    <meta name="twitter:domain" content="demontazh-pro.ru">
    <meta name="twitter:url" content="https://demontazh-pro.ru/">

    <meta name="twitter:image" content="{{asset('assets/images/base/opengraph.webp')}}">
    {{--        <meta name="twitter:site" content="@Metalolom24">--}}

    <meta property="og:url" content="{{url()->full()}}">
    <meta property="og:site_name" content="Демонтаж и вывоз металлоконструкций бесплатно.">
    {{--OPEN GRAPH--}}

    <link rel="canonical" href="{{url()->full()}}">
    <link rel="manifest" href="{{asset('manifest.json')}}">
    <style>
        .loader{background:#fff;width:100%;height:100%;line-height:50px;text-align:center;position:fixed;top:50%;left:50%;transform:translate(-50%,-50%);font-weight:900;letter-spacing:.2em;z-index:9999999}.load{position:absolute;top:50%;left:50%;transform:translate(-50%,-50%);width:100px;height:100px}.load hr{border:0;margin:0;width:40%;height:40%;position:absolute;border-radius:50%;animation:spin 2s ease infinite}.load :first-child{background:#ff7800;animation-delay:-1.5s}.load :nth-child(2){background:#ff7800;animation-delay:-1s}.load :nth-child(3){background:#ff7800;animation-delay:-.5s}.load :last-child{background:#ff7800}@keyframes spin{0%,100%{transform:translate(0)}25%{transform:translate(160%)}50%{transform:translate(160%,160%)}75%{transform:translate(0,160%)}}
    </style>
    <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap-purge.min.css?v=10')}}">
    <link rel="stylesheet" href="{{asset('assets/fontawesome/css/all-purge.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css?v=2')}}">
    <link rel="stylesheet" href="{{asset('assets/owlcarousel/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/owlcarousel/css/owl.theme.default.min.css')}}">
    @stack('styles')
    <title>Демонтаж и вывоз металлоконструкций бесплатно.</title>


</head>
<body>
<div class="loader">
    <div class="load">
        <hr/>
        <hr/>
        <hr/>
        <hr/>
    </div>
</div>

@include('includes.head-section')
@include('includes.promotion')
@include('includes.process_line')
@include('includes.advantage')
@include('includes.our_works')
@include('includes.form_1')
@include('includes.license')
@include('includes.about')
@include('includes.footer')
@include('includes.side_buttons')
@include('includes.mobile-nav')
@include('includes.modal-form')
@include('includes.marquee_popup')

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/owlcarousel/js/owl.carousel.min.js')}}"></script>

<script src="https://cdn.jsdelivr.net/npm/vue-text-mask@6.1.2/dist/vueTextMask.min.js"></script>
<script src="{{asset('assets/js/vue.min.js')}}"></script>
<script async src="{{asset('assets/js/axios.min.js')}}"></script>
<script src="{{asset('/assets/js/scripts.js?v=3')}}"></script>
@stack('vue')
</body>
</html>

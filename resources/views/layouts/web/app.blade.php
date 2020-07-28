<!DOCTYPE html>
<html lang="@if(session()->has('locale')){{session()->get('locale')}}@else{{"en"}}@endif">
<head>

    <title>@yield('title') | Essay Writing paper at your service | Elitespaper.com</title>

    <!-- META TAGS -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name='copyright' content='ElitesPaper'>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="ElitesPaper is one of the best online site with quality writing.">
    <meta name="keyword" content="essay writing website, Elites Paper, online writing, essay, essay help, writing help, buy paper online, academic assistance">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {!!\WebDevEtc\BlogEtc\Helpers::rss_html_tag()!!}

    <!-- FAV ICON(BROWSER TAB ICON) -->
    <link rel="shortcut icon" href="{{ asset('assets/web/img/favicon.png') }}" type="image/x-icon">
    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet">

    <!-- ELITESPAPER CSS PLUGINS -->
    
    @include('web.includes.css')

    @yield('css')

</head>


    <body id="bg" style="">

        <!-- Boxed Layout -->
        <div id="page" class="site"> 
        
        @include('web.includes.options')
        
        @include('web.includes.header')
        
        @yield('content')
        
        @include('web.includes.footer')
        
        </div>
        <!-- End Boxed Layout -->

        
    @include('web.includes.scripts')

    @yield('javascript')

</body>

</html>

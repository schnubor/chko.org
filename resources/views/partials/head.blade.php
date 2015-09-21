<title>@yield('title')</title>

<link href='http://fonts.googleapis.com/css?family=Roboto+Mono:300,400,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="{{ elixir("css/all.css") }}">
<link rel="stylesheet" href="/css/vendor/font-awesome.min.css">

{{-- General stuff --}}
<meta charset="utf-8">
<meta name="description" content="@yield('description')">
<meta name="viewport" content="width=device-width,user-scalable=no">
<meta name="keywords" content="grafik, illustration, portfolio, visual communication, berlin">
<meta name="robots" content="all">
<meta name="robots" content="noodp, noydir">

{{-- Facebook --}}
<meta property="og:image" content="@yield('og_image')"> 
<meta property="og:type" content="website"> 
<meta property="og:title" content="@yield('title')"> 
<meta property="og:description" content="@yield('og_desc')"> 
<meta property="og:url" content="@yield('og_url')"> 
<meta property="og:site_name" content="chko.org"> 

{{-- Twitter Meta Data --}}
<meta name="twitter:card" content="summary"> 
<meta name="twitter:url" content="@yield('og_url')"> 
<meta name="twitter:title" content="@yield('title')"> 
<meta name="twitter:description" content="@yield('og_desc')"> 
<meta name="twitter:image" content="@yield('og_image')"> 
<meta itemprop="image" content="@yield('og_image')">
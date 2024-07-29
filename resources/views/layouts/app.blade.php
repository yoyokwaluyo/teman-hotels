<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teman Hotels</title>
    <meta name="publisher" content="teman-hotels.com">
    <meta name="distribution" content="Teman Hotels : Best solutions for your hotel bussiness">

    <meta name="description" content="Teman Hotels : Best solutions for your hotel bussiness">
    <!-- <meta property="fb:app_id" content="181411581975733"> -->
    <meta property="og:title" content="Teman Hotels">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.teman-hotels.com/">
    <!-- <meta property="og:image" content="https://s3-ap-southeast-1.amazonaws.com/ramo-statics/images/banner_slider/default_slider/default-1.jpg"> -->
    <meta property="og:description" content="Teman Hotels : Best solutions for your hotel bussiness">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="shortcut icon" href="./" type="image/x-icon" />

    <!-- import css file -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    @vite(['resources/css/app.css'])
    @yield('style')

    <!-- import js file -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" defer></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.min.js" defer></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.plugins.min.js" defer></script>
    @vite(['resources/js/app.js'])
    @yield('scripts')
</head>

<body>

    <main role="main" class="max-w-[1800px] mx-auto">

        @yield('main')

    </main>

</body>

</html>

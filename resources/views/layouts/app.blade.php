<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>@yield('title', 'Jungle Tuinen')</title>
    <meta name="description" content="@yield('meta_description', 'Ontdek jouw eigen stukje jungle in de tuin. Inspiratie, tips en unieke planten voor een weelderige tuinervaring.')">
    <meta name="keywords" content="@yield('meta_keywords', 'jungletuin, tuin inspiratie, tropische tuin, tuinplanten, groene tuin')">
    <meta name="robots" content="index, follow">
    <meta name="author" content="vanZeumeren | Developments">

    <!-- Open Graph -->
    <meta property="og:title" content="@yield('title', 'Jungle Tuinen')">
    <meta property="og:description" content="@yield('meta_description', 'Ontdek jouw eigen stukje jungle in de tuin.')">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ asset('images/og-banner.jpg') }}">

    <!-- Canonical -->
    <link rel="canonical" href="{{ url()->current() }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="icon" href="{{ asset('favicons/favicon.ico') }}" type="image/x-icon">

    <link rel="prefetch" href="/eigen-jungletuin">
    <link rel="prefetch" href="/contact">

    <!-- Fonts: Preconnect + preload + async load -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Aclonica&display=swap">
    <link href="https://fonts.googleapis.com/css2?family=Aclonica&display=swap" rel="stylesheet" media="print" onload="this.media='all'">
    <noscript>
        <link href="https://fonts.googleapis.com/css2?family=Aclonica&display=swap" rel="stylesheet">
    </noscript>

    <!-- Preload hero image (LCP optimalisatie) -->
    <link rel="preload" as="image" href="{{ asset('images/nature.webp') }}" type="image/webp">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="px-4 px-md-5 px-xl-6">
    <div class="mx-auto" style="max-width: 1800px;">
        @yield('content')
    </div>
</body>
</html>

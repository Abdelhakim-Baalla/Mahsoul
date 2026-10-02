<!DOCTYPE html>
<html lang="fr" dir="{{ app()->getLocale() === 'ar' ? 'rtl' : 'ltr' }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mahsoul - Plateforme agricole</title>
    <meta name="description" content="Mahsoul - Plateforme complète au service des agriculteurs et du secteur agricole">
    <link rel="shortcut icon" href="{{ asset('images/logo-white.jpg') }}" type="image/x-icon">
    @include('components.eco-head')
</head>

<body class="font-sans bg-primary-50 flex flex-col min-h-screen {{ app()->getLocale() === 'ar' ? 'font-arabic' : '' }}">
    <div id="navigation">
        @include('components.navigation')
    </div>

    <main class="flex-grow">
        @yield('content')
    </main>

    <div id="footer">
        @include('components.footer')
    </div>

    @yield('scripts')
</body>
</html>
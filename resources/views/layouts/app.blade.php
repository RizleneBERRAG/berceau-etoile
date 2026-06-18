<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Chatterie Berceau Étoilé')</title>

    <meta name="description" content="@yield('description', 'Chatterie familiale spécialisée dans le Ragdoll, élevée avec amour dans un univers doux et étoilé.')">

    <link rel="stylesheet" href="{{ asset('assets/css/base/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/base/variables.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/base/global.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/components/header.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/components/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/components/buttons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/components/cards.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/components/forms.css') }}">

    @stack('styles')
</head>

<body>
@include('partials.header')

<main>
    @yield('content')
</main>

@include('partials.footer')

<script src="{{ asset('assets/js/main.js') }}"></script>
<script src="{{ asset('assets/js/components/header.js') }}"></script>
<script src="{{ asset('assets/js/components/animations.js') }}"></script>

@stack('scripts')
</body>
</html>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Administration | Berceau Étoilé')</title>

    <link rel="stylesheet" href="{{ asset('assets/css/base/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/base/variables.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/admin/admin.css') }}">
</head>

<body class="admin-body">
<aside class="admin-sidebar">
    <a href="{{ route('admin.portees.index') }}" class="admin-brand">
        <span>✦</span>
        <strong>Berceau Étoilé</strong>
        <small>Administration</small>
    </a>

    <nav class="admin-nav">
        <a href="{{ route('admin.portees.index') }}" class="{{ request()->routeIs('admin.portees.*') ? 'is-active' : '' }}">
            Portées
        </a>

        <a href="{{ route('admin.chatons.index') }}" class="{{ request()->routeIs('admin.chatons.*') ? 'is-active' : '' }}">
            Chatons
        </a>

        <a href="{{ route('chatons') }}" target="_blank">
            Voir le site
        </a>
    </nav>
</aside>

<main class="admin-main">
    <header class="admin-topbar">
        <div>
            <span>Admin</span>
            <h1>@yield('page_title', 'Tableau de bord')</h1>
        </div>
    </header>

    @if (session('success'))
        <div class="admin-alert admin-alert--success">
            {{ session('success') }}
        </div>
    @endif

    @if ($errors->any())
        <div class="admin-alert admin-alert--error">
            <strong>Il y a une erreur dans le formulaire.</strong>

            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @yield('content')
</main>
</body>
</html>

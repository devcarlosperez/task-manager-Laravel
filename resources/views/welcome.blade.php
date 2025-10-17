<!DOCTYPE html>
<lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>

<body class="font-sans antialiased bg-gray-100 dark:bg-gray-900">
    <main class="welcome-main">
        <section class="welcome-card">
            <h1 class="welcome-title">Welcome to your Task Manager</h1>
            <p class="welcome-text">
                Manage your tasks easily, stay productive and organized every day.
            </p>

            <div class="welcome-actions">
                <a href="{{ route('login') }}" class="welcome-btn login-btn">Log in</a>
                <a href="{{ route('register') }}" class="welcome-btn register-btn">Register</a>
            </div>
        </section>
    </main>
</body>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
        @include('layouts.navigation')

        <!-- Page Heading -->
        @isset($header)
            <header class="bg-white dark:bg-gray-800 shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endisset
        <main class="tasks-main">
            <h1 class="tasks-title">List of Tasks</h1>

            <ul class="tasks-list">
                <div class="tasks-wrapper">
                    @foreach ($tasks as $b)
                        <div class="task-card">
                            <div class="task-content">
                                <h3 class="task-title">{{ $b->name }}</h3>
                                <p class="task-description">{{ $b->description }}</p>
                                <p class="task-priority">{{ $b->priority }}</p>
                            </div>

                            <div class="task-actions">
                                <button onclick="window.location='{{ route('tasks.edit', $b->id) }}'" title="Editar"
                                    class="task-btn edit-btn text-blue-600 hover:text-blue-800">
                                    Edit
                                </button>

                                <form method="POST" action="{{ route('tasks.destroy', $b->id) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="task-btn delete-btn text-red-600 hover:text-red-800">
                                        Delete
                                    </button>
                                </form>
                            </div>
                        </div>
                    @endforeach
                </div>
            </ul>
        </main>

    </div>
</body>

</html>

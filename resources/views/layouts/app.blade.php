<!DOCTYPE html>
<<<<<<< HEAD
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Ruang Tugas')</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            background: #f6f7f4;
            color: #26332d;
            font-family: Arial, sans-serif;
        }

        .navbar {
            background: #fff;
            border-bottom: 1px solid #e5e9e5;
            padding: 17px 7%;
        }

        .brand {
            color: #245b45;
            font-size: 20px;
            font-weight: 700;
            text-decoration: none;
        }

        .container {
            width: min(100% - 32px, 960px);
            margin: 36px auto;
        }

        .page-heading {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 16px;
            margin-bottom: 22px;
        }

        h1 {
            margin: 0 0 7px;
            font-size: 28px;
        }

        p {
            line-height: 1.55;
        }

        .muted {
            color: #748078;
        }

        .card {
            background: #fff;
            border: 1px solid #e5e9e5;
            border-radius: 12px;
            padding: 20px;
            margin-bottom: 14px;
        }

        .task-top,
        .task-actions {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 12px;
        }

        .task-title {
            color: #26332d;
            font-size: 17px;
            font-weight: 700;
            text-decoration: none;
        }

        .task-title:hover {
            color: #27724e;
        }

        .badges {
            display: flex;
            flex-wrap: wrap;
            gap: 7px;
            margin-top: 12px;
        }

        .badge {
            display: inline-block;
            border-radius: 20px;
            padding: 5px 10px;
            font-size: 12px;
            font-weight: 700;
        }

        .priority-high {
            background: #fae8e5;
            color: #a74031;
        }

        .priority-medium {
            background: #fff3d6;
            color: #886315;
        }

        .priority-low {
            background: #e4f2e9;
            color: #31704c;
        }

        .status-to-do {
            background: #edf0f2;
            color: #58636a;
        }

        .status-in-progress {
            background: #e7effa;
            color: #3d6592;
        }

        .status-completed {
            background: #e4f2e9;
            color: #31704c;
        }

        .button,
        button {
            border: 0;
            border-radius: 8px;
            padding: 10px 15px;
            background: #276447;
            color: #fff;
            cursor: pointer;
            font-size: 14px;
            text-decoration: none;
        }

        .button-secondary {
            background: #edf1ed;
            color: #35443b;
        }

        .button-danger {
            background: #a94034;
        }

        .form-card label {
            display: block;
            margin: 15px 0 6px;
            font-weight: 700;
        }

        .form-card input,
        .form-card textarea,
        .form-card select {
            width: 100%;
            border: 1px solid #d8dfd9;
            border-radius: 8px;
            padding: 11px;
            font: inherit;
            background: #fff;
        }

        .form-card textarea {
            min-height: 110px;
            resize: vertical;
        }

        .error {
            color: #a94034;
            font-size: 13px;
            margin-top: 5px;
        }

        .alert {
            background: #e5f3e9;
            color: #275c3c;
            padding: 12px 15px;
            border-radius: 8px;
            margin-bottom: 18px;
        }

        .empty {
            text-align: center;
            padding: 38px 20px;
        }

        @media (max-width: 600px) {
            .page-heading,
            .task-top {
                align-items: flex-start;
                flex-direction: column;
            }

            h1 {
                font-size: 24px;
            }
        }
    </style>
</head>
<body>
    <header class="navbar">
        <a class="brand" href="{{ route('tasks.index') }}">Ruang Tugas</a>
    </header>

    <main class="container">
        @if (session('success'))
            <div class="alert">{{ session('success') }}</div>
        @endif

        @yield('content')
    </main>
</body>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @isset($header)
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endisset

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
    </body>
>>>>>>> origin/main
</html>

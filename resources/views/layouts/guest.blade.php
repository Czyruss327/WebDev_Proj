<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'SimpleAuth') }}</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700&display=swap" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-slate-950 font-sans text-slate-900">
    <main class="grid min-h-screen lg:grid-cols-2">
        <section class="hidden flex-col justify-between bg-indigo-600 p-12 text-white lg:flex">
            <a href="{{ url('/') }}" class="text-xl font-bold tracking-tight">SimpleAuth</a>
            <div class="max-w-md">
                <p class="mb-4 text-sm font-semibold uppercase tracking-[0.2em] text-indigo-200">Welcome</p>
                <h1 class="text-5xl font-bold leading-tight">A simple place to get started.</h1>
                <p class="mt-6 text-lg leading-8 text-indigo-100">Create your account, sign in securely, and manage your profile with Laravel.</p>
            </div>
            <p class="text-sm text-indigo-200">Built with Laravel</p>
        </section>
        <section class="flex items-center justify-center bg-slate-50 px-6 py-12 sm:px-10">
            <div class="w-full max-w-md">
                <a href="{{ url('/') }}" class="mb-10 inline-block text-xl font-bold tracking-tight text-indigo-600 lg:hidden">SimpleAuth</a>
                {{ $slot }}
            </div>
        </section>
    </main>
</body>
</html>

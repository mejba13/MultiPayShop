<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ __('messages.welcome') }}</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="font-sans antialiased bg-gray-100">
<div class="min-h-screen flex flex-col items-center justify-center">

    <!-- Header with Language Switcher -->
    <header class="w-full bg-white shadow-md p-4 flex justify-between items-center">
        <div class="text-2xl font-semibold text-gray-700">
            MultiPayShop
        </div>

        <!-- Language Switcher -->
        <div>
            <span class="font-semibold">{{ __('messages.language') }}: </span>
            <a href="{{ url('lang/en') }}" class="px-2 text-blue-500">🇬🇧 English</a>
            <a href="{{ url('lang/fr') }}" class="px-2 text-blue-500">🇫🇷 Français</a>
            <a href="{{ url('lang/es') }}" class="px-2 text-blue-500">🇪🇸 Español</a>
        </div>
    </header>

    <!-- Welcome Message -->
    <section class="bg-white p-6 shadow-md rounded-md mt-8">
        <h1 class="text-xl font-semibold">{{ __('messages.welcome') }}</h1>
        <p>{{ __('messages.language') }}</p>
        <p class="text-gray-600 mt-2">{{ __('messages.language') }}: {{ app()->getLocale() }}</p>
    </section>

    <!-- Footer -->
    <footer class="mt-8 text-gray-500 text-sm">
        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
    </footer>
</div>
</body>
</html>

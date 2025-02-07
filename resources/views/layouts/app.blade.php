<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Include meta tags component here -->
    <x-meta-tags
        :meta-title="$meta['metaTitle'] ?? null"
        :meta-description="$meta['metaDescription'] ?? null"
        :meta-image="$meta['metaImage'] ?? null"
        :meta-canonical="$meta['metaCanonical'] ?? null"
        :meta-open-graph="$meta['metaOpenGraph'] ?? []"
        :meta-twitter="$meta['metaTwitter'] ?? []"
    />

    <title>{{ config('app.name', 'Laravel') }}</title>

    @production
        <script defer data-domain="infinitus.vecitechnologies.net" src="https://plausible.io/js/script.js"></script>
    @endproduction

    @vite([
        'resources/sass/app.scss',
        'resources/js/app.js'
    ])
    @stack('inline-scripts')
</head>

<body class="d-flex flex-column vh-100">
    @include('shared/navbar')

    <div class="container flex-grow-1">
        @include('shared/alerts')

        <main class="my-4">
            @yield('content')
        </main>
    </div>

    @include('shared/footer')
</body>
</html>

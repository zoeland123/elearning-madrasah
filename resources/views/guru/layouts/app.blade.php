<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Dashboard Guru</title>

    @include('guru.partials.styles')
</head>

<body>
    <script src="{{ asset('backend/assets/static/js/initTheme.js') }}"></script>
    <div id="app">
        @include('guru.partials.sidebar')
        
        <div id="main">
            @include('guru.partials.header')

            <div class="page-content">
                @yield('content')
            </div>

            @include('guru.partials.footer')
        </div>
    </div>

    @include('guru.partials.scripts')
</body>

</html>

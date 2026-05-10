<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - E-Learning Siswa</title>

    @include('siswa.partials.styles')
</head>

<body>
    <script src="{{ asset('backend/assets/static/js/initTheme.js') }}"></script>
    <div id="app">
        @include('siswa.partials.sidebar')
        
        <div id="main">
            @include('siswa.partials.header')

            <div class="page-content">
                @yield('content')
            </div>

            @include('siswa.partials.footer')
        </div>
    </div>

    @include('siswa.partials.scripts')
</body>

</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title', 'My App')</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css"  rel="stylesheet" />
</head>
<body>
    <header>
        @include('components.header')
    </header>
    <div class="container">
        <main>
            @yield('content')
        </main>
    </div>
    <footer>
    @include('components.carousel')
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>
</html>

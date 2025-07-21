<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <header class="bg-primary text-white p-3">
        <h1>My Blog</h1>
    </header>

    <main class="container my-4">
        @yield('content')
    </main>

    <footer class="bg-light text-center p-3">
        &copy; 2025 My Blog
        <p>Today's date is: {{ \Carbon\Carbon::now()->toFormattedDateString() }}</p>
    </footer>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        .navbar-lilac { background-color: #dccbf0; }
        .navbar-lilac .navbar-brand,
        .navbar-lilac .nav-link { color: #4a3169; }
        .navbar-lilac .nav-link:hover { color: #2f1f47; text-decoration: underline; }
        .footer-lilac { background-color: #dccbf0; color: #4a3169; }

        .btn-brand { background-color: #6C5CE7; border-color: #6C5CE7; color: #fff; }
        .btn-brand:hover { background-color: #5E60CE; border-color: #5E60CE; color: #fff; }

        .badge-kelas { background-color: #D47A9D; color: #fff; }

        .btn-edit { border: 1px solid #6C5CE7; color: #6C5CE7; background: #fff; }
        .btn-edit:hover { background: #6C5CE7; color: #fff; }

        .btn-hapus { border: 1px solid #D47A9D; color: #D47A9D; background: #fff; }
        .btn-hapus:hover { background: #D47A9D; color: #fff; }
    </style>
</head>
<body class="bg-light d-flex flex-column min-vh-100">
    <x-navbar />
    <main class="container flex-grow-1 py-4">
        @yield('content')
    </main>
    <x-footer />

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ZenBlog - Eksplorasi Tanpa Batas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;800&display=swap');
        body { font-family: 'Plus Jakarta Sans', sans-serif; background-color: #f8f9fa; color: #2d3436; }
        .nav-link { font-weight: 600; color: #636e72 !important; transition: 0.3s; }
        .nav-link.active { color: #0d6efd !important; border-bottom: 2px solid #0d6efd; }
        .navbar { border-bottom: 1px solid #eee; padding: 1rem 0; }
        .btn-write { border-radius: 50px; font-weight: 700; }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-white bg-white sticky-top">
        <div class="container">
            <a class="navbar-brand fw-bold fs-3" href="/">ZenBlog<span class="text-primary">.</span></a>
            
            <!-- Hamburger Menu -->
            <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto gap-2">
                    <li class="nav-item"><a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="/">Home</a></li>
                    <li class="nav-item"><a class="nav-link {{ Request::is('about') ? 'active' : '' }}" href="/about">About</a></li>
                    <li class="nav-item"><a class="nav-link {{ Request::is('artikel') ? 'active' : '' }}" href="/artikel">Artikel</a></li>
                    <li class="nav-item"><a class="nav-link {{ Request::is('contact') ? 'active' : '' }}" href="/contact">Contact</a></li>
                </ul>
                <div class="d-grid d-lg-block mt-3 mt-lg-0">
                    <a href="/create-article" class="btn btn-dark btn-write px-4">Tulis Artikel</a>
                </div>
            </div>
        </div>
    </nav>

    <main class="container py-5">
        @yield('content')
    </main>

    <footer class="bg-white border-top py-5 text-center">
        <div class="container">
            <h5 class="fw-bold">ZenBlog.</h5>
            <p class="text-muted small">© 2026 Zen - Project Eksplorasi Laravel</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
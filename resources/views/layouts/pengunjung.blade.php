<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Kami</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #f8fafc; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; display: flex; flex-direction: column; min-height: 100vh; }
        
        /* Header / Navbar Styling sesuai PDF */
        .header-custom { background-color: #1e293b; padding: 20px 0; color: white; }
        .header-title { font-size: 1.5rem; font-weight: bold; margin: 0; color: white; text-decoration: none; }
        .header-subtitle { font-size: 0.85rem; color: #94a3b8; margin: 0; }
        .header-nav a { color: #cbd5e1; text-decoration: none; margin-left: 20px; font-size: 0.95rem; }
        .header-nav a:hover { color: #ffffff; }

        /* Komponen General */
        .card-custom { border: none; border-radius: 12px; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05); margin-bottom: 30px; overflow: hidden; }
        .badge-kategori { background-color: #e0f2fe; color: #0284c7; padding: 5px 15px; border-radius: 20px; font-weight: 600; font-size: 0.8rem; text-decoration: none; }
        .btn-kelanjutannya { background-color: #10b981; color: white; padding: 8px 20px; border-radius: 25px; font-size: 0.85rem; text-decoration: none; font-weight: 500; }
        .btn-kelanjutannya:hover { background-color: #059669; color: white; }
        .avatar { width: 35px; height: 35px; background-color: #3b82f6; color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: bold; font-size: 0.9rem; }
        
        /* Thumbnail Gambar */
        .img-thumbnail-blog { width: 100%; height: 260px; object-fit: cover; }
        .img-thumbnail-terkait { width: 70px; height: 70px; object-fit: cover; border-radius: 8px; }

        /* Footer Styling */
        .footer-custom { background-color: #1e293b; color: #94a3b8; text-align: center; padding: 20px 0; font-size: 0.85rem; margin-top: auto; }
    </style>
</head>
<body>

    <div class="header-custom mb-4">
        <div class="container d-flex justify-content-between align-items-center">
            <div>
                <a href="{{ route('blog.index') }}" class="header-title">Blog Kami</a>
                <p class="header-subtitle mt-1">Artikel terbaru seputar Olahraga, Game, dan Fakta</p>
            </div>
            <div class="header-nav d-none d-md-block">
                <a href="{{ route('blog.index') }}">Beranda</a>
                <a href="#">Artikel</a>
                <a href="#">Kategori</a>
                <a href="#">Tentang</a>
            </div>
        </div>
    </div>

    <div class="container">
        @yield('content')
    </div>

    <footer class="footer-custom mt-5">
        &copy; 2026 Blog Kami. Seluruh hak cipta dilindungi.
    </footer>

</body>
</html>
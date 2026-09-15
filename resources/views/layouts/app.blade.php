<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dewata Shoes - Walk Beyond Limits</title>
    @vite(['resources/js/app.js'])
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700;800;900&display=swap" rel="stylesheet">
    <!-- Native CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    <!-- Header / Navbar -->
    <header class="header">
        <div class="container nav-container">
            <a href="#" class="logo">DEWATA SHOES</a>
            <ul class="nav-menu">
                <li><a href="#">MAN</a></li>
                <li><a href="#">WOMAN</a></li>
                <li><a href="#">KIDS</a></li>
                <li><a href="#">BRAND</a></li>
                <li><a href="#">CATEGORY</a></li>
                <li><a href="#">CONTACT</a></li>
            </ul>
            <div class="nav-actions">
                <div class="search-box">
                    <input type="text" placeholder="Search...">
                </div>
                <div class="nav-icons">
                    <span>❤️</span>
                    <span>🛒 <small style="background:var(--tridatu-red); padding:2px 6px; border-radius:50%; font-size:9px;">9</small></span>
                    <span>👤</span>
                </div>
            </div>
        </div>
    </header>

    <!-- Content Section -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-col">
                    <h3 class="logo" style="margin-bottom: 15px; display:block;">DEWATA SHOES</h3>
                    <p style="color:var(--text-muted); font-size:12px; line-height:1.6;">Your destination for authentic branded shoes. Quality, style, and comfort - all in one place.</p>
                </div>
                <div class="footer-col">
                    <h5>SHOP</h5>
                    <ul>
                        <li><a href="#">Men</a></li>
                        <li><a href="#">Women</a></li>
                        <li><a href="#">Kids</a></li>
                        <li><a href="#">New Arrivals</a></li>
                        <li><a href="#">Sale</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h5>CUSTOMER CARE</h5>
                    <ul>
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">Shipping Info</a></li>
                        <li><a href="#">Returns & Exchanges</a></li>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Size Guide</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h5>COMPANY</h5>
                    <ul>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Careers</a></li>
                        <li><a href="#">Sustainability</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Store Locator</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h5>NEWSLETTER</h5>
                    <p style="color:var(--text-muted); font-size:12px; margin-bottom:12px;">Subscribe for exclusive offers and new arrivals.</p>
                    <div style="display:flex; background:#1f1f23; border-radius:6px; overflow:hidden; border:1px solid var(--border-color);">
                        <input type="email" placeholder="Enter your email" style="background:transparent; border:none; padding:10px; color:#fff; font-size:12px; width:100%; outline:none;">
                        <button style="background:var(--tridatu-red); border:none; color:#fff; padding:0 15px; cursor:pointer;">&rarr;</button>
                    </div>
                </div>
            </div>
            <div style="text-align: center; border-top: 1px solid var(--border-color); padding-top: 20px; color: var(--text-muted); font-size: 11px;">
                &copy; 2026 Dewata Shoes. All rights reserved.
            </div>
        </div>
    </footer>

</body>
</html>
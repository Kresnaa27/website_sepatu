@extends('layouts.app')

@section('content')

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container hero-grid">
            <div class="hero-content">
                <span style="color: var(--tridatu-red); font-weight: 800; font-size: 11px; letter-spacing: 2px;">TRIDATU
                    EDITION</span>
                <h1>WALK BEYOND <br><span>LIMITS</span></h1>
                <p>Explore our premium Tridatu collection for unyielding steps, crafted with soul from the Island of Gods.
                </p>
                <div class="hero-buttons">
                    <a href="#" class="btn-red">Shop Now &rarr;</a>
                    <a href="#" class="btn-outline">Explore Brands</a>
                </div>
            </div>
            <div class="hero-visual">
                <!-- Gunakan placeholder atau aset gambar sepatu lokal kamu -->
                <div style="font-size: 180px;">👟</div>
            </div>
        </div>
    </section>

    <div class="container">

        <!-- Partners / Brands Bar -->
        <div class="partners-bar">
            <span style="font-weight: 900; letter-spacing: 1px;">NIKE</span>
            <span style="font-weight: 900; letter-spacing: 1px;">ADIDAS</span>
            <span style="font-weight: 900; letter-spacing: 1px;">PUMA</span>
            <span style="font-weight: 900; letter-spacing: 1px;">NEW BALANCE</span>
            <span style="font-weight: 900; letter-spacing: 1px;">CONVERSE</span>
            <span style="font-weight: 900; letter-spacing: 1px;">VANS</span>
            <span style="font-weight: 900; letter-spacing: 1px;">REEBOK</span>
        </div>

        <!-- Featured Products Title -->
        <div
            style="display: flex; justify-content: space-between; align-items: center; margin-top: 40px; margin-bottom: 20px;">
            <h3 class="section-title" style="margin: 0;">Featured Products</h3>
            <a href="#" style="color: var(--text-muted); font-size: 12px; text-decoration: none; font-weight: 700;">View
                all</a>
        </div>

        <!-- Products Grid (10 Items) -->
        <div class="products-grid">
            @for ($i = 1; $i <= 10; $i++)
                <div class="product-card">
                    <div style="text-align: right; font-size: 14px; cursor: pointer;">❤️</div>
                    <div style="text-align: center; font-size: 40px; margin: 10px 0;">👟</div>
                    <div class="product-name">Dewata Bhama Pro</div>
                    <div class="product-cat">Unisex Shoes</div>
                    <div class="product-footer">
                        <span class="product-price">Rp 949.000</span>
                        <span class="product-rating">★ 4.9</span>
                    </div>
                </div>
            @endfor
        </div>

        <!-- Promo Banners Grid -->
        <div class="promo-grid">
            <div class="promo-card">
                <div class="promo-info">
                    <span style="color: var(--tridatu-red); font-size: 11px; font-weight: 800;">TRIDATU PROMO</span>
                    <h3>Tridatu Value <br><span style="color:var(--tridatu-red)">40% OFF</span></h3>
                    <p>On selected items. Limited time only!</p>
                    <a href="#" class="btn-red" style="padding: 8px 16px; font-size: 11px;">Explore Tridatu Collection
                        &rarr;</a>
                </div>
            </div>
            <div class="promo-card">
                <div class="promo-info">
                    <span style="color: var(--tridatu-red); font-size: 11px; font-weight: 800;">TRIDATU PROMO</span>
                    <h3>Just Dropped <br>- Bhama Pro</h3>
                    <p>On selected items. Limited time only!</p>
                    <a href="#" class="btn-red" style="padding: 8px 16px; font-size: 11px;">Explore Tridatu Collection
                        &rarr;</a>
                </div>
            </div>
        </div>

        <!-- Trust Badges -->
        <div class="trust-grid">
            <div class="trust-item">
                <span style="font-size: 24px;">📦</span>
                <div>
                    <h4>Free Shipping</h4>
                    <p>On orders over $100</p>
                </div>
            </div>
            <div class="trust-item">
                <span style="font-size: 24px;">🔄</span>
                <div>
                    <h4>30-Day Returns</h4>
                    <p>Easy returns & exchanges</p>
                </div>
            </div>
            <div class="trust-item">
                <span style="font-size: 24px;">🛡️</span>
                <div>
                    <h4>100% Authentic</h4>
                    <p>Genuine branded products</p>
                </div>
            </div>
            <div class="trust-item">
                <span style="font-size: 24px;">🔒</span>
                <div>
                    <h4>Secure Payments</h4>
                    <p>Safe & encrypted checkout</p>
                </div>
            </div>
        </div>

    </div>

@endsection
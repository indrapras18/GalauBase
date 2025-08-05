<div class="sidebar">
    <div class="logo">
        <i class="fas fa-headphones"></i>
        <h1>GalauBase</h1>
    </div>

    <nav class="nav-section">
        <a href="{{ route('home') }}" style="text-decoration: none; color: inherit;">
            <div class="nav-item {{ request()->routeIs('home') ? 'active' : '' }}">
                <i class="fas fa-home"></i>
                <span>Beranda</span>
            </div>
        </a>

        <a href="{{ route('playlist') }}" style="text-decoration: none; color: inherit;">
            <div class="nav-item {{ request()->routeIs('playlist') ? 'active' : '' }}">
                <i class="fas fa-heart"></i>
                <span>Playlist</span>
            </div>
        </a>

        <a href="{{ route('home') }}" style="text-decoration: none; color: inherit;">
            <div class="nav-item {{ request()->routeIs('home') ? 'active' : '' }}">
                <i class="fas fa-memory"></i>
                <span>Kenangan</span>
            </div>
        </a>
    </nav>

    <div class="playlist-section">
        <h3>Playlist Saya</h3>
        <div class="playlist-item">Lagu Galau</div>
        <div class="playlist-item">Kenangan Manis</div>
        <div class="playlist-item">Hujan & Kopi</div>
        <div class="playlist-item">Midnight Vibes</div>
        <div class="playlist-item">Road Trip Songs</div>
    </div>
</div>

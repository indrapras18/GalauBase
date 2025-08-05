@extends('layouts.app')

@section('title', 'Beranda')

@section('content')
                <div class="section">
                    <div class="section-header">
                        <h3 class="section-title">Kenangan Terbaru</h3>
                        <a href="#" class="view-all">Lihat Semua</a>
                    </div>
                    <div class="song-grid">
                        <div class="song-card has-memory">
                            <div class="memory-indicator">💭</div>
                            <div class="song-image">
                                <i class="fas fa-music"></i>
                            </div>
                            <button class="play-button">
                                <i class="fas fa-play"></i>
                            </button>
                            <div class="song-info">
                                <div class="song-title">Terlalu Lama Sendiri</div>
                                <div class="song-artist">Kunto Aji</div>
                            </div>
                            <div class="memory-preview">
                                "you are always my space travel..."
                            </div>
                        </div>

                        <div class="song-card has-memory">
                            <div class="memory-indicator">💭</div>
                            <div class="song-image">
                                <i class="fas fa-heart"></i>
                            </div>
                            <button class="play-button">
                                <i class="fas fa-play"></i>
                            </button>
                            <div class="song-info">
                                <div class="song-title">Bella Luna</div>
                                <div class="song-artist">Jason Mraz</div>
                            </div>
                            <div class="memory-preview">
                                "Lagu ini mengingatkanku pada malam yang dihiasi caha bulan dan bintang..."
                            </div>
                        </div>

                        <div class="song-card">
                            <div class="song-image">
                                <i class="fas fa-coffee"></i>
                            </div>
                            <button class="play-button">
                                <i class="fas fa-play"></i>
                            </button>
                            <div class="song-info">
                                <div class="song-title">Akad</div>
                                <div class="song-artist">Payung Teduh</div>
                            </div>
                        </div>

                        <div class="song-card has-memory">
                            <div class="memory-indicator">💭</div>
                            <div class="song-image">
                                <i class="fas fa-rain"></i>
                            </div>
                            <button class="play-button">
                                <i class="fas fa-play"></i>
                            </button>
                            <div class="song-info">
                                <div class="song-title">Hujan</div>
                                <div class="song-artist">Utopia</div>
                            </div>
                            <div class="memory-preview">
                                "Hujan pertama setelah kamu pergi..."
                            </div>
                        </div>
                    </div>
                </div>

                <div class="section">
                    <div class="section-header">
                        <h3 class="section-title">Lagu Favoritmu</h3>
                        <a href="#" class="view-all">Lihat Semua</a>
                    </div>
                    <div class="song-grid">
                        <div class="song-card">
                            <div class="song-image">
                                <i class="fas fa-star"></i>
                            </div>
                            <button class="play-button">
                                <i class="fas fa-play"></i>
                            </button>.
                            <div class="song-info">
                                <div class="song-title">Sampai Jadi Debu</div>
                                <div class="song-artist">Banda Neira</div>
                            </div>
                        </div>

                        <div class="song-card">
                            <div class="song-image">
                                <i class="fas fa-guitar"></i>
                            </div>
                            <button class="play-button">
                                <i class="fas fa-play"></i>
                            </button>
                            <div class="song-info">
                                <div class="song-title">Berlari Tanpa Kaki</div>
                                <div class="song-artist">Petit</div>
                            </div>
                        </div>

                        <div class="song-card">
                            <div class="song-image">
                                <i class="fas fa-moon"></i>
                            </div>
                            <button class="play-button">
                                <i class="fas fa-play"></i>
                            </button>
                            <div class="song-info">
                                <div class="song-title">Malam Ini</div>
                                <div class="song-artist">Maliq & D'Essentials</div>
                            </div>
                        </div>

                        <div class="song-card">
                            <div class="song-image">
                                <i class="fas fa-leaf"></i>
                            </div>
                            <button class="play-button">
                                <i class="fas fa-play"></i>
                            </button>
                            <div class="song-info">
                                <div class="song-title">Seperti Kemarin</div>
                                <div class="song-artist">Naif</div>
                            </div>
                        </div>
                    </div>
                </div>
@endsection

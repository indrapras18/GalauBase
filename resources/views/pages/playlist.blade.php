@extends('layouts.app')

@section('content')
<div class="section">
    <div class="section-header">
        <h2 class="section-title">Playlist Galau</h2>
        <a href="#" class="view-all">Lihat Semua</a>
    </div>

    <div class="song-grid">
        {{-- Dummy data --}}
        <div class="song-card has-memory">
            <div class="song-image">
                <i class="fas fa-music"></i>
                <button class="play-button">
                    <i class="fas fa-play"></i>
                </button>
            </div>
            <div class="song-info">
                <div class="song-title">Hujan di Bulan Juni</div>
                <div class="song-artist">Efek Rumah Kaca</div>
                <div class="memory-indicator">★</div>
            </div>
            <div class="memory-preview">"Lagu ini selalu mengingatkanku pada dia."</div>
        </div>

        <div class="song-card">
            <div class="song-image">
                <i class="fas fa-music"></i>
                <button class="play-button">
                    <i class="fas fa-play"></i>
                </button>
            </div>
            <div class="song-info">
                <div class="song-title">Pamit</div>
                <div class="song-artist">Tulus</div>
            </div>
        </div>

        <div class="song-card has-memory">
            <div class="song-image">
                <i class="fas fa-music"></i>
                <button class="play-button">
                    <i class="fas fa-play"></i>
                </button>
            </div>
            <div class="song-info">
                <div class="song-title">Akad</div>
                <div class="song-artist">Payung Teduh</div>
                <div class="memory-indicator">★</div>
            </div>
            <div class="memory-preview">"Lagu pernikahan sahabatku."</div>
        </div>
    </div>
</div>
@endsection

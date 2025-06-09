@extends('layouts.master')

@section('title', 'Beranda')

@section('content')
<script src="{{ asset('script.js') }}" defer></script>
    {{-- Hero Banner --}}
    <!-- Hero Banner -->
  <div class="hero-banner">
    <div class="banner-controls">
      <button id="prevBtn">‹</button>
      <button id="nextBtn">›</button>
    </div>
  </div>

  {{-- Section Berita Terbaru --}}
  <!-- Konten Berita -->
  <div class="content-container">
    <h2 class="section-title">Beranda</h2>
    <div class="news-container">
        @foreach ($beritas as $berita)
            <div class="news-item">
                @if ($berita->gambar)
                    <img src="{{ asset('storage/' . $berita->gambar) }}" alt="{{ $berita->judul }}" class="news-image">
                @endif
                <div class="news-content">
                    <div class="news-title">{{ $berita->judul }}</div>
                    <div class="news-date">{{ \Carbon\Carbon::parse($berita->created_at)->format('d F Y') }}</div>
                    <div class="news-description">
                        {!! \Illuminate\Support\Str::limit(strip_tags($berita->isi), 200) !!}
                    </div>
                    {{-- <a href="{{ route('berita_terbaru', $berita->id) }}" style="color: red; font-weight: bold; font-size: 0.9rem; display: inline-block; margin-top: 0.75rem;">
                        Baca selengkapnya
                    </a> --}}
                </div>
            </div>
        @endforeach
    </div>

@endsection
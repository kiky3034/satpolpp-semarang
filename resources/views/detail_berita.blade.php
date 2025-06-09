@extends('layouts.master')

@section('title', 'Detail Berita')

@section('content')
    <style>
        /* === HALAMAN Berita Terbaru === */
        .hero-second-banner {
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
        }

        .overlay-text {
            position: relative;
            z-index: 2;
            background-color: rgba(0, 0, 0, 0.6);
            padding: 2rem 3rem;
            border-radius: 1rem;
            border: 2px solid rgba(255, 255, 255, 0.3);
            animation: fadeIn 1s ease-out;
        }

        .overlay-text h1 {
            color: white;
            font-size: 3rem;
            font-weight: 800;
            margin-bottom: 0.5rem;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }

        .overlay-text p {
            color: white;
            font-size: 1.25rem;
            font-weight: 500;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
        }

        /* @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-20px); }
            to { opacity: 1; transform: translateY(0); }
        } */

        .breadcrumb {
            font-size: 0.9rem;
            margin-bottom: 1.5rem;
            color: #777;
        }

        .breadcrumb a {
            color: #333;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .breadcrumb a:hover {
            color: red;
        }

        .section-title {
            font-size: 1.75rem;
            font-weight: 700;
            color: #333;
        }

        .vision-mission-container {
            display: grid;
            grid-template-columns: 1fr;
            gap: 2rem;
            margin-bottom: 3rem;
        }

        .vision-box, .mission-box {
            border-radius: 1rem;
            background-color: #f9f9f9;
            box-shadow: 0 0.25rem 0.5rem rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .vision-box:hover, .mission-box:hover {
            transform: translateY(-5px);
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
        }

        .icon-header {
            background-color: #e10e0e;
            color: white;
            padding: 1.5rem;
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .icon-header i {
            font-size: 2rem;
        }

        .icon-header h3 {
            font-size: 1.75rem;
            font-weight: 700;
            margin: 0;
        }

        .content-box {
            padding: 2rem;
        }

        .vision-text {
            font-size: 1rem;
            line-height: 1.8;
            font-weight: 500;
            color: #333;
            font-style: italic;
            text-align: center;
        }

        .mission-list {
            padding-left: 1.5rem;
            margin: 0;
        }

        .mission-list li {
            margin-bottom: 0.5rem;
            line-height: 1.5;
            font-size: 1rem;
            color: #333;
        }
        
        /* Responsif */
        @media (min-width: 768px) {
            .vision-mission-container {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 768px) {
            .overlay-text h1 {
                font-size: 2.25rem;
            }
            
            .overlay-text p {
                font-size: 1rem;
            }
            
            .vision-text {
                font-size: 1.1rem;
            }
            
            .mission-list li, .additional-info p, .additional-info li {
                font-size: 1rem;
            }
        }

        @media (max-width: 576px) {
            .overlay-text {
                padding: 1.5rem;
            }
            
            .overlay-text h1 {
                font-size: 1.75rem;
            }
            
            .content-box {
                padding: 1.5rem;
            }

            .icon-header {
                padding: 1rem;
            }

            .icon-header i {
                font-size: 1.5rem;
            }

            .icon-header h3 {
                font-size: 1.25rem;
            }
        }
    </style>

    {{-- Hero Banner --}}
    <div class="hero-second-banner">
        <div class="overlay-text">
            <h1>Berita Terbaru</h1>
            <p>Satuan Polisi Pamong Praja Kota Semarang</p>
        </div>
    </div>

    <div class="content-container">
        <div class="breadcrumb">
            <a href="/home">Beranda</a> > <a href="{{ route('berita_terbaru', $berita->id) }}">Berita Terbaru</a> > <span>{{ $berita->judul }}</span>
        </div>

        <h2 class="section-title">{{ $berita->judul }}</h2>
        <div class="news-date" style="margin-bottom: 1rem;">
            {{ \Carbon\Carbon::parse($berita->created_at)->format('d F Y') }}
        </div>

        @if ($berita->gambar)
            <img src="{{ asset('storage/' . $berita->gambar) }}" alt="{{ $berita->judul }}" style="width: 100%; max-height: 400px; object-fit: cover; margin-bottom: 1rem;">
        @endif

        <div class="news-description" style="font-size: 1rem; line-height: 1.8; color: #444;">
            {!! $berita->isi !!}
        </div>
    </div>
@endsection

@extends('layouts.master')

@section('title', 'Dasar Hukum')

@section('content')

<style>
        /* === HALAMAN DASAR HUKUM === */
        .hero-second-banner {
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            background-image: url('/images/banner-renstra.jpg');
            background-size: cover;
            background-position: center;
            height: 300px;
        }

        .hero-second-banner {
            position: relative;
            width: 100%;
            height: 70vh;
            background-image: url('/images/tugumuda.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            border-radius: 0rem 0rem 1.5rem 1.5rem;
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
            margin-bottom: 1.5rem;
        }
</style>

{{-- Hero Banner --}}
    <div class="hero-second-banner">
        <div class="overlay-text">
            <h1>Dasar Hukum</h1>
            <p>Satuan Polisi Pamong Praja Kota Semarang</p>
        </div>
    </div>

    {{-- Konten Dasar Hukum --}}
    <div class="content-container">
        <div class="breadcrumb">
            <a href="/home">Beranda</a> > <a href="/home">PPID</a> > <span>Dasar Hukum</span>
        </div>
@endsection
@extends('layouts.master')

@section('title', 'Perwal Perumahan')

@section('content')

<style>
    /* === HALAMAN Perwal Perumahan === */
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

    /* .vision-box:hover, .mission-box:hover {
        transform: translateY(-5px);
        box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
    } */

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

    .no-numbers {
        list-style-type: none;
        padding-left: 0; /* Optional: removes indentation */
    }
</style>

{{-- Hero Banner --}}
    <div class="hero-second-banner">
        <div class="overlay-text">
            <h1>Perwal Mekanisme Dan Tata Cara Penyediaan, Penyerahan, Dan Pengelolaan Prasarana, Sarana Dan Utilitas Kawasan Perumahan</h1>
            <p>Satuan Polisi Pamong Praja Kota Semarang</p>
        </div>
    </div>

    {{-- Perda Bangunan Gedung --}}
    <div class="content-container">
        <div class="breadcrumb">
            <a href="/home">Beranda</a> > <a href="/home">Perda Kota Semarang</a> > <a href="/tibum">Perda Bangunan Gedung</a> > <span>Perwal Mekanisme Dan Tata Cara Penyediaan, Penyerahan, Dan Pengelolaan Prasarana, Sarana Dan Utilitas Kawasan Perumahan </span>
        </div>

        <div class="mission-box">
            <div class="icon-header">
                <h2>PERWAL MEKANISME DAN TATA CARA PENYEDIAAN, PENYERAHAN,DAN PENGELOLAAN PRASARANA, SARANA DAN UTILITAS KAWASAN PERUMAHAN</h2>
            </div>
            <div class="content-box">
                <iframe 
                    src="https://drive.google.com/file/d/1wDCOZUoPK6oFWccfIy5ZChmX3_42BGE2/preview" 
                    width="100%" 
                    height="600px" 
                    style="border: 1px solid #ccc;"
                >
                </iframe>
            </div>
        </div>
        
@endsection
@extends('layouts.master')

@section('title', 'Daftar Informasi Publik')

@section('content')

<style>
    /* === HALAMAN DAFTAR INFORMASI PUBLIK === */
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
        padding-bottom: 0.5rem;
        border-bottom: 2px solid red;
        display: inline-block;
    }

    .contact-container {
        background-color: #f9f9f9;
        border-radius: 1rem;
        box-shadow: 0 0.25rem 0.5rem rgba(0, 0, 0, 0.1);
        overflow: hidden;
        margin-bottom: 3rem;
    }
    
    .content-box {
        padding: 2rem;
    }

    .icon-header {
        background-color: #e10e0e;
        color: white;
        padding: 1.5rem;
        display: flex;
        align-items: center;
        gap: 1rem;
    }

    .icon-header h3 {
        font-size: 1.75rem;
        font-weight: 700;
        margin: 0;
    }

    .detail-table {
        width: 100%;
        border-collapse: separate;
        border-spacing: 0 0.75rem;
    }

    .detail-table tr:hover {
        background-color: rgba(225, 14, 14, 0.05);
    }

    .detail-table th {
        width: 30%;
        text-align: left;
        vertical-align: top;
        padding: 0.75rem 1rem;
        font-weight: 600;
        color: #333;
    }

    .detail-table td {
        vertical-align: top;
        padding: 0.75rem 0;
    }

    .detail-table td.colon {
        width: 5%;
        text-align: center;
        vertical-align: top;
        padding: 0.75rem 0;
        font-weight: 600;
    }

    .detail-table td.value {
        width: 65%;
        vertical-align: top;
        padding: 0.75rem 0;
        font-weight: 500;
    }

    .detail-table td.value a {
        color: #e10e0e;
        text-decoration: none;
        transition: color 0.3s ease;
    }

    .detail-table td.value a:hover {
        text-decoration: underline;
    }
    
    /* Responsif */
    @media (max-width: 768px) {
        .overlay-text h1 {
            font-size: 2.25rem;
        }
        
        .overlay-text p {
            font-size: 1rem;
        }
        
        .detail-table th {
            width: 35%;
        }
        
        .detail-table td.value {
            width: 60%;
        }
    }

    @media (max-width: 576px) {
        .overlay-text {
            padding: 1.5rem;
        }
        
        .overlay-text h1 {
            font-size: 1.75rem;
        }
        
        .detail-table, 
        .detail-table tbody, 
        .detail-table tr, 
        .detail-table th, 
        .detail-table td {
            display: block;
            width: 100%;
        }
        
        .detail-table tr {
            margin-bottom: 1.5rem;
            padding-bottom: 0.5rem;
            border-bottom: 1px solid #eee;
        }
        
        .detail-table th,
        .detail-table td {
            padding: 0.25rem 0;
        }
        
        .detail-table td.colon {
            display: none;
        }
        
        .detail-table td.value {
            font-weight: 600;
        }
    }
</style>

{{-- Hero Banner --}}
    <div class="hero-second-banner">
        <div class="overlay-text">
            <h1>Kontak</h1>
            <p>Satuan Polisi Pamong Praja Kota Semarang</p>
        </div>
    </div>

    {{-- Konten Pelayanan Informasi --}}
    <div class="content-container">
        <div class="breadcrumb">
            <a href="/home">Beranda</a> > <a href="/home">Layanan</a> > <span>Daftar Informasi Publik</span>
        </div>

        <div class="profile-content">
            <h2 class="section-title">Kontak Kami</h2>
            
            <div class="contact-container">
                <div class="icon-header">
                    <h3>Pelayanan Informasi Satuan Polisi Pamong Praja Kota Semarang</h3>
                </div>
                <div class="content-box">
                    <table class="detail-table">
                    <tr>
                        <th>Twitter</th>
                        <td class="colon">:</td>
                        <td class="value"><a href="https://x.com/satpolpp_smg" target="_blank">@satpolpp_smg</a></td>
                    </tr>
                    <tr>
                        <th>Instagram</th>
                        <td class="colon">:</td>
                        <td class="value"><a href="https://instagram.com/satpolpp.smg" target="_blank">@satpolpp_smg</a></td>
                    </tr>
                    <tr>
                        <th>Facebook</th>
                        <td class="colon">:</td>
                        <td class="value"><a href="https://www.facebook.com/satpolppsemarangkota" target="_blank">@satpolppsemarangkota</a></td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td class="colon">:</td>
                        <td class="value"><a href="mailto:satpolpp@semarangkota.go.id">satpolpp@semarangkota.go.id</a></td>
                    </tr>
                    <tr>
                        <th>Telepon</th>
                        <td class="colon">:</td>
                        <td class="value">(024) 7604689</td>
                    </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
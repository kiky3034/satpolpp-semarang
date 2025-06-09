@extends('layouts.master')

@section('title', 'Visi & Misi - Satpol PP Semarang')

@section('content')
    <style>
        /* === HALAMAN VISI & MISI === */
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
            <h1>Visi & Misi</h1>
            <p>Satuan Polisi Pamong Praja Kota Semarang</p>
        </div>
    </div>

    {{-- Konten Visi & Misi --}}
    <div class="content-container">
        <div class="breadcrumb">
            <a href="/home">Beranda</a> > <a href="/profile">Profil</a> > <span>Visi & Misi</span>
        </div>
        
        <div class="profile-content">
            <h2 class="section-title">Visi & Misi</h2>
            
            <div class="vision-mission-container">
                <div class="vision-box">
                    <div class="icon-header">
                        <i class="fas fa-eye"></i>
                        <h3>Visi</h3>
                    </div>
                    <div class="content-box">
                        <p class="vision-text">"Terwujudnya Kota Semarang yang Semakin Hebat Berlandaskan Pancasila dalam Bingkai NKRI yang Ber-Bhineka Tunggal Ika"</p>
                    </div>
                </div>
                
                <div class="mission-box">
                    <div class="icon-header">
                        <i class="fas fa-bullseye"></i>
                        <h3>Misi</h3>
                    </div>
                    <div class="content-box">
                        <ol class="mission-list">
                            <li>Meningkatkan Kualitas & Kapasitas Sumber Daya Manusia Yang Unggul & Produktif Untuk Mencapai Kesejahteraan & Keadilan Sosial</li>
                            <li>Meningkatkan Potensi Ekonomi Lokal Yang Berdaya Saing Dan Stimulasi Pembangunan Industri, Berlandaskan Riset Dan Inovasi Berdasar Prinsip Demokrasi Ekonomi Pancasila</li>
                            <li>Menjamin Kemerdekaan Masyarakat Menjalankan Ibadah, Pemenuhan Hak Dasar Dan Perlindungan Kesejahteraan Sosial Serta Hak Asasi Manusia Bagi Masyarakat Secara Berkeadilan</li>
                            <li>Mewujudkan Infrastruktur Berkualitas Yang Berwawasan Lingkungan Untuk Mendukung Kemajuan Kota</li>
                            <li>Menjalankan Reformasi Birokrasi Pemerintahan Secara Dinamis Dan Menyusun Produk Hukum Yang Sesuai Nilai-Nilai Pancasila Dalam Kerangka Negara Kesatuan Republik Indonesia</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection
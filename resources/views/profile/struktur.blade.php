@extends('layouts.master')

@section('title', 'Struktur Organisasi - Satpol PP Semarang')

@section('content')
    <style>
        /* === HALAMAN STRUKTUR ORGANISASI === */
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

        .struktur-container {
            background-color: #f9f9f9;
            border-radius: 1rem;
            box-shadow: 0 0.25rem 0.5rem rgba(0, 0, 0, 0.1);
            padding: 2rem;
            margin-bottom: 2rem;
        }

        .struktur-image {
            width: 100%;
            border: 1px solid #ddd;
            border-radius: 0.5rem;
            margin-bottom: 2rem;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .struktur-image:hover {
            transform: scale(1.01);
        }

        .struktur-text {
            background-color: white;
            padding: 2rem;
            border-radius: 0.5rem;
            border-left: 4px solid #e10e0e;
        }

        .struktur-text h3 {
            font-size: 1.5rem;
            font-weight: 700;
            color: #333;
            margin-bottom: 1.5rem;
            text-align: center;
        }

        .struktur-text p {
            margin-bottom: 1rem;
            line-height: 1.6;
            font-size: 1rem;
            color: #333;
        }

        .struktur-list {
            margin: 0;
            padding-left: 1.2rem;
        }

        .struktur-list li {
            margin-bottom: 0.5rem;
            line-height: 1.5;
        }

        .struktur-sublist {
            list-style-type: decimal;
            padding-left: 2rem;
            margin-top: 0.5rem;
            margin-bottom: 1rem;
        }

        .struktur-sublist li {
            margin-bottom: 0.25rem;
        }

        /* Responsif */
        @media (max-width: 768px) {
            .overlay-text h1 {
                font-size: 2.25rem;
            }
            
            .overlay-text p {
                font-size: 1rem;
            }
            
            .struktur-container {
                padding: 1.5rem;
            }
            
            .struktur-text {
                padding: 1.5rem;
            }
            
            .struktur-text h3 {
                font-size: 1.35rem;
            }
        }

        @media (max-width: 576px) {
            .overlay-text {
                padding: 1.5rem;
            }
            
            .overlay-text h1 {
                font-size: 1.75rem;
            }
            
            .struktur-container {
                padding: 1rem;
            }
            
            .struktur-text {
                padding: 1rem;
            }
        }
    </style>
    {{-- Hero Banner --}}
    <div class="hero-second-banner">
        <div class="overlay-text">
            <h1>Struktur Organisasi</h1>
            <p>Satuan Polisi Pamong Praja Kota Semarang</p>
        </div>
    </div>

    {{-- Konten Struktur Organisasi --}}
    <div class="content-container">
        <div class="breadcrumb">
            <a href="/home">Beranda</a> > <a href="/profile">Profil</a> > <span>Struktur Organisasi</span>
        </div>
        
        <div class="profile-content">
            <h2 class="section-title">Struktur Organisasi</h2>
            
            <div class="struktur-container">
                <img src="/images/bagan satpolpp.png" alt="Struktur Organisasi Satpol PP Kota Semarang" class="struktur-image">
                
                <div class="struktur-text">
                    <h3>STRUKTUR ORGANISASI</h3>
                    <p>Struktur Organisasi berdasarkan Peraturan Daerah Nomor 14 Tahun 2016 tentang Pembentukan dan Susunan Perangkat Daerah Kota Semarang terdiri dari :</p>
                    
                    <ol class="struktur-list" type="a">
                        <li>Kepala Satuan;</li>
                        <li>Sekretariat, terdiri atas :
                            <ol class="struktur-sublist">
                                <li>Subbagian Perencanaan dan Evaluasi;</li>
                                <li>Subbagian Keuangan dan Aset; dan</li>
                                <li>Subbagian Umum dan Kepegawaian.</li>
                            </ol>
                        </li>
                        <li>Bidang Pembinaan Masyarakat, terdiri atas :
                            <ol class="struktur-sublist">
                                <li>Seksi Kewaspadaan Dini;</li>
                                <li>Seksi Bimbingan dan Penyuluhan; dan</li>
                                <li>Seksi Pengaduan.</li>
                            </ol>
                        </li>
                        <li>Bidang Ketertiban Umum dan Ketenteraman Masyarakat, terdiri atas :
                            <ol class="struktur-sublist">
                                <li>Seksi Ketertiban Umum;</li>
                                <li>Seksi Operasional; dan</li>
                                <li>Seksi Pengendalian.</li>
                            </ol>
                        </li>
                        <li>Bidang Penegakan Perundang-Undangan Daerah, terdiri atas :
                            <ol class="struktur-sublist">
                                <li>Seksi Hubungan Antar Lembaga;</li>
                                <li>Seksi Penegakan Peraturan Daerah; dan</li>
                                <li>Seksi Pembinaan PPNS.</li>
                            </ol>
                        </li>
                        <li>Bidang Satuan Perlindungan Masyarakat, terdiri atas :
                            <ol class="struktur-sublist">
                                <li>Seksi Data dan Informasi Satuan Perlindungan Masyarakat;</li>
                                <li>Seksi Mobilisasi Satuan Perlindungan Masyarakat; dan</li>
                                <li>Seksi Pengorganisasian dan Pemberdayaan Satuan Perlindungan Masyarakat.</li>
                            </ol>
                        </li>
                        <li>Jabatan Fungsional.</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
@endsection
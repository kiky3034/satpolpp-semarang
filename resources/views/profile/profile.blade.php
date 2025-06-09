@extends('layouts.master')

@section('title', 'Profil - Satpol PP Semarang')

@section('content')

<style>
    /* === HALAMAN PROFIL === */
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

    .profile-intro {
        margin-bottom: 2.5rem;
        line-height: 1.7;
        font-size: 1.1rem;
        color: #333;
    }

    .profile-menu-container {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
        gap: 1.5rem;
    }

    .profile-menu-item {
        background-color: #f9f9f9;
        border-radius: 1rem;
        overflow: hidden;
        box-shadow: 0 0.25rem 0.5rem rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .profile-menu-item:hover {
        transform: translateY(-5px);
        box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
    }

    .profile-menu-item a {
        display: block;
        text-decoration: none;
        color: inherit;
        padding: 2rem;
    }

    .menu-icon {
        width: 3.5rem;
        height: 3.5rem;
        background-color: rgba(225, 14, 14, 0.1);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 1rem;
        transition: background-color 0.3s ease;
    }

    .profile-menu-item:hover .menu-icon {
        background-color: #e10e0e;
    }

    .menu-icon i {
        font-size: 1.5rem;
        color: #e10e0e;
        transition: color 0.3s ease;
    }

    .profile-menu-item:hover .menu-icon i {
        color: white;
    }

    .profile-menu-item h3 {
        font-size: 1.25rem;
        font-weight: 700;
        margin-bottom: 0.5rem;
        color: #333;
        transition: color 0.3s ease;
    }

    .profile-menu-item:hover h3 {
        color: #e10e0e;
    }

    .profile-menu-item p {
        font-size: 0.9rem;
        color: #666;
        line-height: 1.5;
    }
</style>

{{-- Hero Banner --}}
<div class="hero-second-banner">
    <div class="overlay-text">
        <h1>Profil</h1>
        <p>Satuan Polisi Pamong Praja Kota Semarang</p>
    </div>
</div>

{{-- Konten Profil --}}
<div class="content-container">
    <div class="breadcrumb">
        <a href="/home">Beranda</a> > <span>Profil</span>
    </div>
    
    <div class="profile-content">
        <h2 class="section-title">Sejarah Singkat Satpol PP</h2>
        
        <div class="profile-intro">
            <p>Satuan Polisi Pamong Praja (Satpol PP) adalah perangkat Pemerintah Daerah yang bertugas memelihara ketentraman dan ketertiban umum serta menegakkan Peraturan Daerah. Didirikan di Yogyakarta pada 3 Maret 1950 dengan semboyan Praja Wibawa, Satpol PP berawal dari Detasemen Polisi yang dibentuk untuk menjaga keamanan pasca-proklamasi kemerdekaan. Pada 10 November 1948, lembaga ini berubah menjadi Detasemen Polisi Pamong Praja, dan pada 3 Maret 1950, Satpol PP resmi dibentuk di Jawa dan Madura. Setiap 3 Maret diperingati sebagai Hari Jadi Satpol PP. Sejak tahun 1960, pembentukan Satpol PP meluas ke luar Jawa dan Madura, dengan beberapa perubahan nama hingga akhirnya dikenal sebagai Satpol PP setelah pemberlakuan UU No 5/1974 tentang Pokok-pokok Pemerintahan di Daerah.</p>
        </div>
        
        <div class="profile-menu-container">
            <div class="profile-menu-item">
                <a href="/visi-misi">
                    <div class="menu-icon">
                        <i class="fas fa-eye"></i>
                    </div>
                    <h3>Visi & Misi</h3>
                    <p>Tujuan, arah, dan sasaran Satpol PP Kota Semarang dalam memberikan pelayanan kepada masyarakat</p>
                </a>
            </div>
            
            <div class="profile-menu-item">
                <a href="/geografis">
                    <div class="menu-icon">
                        <i class="fas fa-map-location-dot"></i>
                    </div>
                    <h3>Geografis & Penduduk</h3>
                    <p>Informasi mengenai kondisi geografis dan demografis Kota Semarang</p>
                </a>
            </div>
            
            <div class="profile-menu-item">
                <a href="/struktur">
                    <div class="menu-icon">
                        <i class="fas fa-sitemap"></i>
                    </div>
                    <h3>Struktur Pemerintahan</h3>
                    <p>Struktur organisasi Satuan Polisi Pamong Praja Kota Semarang</p>
                </a>
            </div>
            
            <div class="profile-menu-item">
                <a href="/tupoksi">
                    <div class="menu-icon">
                        <i class="fas fa-list-check"></i>
                    </div>
                    <h3>Tupoksi</h3>
                    <p>Tugas pokok dan fungsi Satuan Polisi Pamong Praja Kota Semarang</p>
                </a>
            </div>
            
            <div class="profile-menu-item">
                <a href="/pejabat">
                    <div class="menu-icon">
                        <i class="fas fa-user-tie"></i>
                    </div>
                    <h3>Profil Pejabat</h3>
                    <p>Informasi mengenai pejabat struktural di lingkungan Satpol PP Kota Semarang</p>
                </a>
            </div>
            
            <div class="profile-menu-item">
                <a href="/renstra">
                    <div class="menu-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Renstra</h3>
                    <p>Rencana strategis Satuan Polisi Pamong Praja Kota Semarang</p>
                </a>
            </div>
            
            <div class="profile-menu-item">
                <a href="/renja">
                    <div class="menu-icon">
                        <i class="fas fa-calendar-check"></i>
                    </div>
                    <h3>Renja</h3>
                    <p>Rencana kerja tahunan Satuan Polisi Pamong Praja Kota Semarang</p>
                </a>
            </div>
            
            <div class="profile-menu-item">
                <a href="/sdm">
                    <div class="menu-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3>SDM</h3>
                    <p>Informasi sumber daya manusia Satuan Polisi Pamong Praja Kota Semarang</p>
                </a>
            </div>
            
            <div class="profile-menu-item">
                <a href="/lakip">
                    <div class="menu-icon">
                        <i class="fas fa-file-contract"></i>
                    </div>
                    <h3>LAKIP</h3>
                    <p>Laporan Akuntabilitas Kinerja Instansi Pemerintah</p>
                </a>
            </div>
            
            <div class="profile-menu-item">
                <a href="/galeri">
                    <div class="menu-icon">
                        <i class="fas fa-images"></i>
                    </div>
                    <h3>Galeri</h3>
                    <p>Dokumentasi kegiatan Satuan Polisi Pamong Praja Kota Semarang</p>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
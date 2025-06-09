@extends('layouts.master')

@section('title', 'Geografis & Penduduk - Satpol PP Semarang')

@section('content')
    <style>
        /* === HALAMAN GEOGRAFIS & PENDUDUK === */
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
        }

        .geographic-container {
            display: grid;
            grid-template-columns: 1fr;
            gap: 2rem;
            margin-bottom: 3rem;
        }

        .map-box, .geo-info-box, .demo-info-box {
            border-radius: 1rem;
            background-color: #f9f9f9;
            box-shadow: 0 0.25rem 0.5rem rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .map-box:hover, .geo-info-box:hover, .demo-info-box:hover {
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

        .maps-container {
            width: 100%;
            height: 450px;
            border-radius: 0.5rem;
            overflow: hidden;
        }
        
        .maps-container iframe {
            width: 100%;
            height: 100%;
            border: none;
        }

        .geo-text, .demo-text {
            font-size: 1.1rem;
            line-height: 1.6;
            color: #333;
        }

        .info-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 1.5rem;
            margin-top: 1.5rem;
        }

        .info-card {
            background-color: white;
            border-radius: 0.75rem;
            padding: 1.5rem;
            box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.05);
            border-left: 4px solid #e10e0e;
        }

        .info-card h4 {
            font-size: 1.25rem;
            color: #e10e0e;
            margin-bottom: 0.75rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .info-card h4 i {
            font-size: 1.5rem;
        }

        .info-card p, .info-card ul {
            margin: 0;
            font-size: 1rem;
        }

        .info-card ul {
            padding-left: 1.25rem;
        }

        .info-card ul li {
            margin-bottom: 0.5rem;
        }

        .stats-container {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 1.5rem;
            margin-top: 1.5rem;
        }

        .stat-card {
            background-color: white;
            border-radius: 0.75rem;
            padding: 1.5rem;
            text-align: center;
            box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.05);
            border-top: 4px solid #e10e0e;
            position: relative;
        }

        .stat-number {
            font-size: 2.5rem;
            font-weight: 800;
            color: #e10e0e;
            margin-bottom: 0.5rem;
        }

        .stat-title {
            font-size: 1rem;
            color: #555;
            font-weight: 500;
        }

        .gender-icon {
            font-size: 3rem;
            margin-top: 1.5rem;
        }

        .male-icon {
            color: #2c7be5;
        }

        .female-icon {
            color: #e63757;
        }

        .gender-percentage {
            font-size: 1.5rem;
            font-weight: 700;
            margin-top: 0.5rem;
        }

        .gender-label {
            color: #555;
            font-size: 1rem;
        }
        
        /* Responsif */
        @media (min-width: 992px) {
            .info-grid, .stats-container {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 992px) {
            .info-grid, .stats-container {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 768px) {
            .overlay-text h1 {
                font-size: 2.25rem;
            }
            
            .overlay-text p {
                font-size: 1rem;
            }
            
            .geo-text, .demo-text {
                font-size: 1rem;
            }
            
            .maps-container {
                height: 350px;
            }

            .stat-number {
                font-size: 2rem;
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

            .maps-container {
                height: 250px;
            }
        }
    </style>
    {{-- Hero Banner --}}
    <div class="hero-second-banner">
        <div class="overlay-text">
            <h1>Geografis & Penduduk</h1>
            <p>Satuan Polisi Pamong Praja Kota Semarang</p>
        </div>
    </div>

    {{-- Konten Geografis & Penduduk --}}
    <div class="content-container">
        <div class="breadcrumb">
            <a href="/home">Beranda</a> > <a href="/profile">Profil</a> > <span>Geografis & Penduduk</span>
        </div>
        
        <div class="profile-content">
            <h2 class="section-title">Geografis & Penduduk</h2>
            
            <div class="geographic-container">
                {{-- Peta Kota Semarang --}}
                <div class="map-box">
                    <div class="icon-header">
                        <i class="fas fa-map-marked-alt"></i>
                        <h3>Peta Kota Semarang</h3>
                    </div>
                    <div class="content-box">
                        <div class="maps-container">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126715.79661807901!2d110.33466325971628!3d-7.024722607692725!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708b4d3f0d024d%3A0x1e0432b9da5cb9f2!2sSemarang%2C%20Semarang%20City%2C%20Central%20Java!5e0!3m2!1sen!2sid!4v1747147110609!5m2!1sen!2sid" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
                
                {{-- Kondisi Geografis --}}
                <div class="geo-info-box">
                    <div class="icon-header">
                        <i class="fas fa-mountain"></i>
                        <h3>Kondisi Geografis</h3>
                    </div>
                    <div class="content-box">
                        <p class="geo-text">
                            Kota Semarang memiliki karakteristik geografis yang unik karena terbagi menjadi dua wilayah 
                            yang berbeda secara topografis, yaitu wilayah dataran rendah (Semarang Bawah) di bagian utara 
                            dan wilayah perbukitan (Semarang Atas) di bagian selatan.
                        </p>
                        
                        <div class="info-grid">
                            <div class="info-card">
                                <h4><i class="fas fa-border-all"></i> Batas Wilayah</h4>
                                <ul>
                                    <li><strong>Utara   :</strong> Laut Jawa</li>
                                    <li><strong>Timur   :</strong> Kabupaten Demak</li>
                                    <li><strong>Selatan :</strong> Kabupaten Semarang</li>
                                    <li><strong>Barat   :</strong> Kabupaten Kendal</li>
                                </ul>
                            </div>
                            
                            <div class="info-card">
                                <h4><i class="fas fa-ruler-combined"></i> Luas Wilayah</h4>
                                <p>Total luas wilayah Kota Semarang adalah <strong>373,70 km²</strong>, yang terbagi menjadi 16 kecamatan dan 177 kelurahan.</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                {{-- Kondisi Demografi --}}
                <div class="demo-info-box">
                    <div class="icon-header">
                        <i class="fas fa-users"></i>
                        <h3>Kondisi Demografi</h3>
                    </div>
                    <div class="content-box">
                        <p class="demo-text">
                            Kota Semarang memiliki populasi penduduk yang terus berkembang sebagai salah satu kota besar di Indonesia. Berikut adalah data demografis penduduk Kota Semarang:
                        </p>
                        
                        <div class="stats-container">
                            <div class="stat-card">
                                <div class="stat-number">1,7 Juta Jiwa</div>
                                <div class="stat-title">Jumlah Penduduk (2024)</div>
                                <div class="gender-icon male-icon">
                                    <i class="fas fa-male"></i>
                                </div>
                                <div class="gender-percentage">49,51%</div>
                                <div class="gender-label">Laki-laki (2021)</div>
                            </div>
                            
                            <div class="stat-card">
                                <div class="stat-number">0,73%</div>
                                <div class="stat-title">Pertumbuhan Penduduk Per Tahun (2024)</div>
                                <div class="gender-icon female-icon">
                                    <i class="fas fa-female"></i>
                                </div>
                                <div class="gender-percentage">50,48%</div>
                                <div class="gender-label">Perempuan (2021)</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection

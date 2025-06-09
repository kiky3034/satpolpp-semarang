@extends('layouts.master')

@section('title', 'Renja - Satpol PP Semarang')

@section('content')
    <style>
        /* === HALAMAN RENJA === */
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

        .content-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 2rem;
        }

        .pdf-documents-container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 2rem;
            margin-top: 2rem;
        }

        .pdf-card {
            background-color: #f9f9f9;
            border-radius: 0.75rem;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .pdf-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.15);
        }

        .pdf-header {
            background-color: #e10e0e;
            color: white;
            padding: 1.25rem;
            text-align: center;
        }

        .pdf-header h3 {
            margin: 0;
            font-size: 1.25rem;
            font-weight: 600;
        }

        .pdf-preview {
            height: 180px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-bottom: 1px solid #eaeaea;
            padding: 1rem;
        }

        .pdf-preview .pdf-icon {
            font-size: 5rem;
            color: #e10e0e;
        }

        .pdf-info {
            padding: 1.25rem;
        }

        .pdf-info p {
            margin: 0 0 0.75rem;
            font-size: 0.9rem;
            color: #555;
        }

        .pdf-info p strong {
            color: #333;
        }

        .pdf-actions {
            display: flex;
            gap: 0.75rem;
            padding: 0 1.25rem 1.25rem;
        }

        .pdf-btn {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
            background-color: #e10e0e;
            color: white;
            border: none;
            border-radius: 0.5rem;
            padding: 0.75rem 1rem;
            font-size: 0.9rem;
            font-weight: 500;
            cursor: pointer;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }

        .pdf-btn:hover {
            background-color: #c30c0c;
        }

        .pdf-btn.view-btn {
            background-color: #333;
        }

        .pdf-btn.view-btn:hover {
            background-color: #222;
        }
        
        .description-text {
            margin-bottom: 2rem;
            line-height: 1.6;
            color: #444;
        }

        @media (max-width: 768px) {
            .overlay-text h1 {
                font-size: 2.25rem;
            }
            
            .overlay-text p {
                font-size: 1rem;
            }
            
            .pdf-documents-container {
                grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            }
        }

        @media (max-width: 576px) {
            .overlay-text {
                padding: 1.5rem;
            }
            
            .overlay-text h1 {
                font-size: 1.75rem;
            }
            
            .content-container {
                padding: 1.5rem;
            }

            .pdf-documents-container {
                grid-template-columns: 1fr;
            }
        }
    </style>
    
    {{-- Hero Banner --}}
    <div class="hero-second-banner">
        <div class="overlay-text">
            <h1>Rencana Kerja</h1>
            <p>Satuan Polisi Pamong Praja Kota Semarang</p>
        </div>
    </div>

    {{-- Konten Renja --}}
    <div class="content-container">
        <div class="breadcrumb">
            <a href="/home">Beranda</a> > <a href="/profile">Profil</a> > <span>Renja</span>
        </div>
        
        <div class="profile-content">
            <h2 class="section-title">Rencana Kerja (Renja)</h2>
            
            <p class="description-text">
                Rencana Kerja (Renja) merupakan
                dokumen perencanaan yang akan dilaksanakan pada tahun yang akan datang dan
                merupakan penjabaran rincian mengenai program, kegiatan, sub kegiatan yang terdiri
                dari sasaran dan capaian sesuai prioritas yang menjadi pedoman dalam pelaksanaan
                kegiatan / sub kegiatan yang disusun oleh masing – masing SKPD termasuk Satuan
                Polisi Pamong Praja Kota Semarang.
            </p>
            
            <div class="pdf-documents-container">
                <!-- Renja 2018 -->
                <div class="pdf-card">
                    <div class="pdf-header">
                        <h3>Renja 2018</h3>
                    </div>
                    <div class="pdf-preview">
                        <i class="far fa-file-pdf pdf-icon"></i>
                    </div>
                    <div class="pdf-info">
                        <p><strong>Dokumen:</strong> Renstra Satpol PP Semarang (Murni)</p>
                        <p><strong>Ukuran:</strong> 3.5 MB</p>
                        <p><strong>Diperbarui:</strong> 10 Januari 2023</p>
                    </div>
                    <div class="pdf-actions">
                        <a href="{{ asset('file/renja 2022.pdf') }}" class="pdf-btn">
                            <i class="fas fa-download"></i> Download
                        </a>
                        <a href="{{ asset('file/renja 2022.pdf') }}" target="_blank" class="pdf-btn view-btn">
                            <i class="fas fa-eye"></i> Lihat
                        </a>
                    </div>
                </div>
                
                <!-- Renja 2020 -->
                <div class="pdf-card">
                    <div class="pdf-header">
                        <h3>Renja 2020</h3>
                    </div>
                    <div class="pdf-preview">
                        <i class="far fa-file-pdf pdf-icon"></i>
                    </div>
                    <div class="pdf-info">
                        <p><strong>Dokumen:</strong> Renstra Satpol PP Semarang (Perubahan)</p>
                        <p><strong>Ukuran:</strong> 4.2 MB</p>
                        <p><strong>Diperbarui:</strong> 15 Maret 2023</p>
                    </div>
                    <div class="pdf-actions">
                        <a href="{{ asset('file/renja 2022.pdf') }}" class="pdf-btn">
                            <i class="fas fa-download"></i> Download
                        </a>
                        <a href="{{ asset('file/renja 2022.pdf') }}" target="_blank" class="pdf-btn view-btn">
                            <i class="fas fa-eye"></i> Lihat
                        </a>
                    </div>
                </div>
                
                <!-- Renja 2022 -->
                <div class="pdf-card">
                    <div class="pdf-header">
                        <h3>Renja 2022</h3>
                    </div>
                    <div class="pdf-preview">
                        <i class="far fa-file-pdf pdf-icon"></i>
                    </div>
                    <div class="pdf-info">
                        <p><strong>Dokumen:</strong> Renstra Satpol PP 2021-2026</p>
                        <p><strong>Ukuran:</strong> 5.8 MB</p>
                        <p><strong>Diperbarui:</strong> 20 Januari 2024</p>
                    </div>
                    <div class="pdf-actions">
                        <a href="{{ asset('file/renja 2022.pdf') }}" class="pdf-btn">
                            <i class="fas fa-download"></i> Download
                        </a>
                        <a href="{{ asset('file/renja 2022.pdf') }}" target="_blank" class="pdf-btn view-btn">
                            <i class="fas fa-eye"></i> Lihat
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
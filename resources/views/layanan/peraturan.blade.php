@extends('layouts.master')

@section('title', 'Peraturan')

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
</style>

{{-- Hero Banner --}}
    <div class="hero-second-banner">
        <div class="overlay-text">
            <h1>Peraturan</h1>
            <p>Satuan Polisi Pamong Praja Kota Semarang</p>
        </div>
    </div>

    {{-- Konten Daftar Informasi Publik --}}
    <div class="content-container">
        <div class="breadcrumb">
            <a href="/home">Beranda</a> > <a href="/layanan">layanan</a> > <span>Peraturan</span>
        </div>

        <div class="profile-content">
            <h2 class="section-title">Peraturan</h2>
            <div class="mission-box">
                    <div class="icon-header">
                        <h2>Peraturan Daerah yang diampu oleh Satuan Polisi Pamong Praja</h2>
                    </div>
                    <div class="content-box">
                                <ol class="mission-list">
                                    <li>Perda Kota Besar Semarang Tanggal 10 Februari 1956 Tentang Pemberantasan Pelacuran di Jalan Dalam Kota Besar Semarang.</li>
                                    <li>Perda Kotamadya Dati II Semarang No. 15 Tahun 1981 Tentang Peraturan Penghijauan/pertamanan Dalam Wilayah Kota Madya Dati II Semarang.</li>
                                    <li>Perda Kota Semarang No. 10 Tahun 2000 Tentang Pengaturan Pasar.</li>
                                    <li>Perda Kota Semarang No. 11 Tahun 2000 Tentang Pengaturan dan Pembinaan Pedagang Kaki Lima.</li>
                                    <li>Perda Kota Semarang No. 1 Tahun 2004 Tentang Penyelenggaraan dan Retribusi Parkir di Tepi Jalan Umum.</li>
                                    <li>Perda Kota Semarang No. 13 Tahun 2006 Tentang Pengendalian Lingkungan Hidup.</li>
                                    <li>Perda Kota Semarang No. 1 Tahun 2007 Tentang Penyelenggaraan Pendidikan di Kota Semarang.</li>
                                    <li>Perda Kota Semarang No. 6 Tahun 2007 Tentang Kesehatan Hewan dan Kesehatan Masyarakat Veteriner.</li>
                                    <li>Perda Kota Semarang No. 2 Tahun 2008 Tentang Penyelenggaraan Administrasi Kependudukan.</li>
                                    <li>Perda Kota Semarang No. 5 Tahun 2009 Tentang Bangunan Gedung.</li>
                                    <li>Perda Kota Semarang No. 8 Tahun 2009 Tentang Pengawasan dan Pengendalian Minuman Beralkohol.</li>
                                    <li>Perda Kota Semarang No. 3 Tahun 2010 Tentang Kepariwisataan.</li>
                                    <li>Perda Kota Semarang No. 5 Tahun 2010 Tentang Pengendalian Penyakit Demam Berdarah Dengue.</li>
                                    <li>Perda Kota Semarang No. 3  Tahun 2011 Tentang Pajak Hotel.</li>
                                    <li>Perda Kota Semarang No. 4 Tahun 2011 Tentang Pajak Restoran.</li>
                                    <li>Perda Kota Semarang No. 5 Tahun 2011 Tentang Pajak Hiburan.</li>
                                    <li>Perda Kota Semarang No. 6 Tahun 2011 Tentang Pajak Reklame.</li>
                                    <li>Perda Kota Semarang No. 8 Tahun 2011 Tentang Pajak Air Tanah.</li>
                                    <li>Perda Kota Semarang No. 20 tahun 2011 Tentang Ijin Gangguan.</li>
                                    <li>Perda Kota Semarang No. 22 tahun 2011 Tentang Ijin Penyambungan Jalan Masuk.</li>
                                    <li>Perda Kota Semarang No. 2 Tahun 2012 Tentang Retribusi Jasa Umum di Kota Semarang.</li>
                                    <li>Perda Kota Semarang No. 3 Tahun 2012 Tentang Retribusi Jasa Usaha di Kota Semarang.</li>
                                    <li>Perda Kota Semarang No. 4 Tahun 2012 Tentang Retribusi Jasa Tertentu di Kota Semarang.</li>
                                    <li>Perda Kota Semarang No. 6 Tahun 2012 Tentang Pengelolaan Sampah.</li>
                                    <li>Perda Kota Semarang No. 14 Tahun 2012 Tentang Penyelenggaraan Reklame.</li>
                                    <li>Perda Kota Semarang No. 2 Tahun 2012 Tentang Pengelolaan Air Bawah Tanah.</li>
                                </ol>
                            </div>
                    </div>

@endsection
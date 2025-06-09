@extends('layouts.master')

@section('title', 'Profil Pejabat - Satpol PP Semarang')

@section('content')
    <style>
        /* === HALAMAN PROFIL PEJABAT === */
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

        .profile-container {
            display: grid;
            grid-template-columns: 1fr 2fr;
            gap: 2rem;
            margin-bottom: 3rem;
        }

        .profile-photo {
            background-color: #f9f9f9;
            border-radius: 1rem;
            box-shadow: 0 0.25rem 0.5rem rgba(0, 0, 0, 0.1);
            padding: 1.5rem;
            text-align: center;
            height: fit-content;
        }

        .profile-photo img {
            width: 100%;
            max-width: 300px;
            border: 5px solid white;
            border-radius: 0.5rem;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            margin-bottom: 1rem;
        }

        .profile-photo h3 {
            font-size: 1.5rem;
            font-weight: 700;
            color: #333;
            margin-bottom: 0.25rem;
        }

        .profile-photo p {
            font-size: 1rem;
            color: #666;
            margin-bottom: 0;
        }

        .profile-details {
            background-color: #f9f9f9;
            border-radius: 1rem;
            box-shadow: 0 0.25rem 0.5rem rgba(0, 0, 0, 0.1);
            overflow: hidden;
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

        .content-box {
            padding: 0;
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

        @media (max-width: 992px) {
            .profile-container {
                grid-template-columns: 1fr;
                gap: 1.5rem;
            }
            
            .profile-photo {
                max-width: none;
                margin: 0 auto;
            }
        }

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
            <h1>Profil Pejabat</h1>
            <p>Satuan Polisi Pamong Praja Kota Semarang</p>
        </div>
    </div>

    {{-- Konten Profil Pejabat --}}
    <div class="content-container">
        <div class="breadcrumb">
            <a href="/home">Beranda</a> > <a href="/profile">Profil</a> > <span>Profil Pejabat</span>
        </div>
        
        <div class="profile-content">
            <h2 class="section-title">Profil Pejabat</h2>
            
            <div class="profile-details">
                <div class="icon-header">
                    <h3>Data Pejabat</h3>
                </div>
                
                <div class="profile-container">
                    <div class="profile-photo">
                        <img src="/images/pejabat-satpol.jpg" alt="Foto Kepala Satpol PP Kota Semarang">
                        <h3>FAJAR PURWOTO, SH, MM</h3>
                        <p>Kepala Satuan Polisi Pamong Praja</p>
                    </div>
                    
                    <div class="content-box">
                        <table class="detail-table">
                            <tr>
                                <th>Nama</th>
                                <td class="colon">:</td>
                                <td class="value">FAJAR PURWOTO, SH, MM</td>
                            </tr>
                            <tr>
                                <th>NIP</th>
                                <td class="colon">:</td>
                                <td class="value">19640115 199201 1 001</td>
                            </tr>
                            <tr>
                                <th>Unit Kerja</th>
                                <td class="colon">:</td>
                                <td class="value">Satuan Polisi Pamong Praja Kota Semarang</td>
                            </tr>
                            <tr>
                                <th>Jabatan</th>
                                <td class="colon">:</td>
                                <td class="value">Kepala Satuan Polisi Pamong Praja Kota Semarang</td>
                            </tr>
                            <tr>
                                <th>Pangkat/Golongan</th>
                                <td class="colon">:</td>
                                <td class="value">Pembina Utama Muda (IV/c)</td>
                            </tr>
                            <tr>
                                <th>Pendidikan Umum</th>
                                <td class="colon">:</td>
                                <td class="value">S2 Magister Manajemen</td>
                            </tr>
                            <tr>
                                <th>Agama</th>
                                <td class="colon">:</td>
                                <td class="value">ISLAM</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
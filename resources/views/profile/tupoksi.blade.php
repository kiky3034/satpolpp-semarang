@extends('layouts.master')

@section('title', 'Tupoksi - Satpol PP Semarang')

@section('content')
    <style>
        /* === HALAMAN TUPOKSI === */
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

        .tupoksi-container {
            display: grid;
            grid-template-columns: 1fr;
            gap: 2rem;
            margin-bottom: 3rem;
        }

        .tupoksi-section {
            border-radius: 1rem;
            background-color: #f9f9f9;
            box-shadow: 0 0.25rem 0.5rem rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .tupoksi-section:hover {
            transform: translateY(-5px);
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
        }

        .section-header {
            background-color: #e10e0e;
            color: white;
            padding: 1.5rem;
        }

        .section-header h2 {
            font-size: 1.75rem;
            font-weight: 700;
            margin: 0;
        }

        .section-content {
            padding: 2rem;
        }

        .section-content p {
            font-size: 1.1rem;
            line-height: 1.8;
            margin-bottom: 1.5rem;
            color: #333;
        }

        .function-list {
            padding-left: 1.5rem;
            margin: 0;
        }

        .function-list li {
            margin-bottom: 0.5rem;
            line-height: 1.5;
            font-size: 1rem;
            color: #333;
        }

        /* Responsif */
        @media (max-width: 768px) {
            .overlay-text h1 {
                font-size: 2.25rem;
            }

            .overlay-text p {
                font-size: 1rem;
            }

            .section-content p {
                font-size: 1rem;
            }

            .function-list li {
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

            .section-content {
                padding: 1.5rem;
            }

            .section-header {
                padding: 1rem;
            }

            .section-header h2 {
                font-size: 1.25rem;
            }
        }
    </style>

    {{-- Hero Banner --}}
    <div class="hero-second-banner">
        <div class="overlay-text">
            <h1>Tugas Pokok dan Fungsi</h1>
            <p>Satuan Polisi Pamong Praja Kota Semarang</p>
        </div>
    </div>

    {{-- Konten Tupoksi --}}
    <div class="content-container">
        <div class="breadcrumb">
            <a href="/home">Ber anda</a> > <a href="/profile">Profil</a> > <span>Tupoksi</span>
        </div>

        <div class="profile-content">
            <h2 class="section-title">Tugas Pokok dan Fungsi</h2>

            <div class="tupoksi-container">
                <div class="tupoksi-section">
                    <div class="section-header">
                        <h2>Gambaran Pelayanan Satuan Polisi Pamong Praja Kota Semarang</h2>
                    </div>
                    <div class="section-content">
                        <p>Satuan Polisi Pamong Praja (Satpol PP) memiliki kewenangan untuk melakukan penertiban non-yustisial terhadap pelanggaran Perda, menindak pihak yang mengganggu ketertiban umum, melakukan penyelidikan atas dugaan pelanggaran, dan mengambil tindakan administratif terhadap pelanggaran Perda. Pelaksanaan tugas Satpol PP Kota Semarang berlandaskan pada Peraturan Pemerintah Nomor 16 Tahun 2018 mengenai struktur organisasi dan fungsi Satpol PP, serta diatur lebih lanjut dalam Peraturan Daerah Kota Semarang Nomor 14 Tahun 2016 dan Peraturan Walikota Semarang Nomor 67 Tahun 2016.</p>
                    </div>
                </div>

                <div class="tupoksi-section">
                    <div class="section-header">
                        <h2>Tugas dan Fungsi Satuan Polisi Pamong Praja Kota Semarang</h2>
                    </div>
                    <div class="section-content">
                        <h3>Tugas :</h3>
                        <p>Membantu Walikota dalam melaksanakan urusan pemerintahan bidang Ketenteraman dan ketertiban umum serta perlindungan masyarakat yang menjadi kewenangan daerah dan tugas pembantuan yang ditugaskan kepada daerah.</p>

                        <h3>Fungsi :</h3>
                        <ol class="function-list">
                            <li>Perumusan kebijakan Bidang Pembinaan Masyarakat, Bidang Ketertiban Umum dan Ketenteraman Masyarakat, Bidang Penegakan Perundang-Undangan Daerah, dan Bidang Satuan Perlindungan Masyarakat;</li>
                            <li>Perumusan rencana strategis sesuai dengan visi dan misi Walikota;</li>
                            <li>Pengkoordinasian tugas-tugas dalam rangka pelaksanaan program dan kegiatan Kesekretariatan, Bidang Pembinaan Masyarakat, Bidang Ketertiban Umum dan Ketenteraman Masyarakat, Bidang Penegakan Perundang-Undangan Daerah, dan Bidang Satuan Perlindungan Masyarakat;</li>
                            <li>Penyelenggaraan pembinaan kepada bawahan dalam lingkup tanggungjawabnya;</li>
                            <li>Penyelenggaraan penyusunan Sasaran Kerja Pegawai;</li>
                            <li>Penyelenggaraan kerjasama Bidang Pembinaan Masyarakat, Bidang Ketertiban Umum dan Ketenteraman Masyarakat, Bidang Penegakan Perundang-Undangan Daerah, dan Bidang Satuan Perlindungan Masyarakat;</li>
                            <li>Penyelenggaraan kesekretariatan Satpol PP;</li>
                            <li>Penyelenggaraan program dan kegiatan Bidang Pembinaan Masyarakat, Bidang Ketertiban Umum dan Ketenteraman Masyarakat, Bidang Penegakan Perundang-Undangan Daerah, dan Bidang Satuan Perlindungan Masyarakat;</li>
                            <li>Penyelenggaraan penilaian kinerja Pegawai;</li>
                            <li>Penyelenggaraan monitoring dan evaluasi program dan kegiatan Bidang Penegakan Perundang-Undangan Daerah, Bidang Pembinaan Masyarakat, Bidang Ketertiban Umum dan Ketenteraman Masyarakat, Bidang Penegakan Perundang-Undangan Daerah, dan Bidang Satuan Perlindungan Masyarakat;</li>
                            <li>Penyelenggaraan laporan pelaksanaan program dan kegiatan; dan</li>
                            <li>Pelaksanaan fungsi lain yang diberikan oleh Walikota terkait dengan tugas dan fungsinya.</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
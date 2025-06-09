<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Satpol PP Kota Semarang - @yield('title')</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Wix+Madefor+Display:wght@400..800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('style.css') }}">

</head>
<body>
<nav>
  <div class="nav-container">
    <div class="logo"></div>
    <ul class="nav-menu">
      <li class="menu-item"><a href="/home">Beranda</a></li>
      <li class="menu-item dropdown">
        <a href="#">Profil</a>
        <ul class="dropdown-content">
          <li><a href="/visi-misi">Visi & Misi</a>
          <li><a href="/geografis">Geografis & Penduduk</a></li>
          <li><a href="/struktur">Struktur Pemerintahan Satuan Polisi Pamong Praja</a></li>
          <li><a href="/tupoksi">Tupoksi</a></li>
          <li><a href="/pejabat">Profil Pejabat</a></li>
          <li><a href="/renstra">Renstra</a></li>
          <li><a href="/renja">Renja</a></li>
          <li><a href="/sdm">SDM</a></li>
          <li><a href="/lakip">LAKIP</a></li>
          </ul>
      </li>
      <li class="menu-item"><a href="/berita_terbaru">Berita</a></li>
      <li class="menu-item dropdown">
        <a href="#">Layanan</a>
        <ul class="dropdown-content">
          <li><a href="/sarana_prasarana">Sarana & Prasarana</a></li>
          <li><a href="/peraturan">Peraturan</a></li>
        </ul>
      </li>
      <li class="menu-item dropdown">
        <a href="#">PPID</a>
        <ul class="dropdown-content">
          <li><a href="https://ppid.semarangkota.go.id/regulasi/">Dasar Hukum</a></li>
          <li><a href="https://ppid.semarangkota.go.id/layanan-informasi/">Pelayanan Informasi</a></li>
          <li><a href="/perjanjian_kerja">Perjanjian Kerja</a></li>
          <li class="dropdown"> 
            <a href="/informasi">Informasi</a>
            <ul>
              <li><a href="https://ppid.semarangkota.go.id/daftar-informasi/daftar-informasi-setiap-saat-pemerintah-kota-semarang/">Informasi Setiap Saat</a></li>
              <li><a href="https://ppid.semarangkota.go.id/daftar-informasi/daftar-informasi-berkala-pemerintah-kota-semarang/">Informasi Berkala</a></li>
              <li><a href="https://ppid.semarangkota.go.id/daftar-informasi/daftar-informasi-serta-merta-pemerintah-kota-semarang/">Informasi Serta Merta</a></li>
              <li><a href="https://ppid.semarangkota.go.id/daftar-informasi/daftar-informasi-dikecualikan-pemerintah-kota-semarang/">Informasi Dikecualikan</a></li>
            </ul>
          </li> 
        </ul>
      </li>
      <li class="menu-item dropdown">
        <a href="#">SOP</a>
        <ul class="dropdown-content">
          <li class="dropdown">
            <a href="/bidang_ppud">Bidang PPUD</a>
            <ul>
              <li><a href="/penegakan_perda">Penegakkan Perda</a></li>
              <li><a href="/gelar_perkara">Gelar Perkara</a></li>
              <li><a href="/sidang_tempat">Sidang di Tempat</a></li>
              <li><a href="/hubungan_opd">Hubungan antara OPD</a></li>
              <li><a href="/pembinaan_ppns">Pembinaan PPNS</a></li>
              <li><a href="/sekretariat_ppns">Sekretariat PPNS</a></li>
            </ul>
          </li>
          <li><a href="/tibum">Bidang Tibum</a></li>
          <li><a href="/linmas">Bidang Linmas</a></li>
          <li><a href="/sekretariat">Bidang Sekretariat</a></li>
          <li><a href="/binmas">Bidang Binmas</a></li>
        </ul>
      </li>
      <li class="menu-item dropdown">
        <a href="#">Pajak Daerah</a>
        <ul class="dropdown-content">
          <li><a href="/wajib_pajak">Daftar Wajib Pajak</a></li>
          <li><a href="/jatuh_tempo">Jatuh Tempo Pajak</a></li>
        </ul>
      </li>
      <li class="menu-item"><a href="/kontak">Kontak</a></li>
    </ul>
  </div>
</nav>

<main>
  @yield('content')
</main>

<footer class="footer">
    <div class="footer-links-top">
      <a href="https://semarangkota.go.id" target=_blank class="footer-link-item">
        <img src="/images/semarangkota.png" alt="Semarang Kota">
      </a>
      <a href="https://smartcity.semarangkota.go.id" target=_blank class="footer-link-item">
        <img src="/images/semarangcity.png" alt="Smart City Semarang">
      </a>
      <a href="https://data.semarangkota.go.id" target=_blank class="footer-link-item">
        <img src="/images/satudata.jpeg" alt="Satu Data Semarang">
      </a>
      <a href="https://ppid.semarangkota.go.id" target=_blank class="footer-link-item">
        <img src="/images/ppid.png" alt="PPID Semarang">
      </a>
    </div>

    <div class="footer-container">
      <div class="footer-section">
        <h3>Bersama Kita Jaga Semarang</h3>
        <p>Mari sampaikan laporan tentang masalah di sekitarmu melalui saluran resmi Pemerintah Kota Semarang.</p>
        <a href="https://smg.city/laporsemar" target=_blank class="lapor-link">
          <img src="/images/lapor.jpg" alt="Lapor Semarang" class="lapor-image">
        </a>
      </div>

      <div class="footer-section">
        <h3>Hubungi Kami</h3>
        <div class="contact-info">
          <p><i class="fas fa-map-marker-alt"></i> Jl. Ronggolawe Barat No. 10 Semarang</p>
          <p><i class="fas fa-phone"></i> (024) 7604689</p>
          <p><i class="fas fa-envelope"></i><a href="mailto:satpolpp@semarangkota.go.id"> satpolpp@semarangkota.go.id</a></p>
        </div>
        <h3>Media Sosial</h3>
        <div class="social-icons">
          <a href="https://instagram.com/satpolpp.smg" target=_blank class="social-icon"><i class="fab fa-instagram"></i></a>
          <a href="https://x.com/satpolpp_smg" target=_blank class="social-icon"><i class="fab fa-twitter"></i></a>
          <a href="https://www.facebook.com/satpolppsemarangkota" target=_blank class="social-icon"><i class="fab fa-facebook-f"></i></a>
          <a href="https://youtube.com/@satpolppkotasemarang" target=_blank class="social-icon"><i class="fa-brands fa-youtube"></i></a>
        </div>
      </div>

      <div class="footer-section">
        <h3>Lokasi Kami</h3>
        <div class="map-container">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15841.023830715381!2d110.37032527965533!3d-6.979095841568416!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708b2d9507a13b%3A0x7c01d36e52be86a8!2sSatpol%20PP%20Kota%20Semarang!5e0!3m2!1sen!2sid!4v1746520725441!5m2!1sen!2sid" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
    </div>

    <div class="footer-bottom">
      <div class="footer-logo"></div>
      <p class="copyright">© 2025 Satuan Polisi Pamong Praja Kota Semarang. All Rights Reserved.</p>
    </div>
  </footer>

  <script>
  document.addEventListener('DOMContentLoaded', function() {
    function handleNavbarScroll() {
      const nav = document.querySelector('nav');
      if (window.scrollY > 50) {
        nav.classList.add('scrolled');
      } else {
        nav.classList.remove('scrolled');
      }
    }
    
    window.addEventListener('scroll', handleNavbarScroll);
    
    // Panggil fungsi sekali saat halaman dimuat
    handleNavbarScroll();

    // Tambahkan kode ini untuk menandai menu aktif
    const navLinks = document.querySelectorAll('nav .nav-menu a');
    const currentPath = window.location.pathname;

    navLinks.forEach(link => {
      // Periksa apakah href link sama dengan currentPath
      if (link.getAttribute('href') === currentPath) {
        link.classList.add('active');
        
        // Jika link adalah submenu, tandai juga menu parent-nya
        const parentMenuItem = link.closest('.dropdown-content');
        if (parentMenuItem) {
          const parentLink = parentMenuItem.parentElement.querySelector('a');
          if (parentLink) {
            parentLink.classList.add('active');
          }
        }
      }
    });
  });
</script>

</body>
</html>
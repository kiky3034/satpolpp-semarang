// Konfigurasi untuk banner slideshow
const banner = document.querySelector(".hero-banner");
const images = [
  "/images/banner1.jpg",
  "/images/banner2.jpg",
  "/images/banner3.jpg",
  "/images/banner4.jpg",
  "/images/banner5.jpg",
  "/images/banner6.jpg",
  "/images/banner7.jpg"
];

let current = 0;

// Fungsi untuk menampilkan gambar berdasarkan indeks
function showImage(index) {
  banner.style.backgroundImage = `url('${images[index]}')`;
}

// Fungsi untuk menampilkan gambar berikutnya
function nextImage() {
  current = (current + 1) % images.length;
  showImage(current);
}

// Fungsi untuk menampilkan gambar sebelumnya
function prevImage() {
  current = (current - 1 + images.length) % images.length;
  showImage(current);
}

// Tambahkan event listener ke tombol kontrol
document.getElementById("nextBtn").addEventListener("click", nextImage);
document.getElementById("prevBtn").addEventListener("click", prevImage);

// Mulai slideshow otomatis
setInterval(nextImage, 6000); // Ganti gambar tiap 6 detik
showImage(current); // Tampilkan gambar pertama


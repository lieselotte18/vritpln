Cara Instalasi
1. Persiapkan Database
 - Jalankan XAMPP dan aktifkan Apache serta MySQL.
 - Buka browser dan akses phpMyAdmin.
 - Buat database baru dengan nama companyprofile.
 - Impor file database:
  a. Klik tab Import.
  b. Pilih file SQL yang disediakan (companyprofile.sql).
  c. Klik Go untuk menyelesaikan impor.
2. Masukkan File ke htdocs
 - Salin folder project website ke direktori htdocs (contoh: C:/xampp/htdocs/nama-website).
 - Pastikan struktur folder sesuai dengan kebutuhan aplikasi.
3. Konfigurasi Website
 - Pastikan file konfigurasi database (biasanya config.php atau koneksi.php) sudah diatur dengan benar:
   $host = "localhost";
   $user = "root";
   $password = "";
   $database = "companyprofile";
 - Simpan perubahan.
   
Cara Mengakses Website
1. Akses Halaman Utama
 - Buka browser dan akses URL:
   http://localhost/nama-website/
 - Anda akan diarahkan ke halaman utama website.
2. Akses Halaman Admin
 - Untuk mengakses halaman admin, buka URL:
   http://localhost/nama-website/admin
 - Gunakan kredensial berikut untuk login:
   Username: admin@gmail.com
   Password: admin

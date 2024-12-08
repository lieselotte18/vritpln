<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Bootstrap offline -->
    <link rel="stylesheet" href="home/css/bootstrap.css">

    <!-- My Style -->
    <link rel="stylesheet" href="home/css/style.css">

    <!-- Responsive -->
    <link rel="stylesheet" href="home/css/Responsive.css">

    <!-- Fonts Google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <title>VR ITPLN</title>

    <!-- Icon -->
    <link rel="icon" href="Assets/Logo Icon.png" type="image/x-icon">
</head>

<body>

    <!-- Hero Section -->
    <section id="hero">

        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light position-fixed w-100">
            <div class="container">
                <a class="navbar-brand" href="#hero">
                    <img src="Assets/Logo Icon.png" alt="" width="45" class="d-inline-block align-text-top me-2">
                    VR ITPLN
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item mx-2">
                            <a class="nav-link" href="berhasil_login.php">BERANDA</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link active" aria-current="page" href="tentang_kami.php">TENTANG KAMI</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link" href="fasilitas.php">FASILITAS</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link" href="pendidikan.php">PENDIDIKAN</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link" href="virtual.php">VIRTUAL TOUR</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link" href="kontak_kami.php">KONTAK KAMI</a>
                        </li>
                    </ul>
                    <div>
                    <button class="button-secondary" onclick="location.href='logout.php'">Logout</button>
                    </div>
                </div>
            </div>
        </nav>

       <!-- Tentang Kami -->
<section id="aboutus">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h2>Tentang Kami</h2>
                <span class="sub-title">Mengenal Lebih Dekat VR ITPLN</span>
            </div>
        </div>

        <!-- Kotak dengan Gambar dan Tulisan -->
<div class="container">
    <div class="info-container">
        <div class="info-box">
            <img src="Assets/labvr.jpeg" alt="Lab VR ITPLN" class="info-img">
            <div class="info-content">
                <h3>Tentang Lab VR ITPLN</h3>
                <p>
                    Laboratorium Virtual Reality (VR) di Institut Teknologi PLN (ITPLN) adalah fasilitas canggih yang dirancang khusus untuk mendukung penelitian, pengembangan, dan inovasi di bidang teknologi Virtual Reality. Laboratorium ini menjadi wadah bagi mahasiswa dan dosen ITPLN untuk berkolaborasi, belajar, dan menciptakan solusi kreatif berbasis VR yang dapat diaplikasikan dalam berbagai sektor, mulai dari pendidikan, industri, hingga hiburan.
                </p>
            </div>
        </div>
    </div>
    </div>
        <!-- Visi dan Misi -->
        <div class="row mt-5 mt-4">
            <div class="col-md-6">
                <div class="card mb-4">
                    <div class="card-body">
                        <h3>Visi Kami</h3>
                        <p>
                        Menjadi laboratorium virtual reality yang unggul dalam bidang teknologi informasi dan komunikasi, yang dapat memberikan solusi inovatif untuk masalah-masalah dalam bidang telematika dan energi.
                        </p>
                        <div class="text-center mt-4">
                            <img src="Assets/misikami.jpeg" alt="Gambar Tambahan Misi Kami" class="misi-img">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-4">
                    <div class="card-body">
                        <h3>Misi Kami</h3>
                        <ul>
                            <li>Memberikan pelatihan dan pendidikan yang berkualitas tinggi kepada mahasiswa dan tenaga profesional dalam bidang teknologi informasi dan komunikasi, khususnya virtual reality.
                            </li>
                            <li>Menyediakan fasilitas yang lengkap dan canggih untuk melakukan riset dalam bidang virtual reality dan telematika.
                            </li>
                            <li>Menyediakan solusi inovatif yang dapat digunakan oleh industri dan masyarakat untuk mengatasi masalah dalam bidang telematika dan energi.
                            </li>
                            <li>Menyediakan solusi inovatif yang dapat digunakan oleh industri dan masyarakat untuk mengatasi masalah dalam bidang telematika dan energi.
                            </li>
                            <li>Menyediakan solusi inovatif yang dapat digunakan oleh industri dan masyarakat untuk mengatasi masalah dalam bidang telematika dan energi.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Tim Kami -->
    <!-- Tim Kami -->
    <div class="row mt-5" id="team-section">
    <div class="col-12 text-center">
        <h2>Tim Kami</h2>
        <span class="sub-title">Bersama Tim yang Hebat</span>
    </div>
    <div class="col-12 text-center">
        <!-- Ketua Tim di Tengah -->
        <div class="team-leader">
            <img src="Assets/team-leader.jpg" alt="Ketua Tim" class="team-img-leader">
            <h4 class="team-title">Yasni Djamain,S.Kom.,M.Kom</h4>
            <p class="team-role">Kepala Divisi</p>
        </div>
    </div>
    <div class="col-12">
        <!-- Anggota Tim Horizontal -->
        <div class="team-grid">
            <div class="team-member">
                <img src="Assets/M. Fajrin Wirattama Pohan_Koordinator Laboratorium.jpg" alt="Anggota Tim 1" class="team-img">
                <h4 class="team-title">Muhammad Fajrin Wiratamma</h4>
                <p class="team-role">Koordinator Laboratorium</p>
            </div>
            <div class="team-member">
                <img src="Assets/Renny Amelia Bantoto.jpg" alt="Anggota Tim 2" class="team-img">
                <h4 class="team-title">Renny Amelia Bantoto</h4>
                <p class="team-role">Sekretaris</p>
            </div>
            <div class="team-member">
                <img src="Assets/Fitra Wildania.jpg" alt="Anggota Tim 3" class="team-img">
                <h4 class="team-title">Fitra Wildania</h4>
                <p class="team-role">Bendahara</p>
            </div>
            <div class="team-member">
                <img src="Assets/Seanneta Apfia Aulia P..jpg" alt="Anggota Tim 4" class="team-img">
                <h4 class="team-title">Seanneta Apfia Aulia P.</h4>
                <p class="team-role">Digital Creative</p>
            </div>
            <div class="team-member">
                <img src="Assets/Ghina Siti Nadhifah.jpg" alt="Anggota Tim 5" class="team-img">
                <h4 class="team-title">Ghina Siti Nadhifah</h4>
                <p class="team-role">Inventaris</p>
            </div>
            <div class="team-member">
                <img src="Assets/Muamar Dwihanggoro.jpg" alt="Anggota Tim 6" class="team-img">
                <h4 class="team-title">Muamar Dwihanggoro</h4>
                <p class="team-role">Software</p>
            </div>
            <div class="team-member">
                <img src="Assets/Naufal Adli.jpg" alt="Anggota Tim 6" class="team-img">
                <h4 class="team-title">Naufal Adli</h4>
                <p class="team-role">Hardware</p>
            </div>
        </div>
    </div>
</div>
</section>
<!-- End Tentang Kami -->
        <!-- Footer -->
    <footer>
        <div class="container-fluid d-flex align-items-center">
            <div class="container">
                <div class="row py-5">
                    <div class="col-md-7 text-lg-start text-center">
                        <img src="Assets/Logo Icon.png" alt="">
                        <a href="#" class="text-decoration-none ms-3">VR ITPLN</a>
                    </div>
                    <div class="col-md-5 text-center text-lg-end ms-auto mt-lg-0 mt-2">
                        <a href="berhasil_login.php" class="me-2">Beranda</a>
                        <a href="tentang_kami.php" class="me-2">Tentang Kami</a>
                        <a href="fasilitas.php" class="me-2">Fasilitas</a>
                        <a href="pendidikan.php" class="me-2">Pendidikan</a>
                        <a href="virtual.php" class="me-2">Virtual Tour</a>
                        <a href="kontak_kami.php" class="me-2">Kontak Kami</a>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 text-center">
                        <p>
                            Copyright by AAAAAAAA All Right Reserved 2025
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end footer -->


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- My Script -->
    <script src="home/js/script.js"></script>
    
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
   
</body>

</html>

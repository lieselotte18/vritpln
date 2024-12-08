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
                            <a class="nav-link"  href="berhasil_login.php">BERANDA</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link" href="tentang_kami.php">TENTANG KAMI</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link active" aria-current="page" href="fasilitas.php">FASILITAS</a>
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

        <!-- Section Fasilitas -->
    <section id="fasilitas">
    <div class="container">
        <h2 class="text-center mb-5">Fasilitas</h2>
        <div class="row gy-4">
            <!-- Fasilitas 1 -->
            <div class="col-md-6 col-lg-4">
                <div class="card shadow-sm">
                    <img src="Assets/fasilitas1.jpeg" class="card-img-top" alt="Fasilitas 1">
                    <div class="card-body">
                        <h5 class="card-title">Oculus (Meta Quest 2)</h5>
                        <p class="card-text">Headset VR canggih untuk eksplorasi dunia virtual dan simulasi interaktif. Cocok untuk pendidikan dan pelatihan berbasis teknologi.
                        </p>
                    </div>
                </div>
            </div>
            <!-- Fasilitas 2 -->
            <div class="col-md-6 col-lg-4">
                <div class="card shadow-sm">
                    <img src="Assets/fasilitas2.jpeg" class="card-img-top" alt="Fasilitas 2">
                    <div class="card-body">
                        <h5 class="card-title">Printer 3D</h5>
                        <p class="card-text">Perangkat printer 3D modern yang memungkinkan pembuatan objek fisik dari model digital.</p>
                    </div>
                </div>
            </div>
            <!-- Fasilitas 3 -->
            <div class="col-md-6 col-lg-4">
                <div class="card shadow-sm">
                    <img src="Assets/fasilitas3.jpeg" class="card-img-top" alt="Fasilitas 3">
                    <div class="card-body">
                        <h5 class="card-title">PC</h5>
                        <p class="card-text">Komputer desktop berkinerja tinggi yang dirancang untuk kebutuhan praktikum mahasiswa.</p>
                    </div>
                </div>
            </div>
            <!-- Fasilitas 4 -->
            <div class="col-md-6 col-lg-4">
                <div class="card shadow-sm">
                    <img src="Assets/fasilitas4.jpeg" class="card-img-top" alt="Fasilitas 4">
                    <div class="card-body">
                        <h5 class="card-title">Newline Smart Board TV</h5>
                        <p class="card-text">Papan pintar interaktif dengan layar besar dan fitur touchscreen, ideal untuk presentasi dan pengajaran.</p>
                    </div>
                </div>
            </div>
            <!-- Fasilitas 5 -->
            <div class="col-md-6 col-lg-4">
                <div class="card shadow-sm">
                    <img src="Assets/fasilitas5.jpg" class="card-img-top" alt="Fasilitas 5">
                    <div class="card-body">
                        <h5 class="card-title">360-Degree Camera</h5>
                        <p class="card-text">Kamera untuk konten immersive, seperti video 360 derajat, menghadirkan pengalaman yang lebih nyata.</p>
                    </div>
                </div>
            </div>
            <!-- Fasilitas 6 -->
            <div class="col-md-6 col-lg-4">
                <div class="card shadow-sm">
                    <img src="Assets/fasilitas6.jpg" class="card-img-top" alt="Fasilitas 6">
                    <div class="card-body">
                        <h5 class="card-title">VR Ready Laptop</h5>
                        <p class="card-text">Laptop portabel dengan spesifikasi tinggi untuk mendukung pengembangan dan demonstrasi VR di luar lab.</p>
                    </div>
                </div>
            </div>
            <!-- Fasilitas 7 -->
            <div class="col-md-6 col-lg-4">
                <div class="card shadow-sm">
                    <img src="Assets/fasilitas7.jpg" class="card-img-top" alt="Fasilitas 7">
                    <div class="card-body">
                        <h5 class="card-title">VR Treadmill</h5>
                        <p class="card-text">Alat untuk meningkatkan imersi dalam pengalaman VR, memungkinkan pengguna bergerak secara bebas dalam ruang virtual.</p>
                    </div>
                </div>
            </div>
            <!-- Fasilitas 8 -->
            <div class="col-md-6 col-lg-4">
                <div class="card shadow-sm">
                    <img src="Assets/fasilitas8.webp" class="card-img-top" alt="Fasilitas 7">
                    <div class="card-body">
                        <h5 class="card-title">Green Screen Studio</h5>
                        <p class="card-text">Area layar hijau (green screen) digunakan untuk pembuatan konten video atau simulasi VR/AR.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

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
<script src="js/script.js"></script>

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>

<!-- Option 2: Separate Popper and Bootstrap JS -->

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>

</html>

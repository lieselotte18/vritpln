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
<nav class="navbar navbar-expand-lg bg-transparent navbar-light position-fixed w-100">
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
                    <a class="nav-link active" aria-current="page" href="berhasil_login.php">BERANDA</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link" href="tentang_kami.php">TENTANG KAMI</a>
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


        <!-- Tagline -->
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-lg-6 col-sm-12 hero-tagline my-auto">
                    <h1>Laboratorium Virtual Reality ITPLN
                    </h1>
                    <p>
                        <span class="fw-bold">Laboratorium Virtual Reality (VR) Institut Teknologi PLN (ITPLN) </span> merupakan pusat 
                        penelitian dan pengembangan teknologi VR yang bertujuan untuk mendukung
                        inovasi di berbagai bidang, termasuk pendidikan, industri, dan riset teknologi.
                        Kami menyediakan fasilitas mutakhir untuk para mahasiswa, dosen, dan peneliti
                        guna menciptakan solusi VR yang relevan dengan perkembangan zaman.
                    </p>
                    <a href="virtual.php">
                    <button class="button-lg-secondary me-4">Virtual Tour</button>
                    </a>
                    <a href="virtual.php">
                        <img src="Assets/Right Arrow.png" alt="">
                    </a>
                </div>
            </div>
            <img src="Assets/beranda.png" class="image-hero position-absolute end-0 bottom-0" alt="">
            <img src="Assets/Accsent 1.png" alt="" class="h-100 position-absolute top-0 start-0 accsent-img">
        </div>
    </section>
    <!-- End navbar -->

<!-- Mengapa virtual reality -->
<section id="about">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h2>Mengapa Virtual Reality</h2>
                <span class="sub-title">Menghubungkan Masa Depan Melalui Teknologi Virtual</span>
            </div>
        </div>

        <!-- Row pertama dengan 3 kotak -->
        <div class="row mt-5">
            <div class="col-md-4 text-center">
                <div class="card-about">
                    <div class="circle-icon position-relative mx-auto">
                        <img src="Assets/1.png"
                            class="circle-test position-absolute top-50 start-50 translate-middle" alt="">
                    </div>
                    <h3 class="mt-4">Pengalaman Immersive</h3>
                    <p class="mt-3">memberikan pengalaman yang mendalam dan memungkinkan pengguna merasakan dunia virtual seolah-olah nyata.</p>
                </div>
            </div>

            <div class="col-md-4 text-center">
                <div class="card-about">
                    <div class="circle-icon position-relative mx-auto">
                        <img src="Assets/2.png"
                            class="circle-test position-absolute top-50 start-50 translate-middle" alt="">
                    </div>
                    <h3 class="mt-4">Pelatihan dan Simulasi VR</h3>
                    <p class="mt-3">digunakan untuk pelatihan profesional di berbagai bidang seperti medis, militer, dan penerbangan tanpa risiko dunia nyata.</p>
                </div>
            </div>

            <div class="col-md-4 text-center">
                <div class="card-about">
                    <div class="circle-icon position-relative mx-auto">
                        <img src="Assets/3.png"
                            class="circle-test position-absolute top-50 start-50 translate-middle" alt="">
                    </div>
                    <h3 class="mt-4">Revolusi Pendidikan VR</h3>
                    <p class="mt-3">memungkinkan pembelajaran interaktif melalui simulasi, menjadikan pendidikan lebih menarik dan efektif.</p>
                </div>
            </div>
        </div>

        <!-- Row kedua dengan 3 kotak -->
        <div class="row mt-5">
            <div class="col-md-4 text-center">
                <div class="card-about">
                    <div class="circle-icon position-relative mx-auto">
                        <img src="Assets/4.png"
                            class="circle-test position-absolute top-50 start-50 translate-middle" alt="">
                    </div>
                    <h3 class="mt-4">Penggunaan di Bisnis</h3>
                    <p class="mt-3">Dalam bisnis, VR membantu dalam desain produk, pemasaran interaktif, dan kerja jarak jauh dengan lingkungan virtual.</p>
                </div>
            </div>

            <div class="col-md-4 text-center">
                <div class="card-about">
                    <div class="circle-icon position-relative mx-auto">
                        <img src="Assets/5.png"
                            class="circle-test position-absolute top-50 start-50 translate-middle" alt="">
                    </div>
                    <h3 class="mt-4">Dukungan Kesehatan Mental</h3>
                    <p class="mt-3">VR digunakan dalam terapi psikologis untuk mengatasi fobia, PTSD, dan memberikan relaksasi.</p>
                </div>
            </div>

            <div class="col-md-4 text-center">
                <div class="card-about">
                    <div class="circle-icon position-relative mx-auto">
                        <img src="Assets/6.png"
                            class="circle-test position-absolute top-50 start-50 translate-middle" alt="">
                    </div>
                    <h3 class="mt-4">Peningkatan Hiburan</h3>
                    <p class="mt-3"> Teknologi VR mengubah industri hiburan dengan pengalaman interaktif dalam game, film, dan konser.</p>
                </div>
            </div>
        </div>

    </div>
    </section>
    <!-- Mengapa virtual reality -->

    <!-- Fasilitas -->
    <section id="fitur" class="overflow-hidden">
    <div class="container">
        <div class="row d-flex justify-content-between">
            <div class="col-md-9 me-auto">
                <h2 class="text-md-start text-center">Fasilitas</h2>
            </div>
            <div class="col-md-3 text-end">
                <button class="button-fitur" onclick="window.location.href='fasilitas.php'">
                    Lihat Semua...
                    <img src="Assets/Right Arrow.png" class="ms-3" width="8" alt="">
                </button>
            </div>
        </div>
    </div>

    <div class="container mt-5 position-relative">
        <div class="slider-wrapper position-relative overflow-hidden">
            <div class="slider-track d-flex">
                <!-- Images -->
                <div class="card-fitur mx-3" data-title="Oculus Meta VR">
    <img src="Assets/oculusmeta.jpeg" alt="VR 1">
            </div>
            <div class="card-fitur mx-3" data-title="3D Printer">
                <img src="Assets/3dprinter.jpeg" alt="VR 2">
            </div>
            <div class="card-fitur mx-3" data-title="PC VR">
                <img src="Assets/pcvr.jpeg" alt="VR 3">
            </div>
            <div class="card-fitur mx-3" data-title="Board VR">
                <img src="Assets/boardvr.jpeg" alt="VR 4">
            </div>
            <div class="card-fitur mx-3" data-title="360 Camera">
                <img src="Assets/360camera.jpeg" alt="VR 5">
            </div>
            <div class="card-fitur mx-3" data-title="Treadmill VR">
                <img src="Assets/tredmilvr.jpeg" alt="VR 6">
            </div>
            <div class="card-fitur mx-3" data-title="Laptop VR">
                <img src="Assets/laptopvr.jpeg" alt="VR 6">
            </div>
            </div>
        </div>
        <!-- Navigation Buttons -->
        <button class="button-arrow-left position-absolute start-0 top-50 translate-middle-y" id="prevBtn">
            <img src="Assets/Left Arrow lg.png" alt="">
        </button>
        <button class="button-arrow-right position-absolute end-0 top-50 translate-middle-y" id="nextBtn">
            <img src="Assets/Right Arrow lg.png" alt="">
        </button>
    </div>
</section>
    <!-- fasilitas -->

<!-- Visi dan Misi -->
<section id="visi-misi">
    <div class="container">
        <div class="row mb-4">
            <div class="col-md-12 text-center">
                <h2>Visi & Misi</h2>
            </div>
        </div>

        <div class="row d-flex justify-content-evenly">
            <div class="col-lg-6 mb-4">
                <div class="card p-1 position-relative" style="width: 100%;">
                    <img src="Assets/visii.jpeg" class="card-img-top" alt="Visi">
                    <div class="card-body">
                        <h4>Visi</h4>
                        <p>Menjadi laboratorium virtual reality yang unggul dalam bidang teknologi informasi dan komunikasi, yang dapat memberikan solusi inovatif untuk masalah-masalah dalam bidang telematika dan energi.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-4">
                <div class="card p-1 position-relative" style="width: 100%;">
                    <img src="Assets/misii.jpeg" class="card-img-top" alt="Misi">
                    <div class="card-body">
                        <h4>Misi</h4>
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
    </div>
    </section>
<!-- end Visi dan Misi -->
    
   <!-- Section Promo VR -->
<section id="promo-vr" class="d-flex align-items-center justify-content-center">
    <div class="container text-center">
        <img src="Assets/vr.png.png" alt="VR Lab ITPLN" class="img-fluid rounded-image">
        <p class="mt-4">Bergabunglah dengan kami untuk mengeksplorasi teknologi yang dapat mengubah cara kita belajar, bekerja, dan berinteraksi dengan dunia digital. Temukan peluang riset, pelatihan, dan proyek-proyek menarik lainnya di Laboratorium VR ITPLN!</p>
    </div>
</section>

    <!-- Contact -->
    <section id="kontak" style="background-image: url('Assets/kontak-img.png'); ">
        <div class=" container-fluid overlay h-100">
            <div class="container">
                <div class="row ">
                    <div class="col-md-6 mb-5 lh-lg">
                        <h3>Butuh Konsultasi..? Silahkan Kontak Kami, Kami Siap Membantu</h3>
                        <div class="kontak">
                            <h6 class="mt-4">Kontak</h6>

                            <div class="alamat">
                                <img src="Assets/Alamat Icon.png" alt="">
                                <a href="#" class="d-inline-block w-lg-50 align-middle lh-sm">Jl. Lkr. Luar Barat Lantai 5, RT.1/RW.1, Duri Kosambi, 
                                    Cengkareng, Jakarta Barat
                                </a>
                            </div>

                            <div class="whatsapp">
                                <img src="Assets/Whatsapp icon.png" alt="">
                                <a href="#">000000000</a>
                            </div>

                            <div class="email">
                                <img src="Assets/Email Icon.png" alt="">
                                <a href="#">labvritpln@gmail.com</a>
                            </div>

                            <h6 class="mt-4">Social Media</h6>
                            <a href="#"><img src="Assets/Facebook Icon.png" alt=""> </a>
                            <a href="#"><img src="Assets/Twiter Icon.png" alt=""></a>
                            <a href=""><img src="Assets/Instagram Iicon.png" alt=""></a>
                            <a href="#">labvritpln</a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card-contact w-100">
                            <form>
                                <div class="form-floating mb-4">
                                    <input type="email" class="form-control" id="floatingInput"
                                        placeholder="name@example.com">
                                    <label for="floatingInput" class="d-flex align-items-center">Nama Anda</label>
                                </div>
                                <div class="form-floating mb-4">
                                    <input type="email" class="form-control" id="floatingInput"
                                        placeholder="name@example.com">
                                    <label for="floatingInput" class="d-flex align-items-center">Ada
                                        Pertanyaan..?</label>
                                </div>

                                <button type="submit" class="button-kontak">Kirim</button>
                            </form>
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
    <script src="home/js/script.js"></script>
    <script src="home/js/slider.js"></script>
    
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
   
</body>

</html>

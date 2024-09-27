<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thunder Riders Club</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
    body {
        background-color: #999993;
    }

    /* Header */
    .header {
        background-color: #a8a7a7;
        padding-top: 60px;
        text-align: center;
        padding: 20px;
    }

    .header h1 {
        color: #4d4b4b;
        font-size: 3em;
    }

    /* Navigation Bar */
    .navbar-custom {
        background-color: #d8d7d6;
        position: fixed;
        top: 0;
        width: 100%;
        z-index: 1000;
        height: 60px;
    }

    .navbar-custom a::after {
        color: #191717;
        font-weight: bold;
        content: '';
        display: block;
        padding-bottom: 0.5rem;
        border-bottom: 0.1rem solid;
        transform: scaleX();
        transition: 0.2s linear;
    }
    .navbar-custom a:hover::after{
        transform: scaleX(0.5);
    }

    /* Sidebar */
    .sidebar {
        width: 200px;
        background-color: #dedbdb;
        position: fixed;
        top: 0;
        left: 0;
        height: 100%;
        padding-top: 60px;
    }

    .sidebar a {
        display: block;
        color: #000;
        padding: 15px;
        text-decoration: none;
        font-size: 16px;
    }

    .sidebar a:hover {
        background-color: #ccc;
    }

    /* Content */
    .content {
        flex-direction: column; /* Susun elemen secara vertikal di layar kecil */
        align-items: center;
     
    }
    #home {
        max-width: 100%;
        text-align: justify;
    }
    img {
        max-width: 100%;
    }

    #profile {
        max-width: 70%;
        text-align: justify;
        font-style: unset
    }
    #about-us {
        max-width: 70%;
        text-align: justify;
    }
    #visi-misi {
        max-width: 70%;
        text-align: justify;
    }
    #produk-kami {
        max-width: 70%;
        text-align: justify;
    }
    #kontak-kami {
        max-width: 70%;
        text-align: justify;
    }
    </style>

</head>

<body>

    <!-- Header -->
    <div class="header">
        <img src="/img/logo.png" alt="Logo" style="width: 100px;">
        <h1> Thunder Riders Club </h1>
    </div>

    <!-- Navbar -->
   
    <nav class="navbar navbar-expand-lg navbar-custom">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item mx-3"><a class="nav-link" href="#">Home</a></li>
                    <li class="nav-item mx-3"><a class="nav-link" href="#profile">Profile</a></li>
                    <li class="nav-item mx-3"><a class="nav-link" href="#about-us">About Us</a></li>
                    <li class="nav-item mx-3"><a class="nav-link" href="#visi-misi">Visi dan Misi</a></li>
                    <li class="nav-item mx-3"><a class="nav-link" href="#produk-kami">Produk Kami</a></li>
                    <li class="nav-item mx-3"><a class="nav-link" href="#kontak-kami">Kontak Kami</a></li>
                    
                </ul>
            </div>
        </div>
    </nav>
    

    <!-- Sidebar -->
    <div class="sidebar">
        <a href="{{ route('artikel.index') }}">Artikel</a>
        <a href="{{ route('event.event') }}">Event</a>
        <a href="{{ route('galery.index') }}">Galery Foto</a>
        <a href="{{ route('klien.index') }}">Klien Kami</a>
        <a href="#">Login</a>
        <ul style="list-style-type: none;">
            <li><a href="login">Sign in</a></li>
            <li><a href="register">Sign up</a></li>
            <li><a href="logout">Logout</a></li>
        </ul>
    </div>

    <!-- Content -->
    <div class="content" style="width: 100%; display: flex; justify-content: space-between; align-items: center;">
        <img src="/img/profile.jpg" alt="Gambar Club Motor" class="img-fluid" style="display: block; max-width: 50%; height: auto;">
        <div id="home" style="max-width: 45%; word-wrap: break-word; overflow-wrap: break-word;">
            <h2></h2>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptas nostrum sit sequi unde repudiandae numquam minus tenetur facilis voluptatem? Maxime error officiis atque debitis modi? Provident similique culpa animi fugiat..</p>
        </div>
    </div>


<!-- Profile Section -->
<section id="profile" class="container mt-5 p-4 bg-light shadow-sm rounded">
    <h2 class="text-center text-uppercase mb-4">Profile Perusahaan</h2>
    <p class="lead text-justify">
        <strong> Riders Club </strong> komunitas motor yang telah berpengalaman selama lebih dari 10 tahun. Kami memiliki jaringan global, mengadakan event berskala internasional, dan berkomitmen untuk menjaga persaudaraan antar rider.
        <p class="text-justify">
            Menjadi anggota Thunder Riders Club berarti bergabung dengan komunitas yang penuh semangat dan rasa persaudaraan. Kami menyambut semua pengendara, dari pemula hingga berpengalaman, tanpa memandang jenis motor yang digunakan. Dengan bergabung, Anda akan mendapatkan akses ke berbagai kegiatan eksklusif, pelatihan, dan kesempatan untuk berjejaring dengan rider lainnya.
        </p>
       <p class="text-justify">
        Dengan bergabung bersama kami, Anda akan mendapatkan akses eksklusif ke berbagai kegiatan menarik, mulai dari event touring, gathering, hingga kompetisi. Kami juga menyediakan pelatihan-pelatihan yang dirancang untuk meningkatkan kemampuan berkendara, serta kesempatan untuk berjejaring dengan rider lainnya dari berbagai belahan dunia. Event-event yang kami adakan tak hanya menjadi ajang untuk berkendara, tetapi juga sebagai ruang untuk saling berbagi pengalaman, menjalin hubungan baru, dan memperkuat solidaritas antar rider.
       </p>
        
    </p>
    <h3>Pengalaman Perusahaan</h3>
    <p>
        Kami telah mengadakan lebih dari 50 event besar dan bergabung dalam berbagai kerjasama dengan brand terkenal dunia.
    </p>
    <h3>Kelebihan Kami</h3>
    <ul>
        <li>Jaringan internasional yang luas</li>
        <li>Event skala besar dengan partisipasi ribuan orang</li>
        <li>Kerjasama dengan brand-brand terkenal</li>
    </ul>
</section>
<!-- About Us Section -->
<section id="about-us" class="container mt-5">
    <h2>About Us</h2>
    <p>
        Thunder Riders Club didirikan pada tahun 2010 oleh sekelompok penggemar motor yang memiliki visi untuk menciptakan persaudaraan di antara pengendara motor di seluruh dunia. Kami percaya bahwa berkendara bukan hanya sekadar hobi, tetapi juga sebuah gaya hidup yang mempererat hubungan antar sesama rider. Dengan lebih dari 10.000 anggota aktif di berbagai negara, kami berkomitmen untuk menjaga semangat kebersamaan dan saling menghormati.
        Thunder Riders Club secara rutin menyelenggarakan berbagai kegiatan, mulai dari ride out ke destinasi menarik, pelatihan keselamatan berkendara, hingga acara sosial dan amal. Kami percaya bahwa setiap perjalanan membawa pelajaran dan pengalaman baru yang dapat memperkaya hidup setiap anggota. Kami juga berpartisipasi dalam berbagai event otomotif dan festival motor, menjalin hubungan dengan klub dan komunitas lain di seluruh dunia.
    </p>
</section>

<!-- Visi dan Misi Section -->
<section id="visi-misi" class="container mt-5">
    <h2>Visi dan Misi</h2>
    <h3>Visi</h3>
    <p>
        Menjadi komunitas motor terdepan yang mempersatukan pengendara dari seluruh dunia.
    </p>
    <h3>Misi</h3>
    <ul>
        <li>Menyelenggarakan event global secara berkala</li>
        <li>Memperluas jaringan komunitas dengan lebih banyak chapter di seluruh dunia</li>
        <li>Menyediakan platform bagi rider untuk berbagi pengalaman dan ilmu</li>
    </ul>
</section>

<!-- Produk Kami Section -->
<section id="produk-kami" class="container mt-5">
    <h2>Produk Kami</h2>
    <p>
        Di Thunder Riders Club, kami tidak hanya berfokus pada kebersamaan dan persaudaraan antar pengendara, tetapi juga menawarkan berbagai produk berkualitas yang dirancang khusus untuk memenuhi kebutuhan rider. Setiap produk yang kami tawarkan mencerminkan semangat berkendara dan gaya hidup motoris. Berikut adalah beberapa kategori produk unggulan kami:
    </p>
    <ul>
        <li>Merchandise eksklusif untuk anggota</li>
        <li>Event tahunan dengan partisipasi internasional</li>
        <li>Perjalanan touring dengan rute-rute eksotis</li>
    </ul>
</section>

<!-- Kontak Kami Section -->
<section id="kontak-kami" class="container mt-5">
    <h2>Kontak Kami</h2>
    <p>Jika Anda ingin bergabung atau memiliki pertanyaan, silakan hubungi kami melalui:</p>
    <ul>
        <li>Email: contact@thunderriders.com</li>
        <li>Telepon: +62 123 4567 890</li>
        <li>Alamat: Jl. Raya Motor, No. 123, Jakarta</li>
    </ul>
</section>




<!-- Sidebar -->
{{-- artikel --}}
</body>

</html>
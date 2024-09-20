@extends('layout.layout')

@section('title', 'Home')

@section('content')
<!-- Header -->
<header class="py-5 bg-dark text-white">
    <div class="container text-center">
        <h1>IRFAN GANENDRA</h1>
        <!-- Optional profile photo -->
        <img src="assets/y.jpeg" alt="Profile Photo" class="rounded-circle my-3" width="150" height="150">
    </div>
</header>

<!-- Hero Section -->
<section class="py-5" style="background-image: url('https://www.wallpapertip.com/wmimgs/83-838296_web-designer-professional-website-background-images.jpg'); background-size: cover; background-position: center;">
    <div class="container text-center text-white">
        <h2 class="fw-bolder">Siswa SMK Jurusan Komputer</h2>
        <p class="lead">Teknologi dan Rekayasa Perangkat Lunak</p>
        <a href="/about" class="btn btn-primary mt-3">Pelajari Lebih Lanjut</a>
        <a href="/contact" class="btn btn-secondary mt-3">Hubungi Saya</a>
    </div>
</section>

<!-- About Me Section -->
<section class="py-5">
    <div class="container text-center">
        <h3>About Me</h3>
        <p class="lead">Saya adalah siswa kelas 12 Jurusan Pemrograman dan Perangkat Lunak , tertarik dengan teknologi dan pengembangan perangkat lunak.</p>
        <a href="/about" class="btn btn-link">Learn More</a>
    </div>
</section>

<!-- Featured Projects Section -->
<section class="py-5">
    <div class="container">
        <h2 class="text-center mb-4">Proyek Unggulan</h2>
        <div class="row">
            <div class="col-lg-4 mb-4">
                <div class="card">
                    <img src="assets/phome1.jpeg" class="card-img-top" alt="Project 1">
                    <div class="card-body">
                        <h5 class="card-title">Project 1</h5>
                        <p class="card-text">Game Berbasis Website.</p>
                        <a href="/project1" class="btn btn-primary">Lihat Detail</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card">
                    <img src="assets/phome2.jpeg" class="card-img-top" alt="Project 2">
                    <div class="card-body">
                        <h5 class="card-title">Project 2</h5>
                        <p class="card-text">Website CV.</p>
                        <a href="/project2" class="btn btn-primary">Lihat Detail</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card">
                    <img src="assets/phome3.jpeg" class="card-img-top" alt="Project 3">
                    <div class="card-body">
                        <h5 class="card-title">Project 3</h5>
                        <p class="card-text">Website Artikel.</p>
                        <a href="/project3" class="btn btn-primary">Lihat Detail</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="py-4 bg-dark text-white">
    <div class="container text-center">
        <p>Copyright &copy; Web Profile Personal</p>
        <div>
            <a href="https://www.tiktok.com/@panjoyy?_t=8pspQLrtwoC&_r=1" class="text-white mx-2">Tiktok</a>
            <a href="https://www.instagram.com/navry_24?igsh=MTU0cWVpbGhseXRvdQ==" class="text-white mx-2">Instagram</a>
        </div>
        <div class="mt-3">
            <a href="/about" class="text-white">About Me</a> |
            <a href="/project" class="text-white">Projects</a> |
            <a href="/contact" class="text-white">Contact</a>
        </div>
    </div>
</footer>
@endsection

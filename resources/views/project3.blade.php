@extends('layout.layout')

@section('title', 'Project 3')

@section('content')
<header class="py-5 bg-secondary text-white">
    <div class="container text-center">
        <h1>Project 3 - Website Artikel</h1>
        <p class="lead">A Web application for Artikel</p>
    </div>
</header>

<section class="py-5">
    <div class="container">
        <h2>Ringkasan</h2>
        <p>Proyek ini adalah situs web artikel tentang sebuah artikel yang dibuat untuk memberikan informasi. Situs ini mencakup bagian-bagian seperti Tentang Saya, Artikel, dan Kontak.</p>
        
        <h3>Fitur Utama</h3>
        <ul>
            <li>Desain responsif untuk mobile dan desktop</li>
            <li>Artikel bisa dilihat lebih detail</li>
            <li>Formulir kontak dengan integrasi email</li>
        </ul>
        
        <h3>Technology Stack</h3>
        <ul>
            <li>Pemrograman: HTML, CSS, Bootstrap</li>
        </ul>

        <h3>Gallery</h3>
        <div class="row">
            <div class="col-lg-4 mb-4">
                <img src="assets/galeri1p3.png" class="img-fluid" alt="Project Image 1">
                <a href="https://ivangand.github.io/artikelku/index.html" class="btn btn-primary mt-3">Kunjungi Website</a>
            </div>
            <div class="col-lg-4 mb-4">
                <img src="assets/galeri2p3.png" class="img-fluid" alt="Project Image 2">
            </div>
            <div class="col-lg-4 mb-4">
                <img src="assets/galeri3p3.png" class="img-fluid" alt="Project Image 3">
            </div>
        </div>
    </div>
</section>
@endsection

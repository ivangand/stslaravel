@extends('layout.layout')

@section('title', 'Project 2')

@section('content')
<header class="py-5 bg-secondary text-white">
    <div class="container text-center">
        <h1>Project 2 - Website Data Diri</h1>
        <p class="lead">A web application for CV</p>
    </div>
</header>

<section class="py-5">
    <div class="container">
        <h2>Ringakasan</h2>
        <p>Proyek ini adalah sebuah website dengan menampilkan data data CV tentang diri saya.</p>

        <h3>Fitur Utama</h3>
        <ul>
            <li>Halaman Data</li>
            <li>Bisa diakses di mobile</li>
        </ul>

        <h3>Technology Stack</h3>
        <ul>
            <li>Pemrograman: HTML, CSS, Bootstrap</li>
        </ul>

        <h3>Gallery</h3>
        <div class="row">
            <div class="col-lg-4 mb-4">
                <img src="assets/galeri1p2.png" class="img-fluid" alt="Project Image 1">
                <a href="https://ivangand.github.io/CV_irfan/" class="btn btn-primary mt-3">Kunjungi Website</a>
            </div>
            <div class="col-lg-4 mb-4">
                <img src="assets/galeri2p2.png" class="img-fluid" alt="Project Image 2">
            </div>
        </div>
    </div>
</section>
@endsection
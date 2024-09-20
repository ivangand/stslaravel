@extends('layout.layout')

@section('title', 'Project 1')

@section('content')
<header class="py-5 bg-secondary text-white">
    <div class="container text-center">
        <h1>Project 1 Game Berbasis Website</h1>
        <p class="lead">A Web application for Game</p>
    </div>
</header>

<section class="py-5">
    <div class="container">
        <h2>Ringkasan</h2>
        <p>Proyek ini merupakan website game yang dimainkan oleh 2 orang dengan tombol yang harus ditekan secara bersamaan. Game web merupakan game batu, gunting, dan kertas yang didapatkan secara random.</p>

        <h3>Fitur Utama</h3>
        <ul>
            <li>Game dengan multiplayer</li>
            <li>Mendapatkan suit secara random</li>
            <li>Dapat di mainkan di mobile</li>
        </ul>

        <h3>Technology Stack</h3>
        <ul>
            <li>Pemrograman: HTML, CSS, JavaScript, Function</li>
        </ul>

        <h3>Gallery</h3>
        <div class="row">
            <div class="col-lg-4 mb-4">
                <img src="assets/phome1.jpeg" class="img-fluid" alt="Project Image 1">
                <a href="https://ivangand.github.io/game_suit/game.html" class="btn btn-primary mt-3">Kunjungi Website</a>
            </div>
        </div>
</section>
@endsection
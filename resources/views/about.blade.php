@extends('layout.layout')

@section('title', 'About')

@section('content')
<!-- Header -->
<header class="py-5 bg-dark text-white">
    <div class="container text-center">
        <h1>About</h1>
    </div>
</header>

<!-- Short Biography Section -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h3>Biografi Singkat</h3>
                <p>Saya adalah siswa Jurusan Komputer Rekayasa dan Perangkat Lunak di SMK Bakti Nusantara 666. Saya memiliki ketertarikan besar dalam bidang teknologi, khususnya pemrograman dan perangkat lunak.</p>
                <p>Saat ini saya aktif mengikuti berbagai pelatihan dan proyek yang memperkuat kemampuan saya di bidang Pemrograman dan perangkat lunak serta membuat sebuah game framework.</p>
            </div>
            <div class="col-md-6 text-center">
                <!-- Additional Photo or Related Image -->
                <img src="assets/o.jpeg" alt="Foto Diri" class="img-fluid rounded">
            </div>
        </div>
    </div>
</section>

<!-- Skills and Expertise Section -->
<section class="py-5 bg-light">
    <div class="container">
        <h3>Keterampilan dan Keahlian</h3>
        <ul>
            <li>Pemrograman: HTML, JavaScript, PHP</li>
            <li>Game Development: Unity, Godot</li>
            <li>Editor Application: Adobe Photoshop, Capcut, Kinemaster </li>
            <li>Proyek dan Pelatihan Tambahan: Membuat Game Berbasis Website, Membuat Website Penjualan</li>
        </ul>
    </div>
</section>

<!-- Goals and Aspirations Section -->
<section class="py-5">
    <div class="container">
        <h3>Tujuan dan Aspirasi</h3>
        <p>Saya bercita-cita menjadi seorang profesional di bidang teknologi, khususnya dalam pengembangan perangkat lunak dan game development. Di masa depan, saya berharap dapat terus belajar dan berkembang untuk berkontribusi dalam dunia teknologi yang terus berkembang.</p>
    </div>
</section>

<!-- Footer -->
<footer class="py-4 bg-dark text-white">
    <div class="container text-center">
        <p>Copyright &copy; Web Profile Website</p>
        <div>
            <a href="https://www.tiktok.com/@panjoyy?_t=8pspQLrtwoC&_r=1" class="text-white mx-2">Tiktok</a>
            <a href="https://www.instagram.com/navry_24?igsh=MTU0cWVpbGhseXRvdQ==" class="text-white mx-2">Instagram</a>
        </div>
        <div class="mt-3">
            <a href="/" class="text-white">Home</a> |
            <a href="/project" class="text-white">Projects</a> |
            <a href="/contact" class="text-white">Contact</a>
        </div>
    </div>
</footer>
@endsection
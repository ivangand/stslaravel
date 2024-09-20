@extends('layout.layout')

@section('title', 'Contact')

@section('content')
<!-- Header -->
<header class="py-5 bg-dark text-white">
    <div class="container text-center">
        <h1>Contact</h1>
    </div>
</header>

<!-- Contact Form -->
<section class="py-5">
    <div class="container">
        <h2 class="text-center mb-4">Formulir Kontak</h2>
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <form>
                    <div class="form-group mb-3">
                        <label for="name">Nama</label>
                        <input type="text" class="form-control" id="name" placeholder="Masukkan Nama">
                    </div>
                    <div class="form-group mb-3">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Masukkan Email">
                    </div>
                    <div class="form-group mb-3">
                        <label for="message">Pesan</label>
                        <textarea class="form-control" id="message" rows="5" placeholder="Tulis pesan Anda di sini"></textarea>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Kirim</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Additional Contact Information -->
<section class="py-5 bg-light">
    <div class="container text-center">
        <h3>Informasi Kontak Lainnya</h3>
        <p>Email: irfanganendra2408@gmail.com</p>
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
            <a href="/" class="text-white">Home</a> |
            <a href="/about" class="text-white">About Me</a> |
            <a href="/project" class="text-white">Projects</a>
        </div>
    </div>
</footer>
@endsection
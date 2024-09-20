@extends('layout.layout')

@section('title', 'Project')

@section('content')
<!-- Header -->
<header class="py-5 bg-dark text-white">
    <div class="container text-center">
        <h1>Project</h1>
    </div>
</header>

<!-- Gallery of Projects -->
<section class="py-5">
    <div class="container">
        <h2 class="text-center">Galeri Project</h2>
        <div class="row">
            <!-- Project 1 -->
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="assets/projek1.png" class="card-img-top" alt="Proyek 1">
                    <div class="card-body">
                        <h5 class="card-title">Project 1</h5>
                        <a href="/project1" class="btn btn-primary">Detail Project</a>
                    </div>
                </div>
            </div>
            <!-- Project 2 -->
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="assets/projek2.png" class="card-img-top" alt="Proyek 2">
                    <div class="card-body">
                        <h5 class="card-title">Project 2</h5>
                        <a href="/project2" class="btn btn-primary">Detail Project</a>
                    </div>
                </div>
            </div>
            <!-- Project 3 -->
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="assets/projek3.png" class="card-img-top" alt="Proyek 3">
                    <div class="card-body">
                        <h5 class="card-title">Project 3</h5>
                        <a href="/project3" class="btn btn-primary">Detail Project</a>
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
            <a href="/" class="text-white">Home</a> |
            <a href="/about" class="text-white">About Me</a> |
            <a href="/contact" class="text-white">Contact</a>
        </div>
    </div>
</footer>
@endsection
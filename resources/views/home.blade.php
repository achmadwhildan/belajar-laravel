@extends('layouts.layout')
    
@section('content')
    
    <link rel="stylesheet" href="assets/css/style.css">
<div class="hero-section text-center" style="background-image: url('assets/img/images.jpeg'); background-size: cover; background-position: center; height: 100vh; display: flex; align-items: center; justify-content: center;">
    <div class="container">
        <h1 style="font-size: 4rem; color: white;">Selamat Datang di Website Kami</h1>
        <p style="font-size: 1.5rem; color: white;">Kami menyediakan apa yang anda cari.</p>
        <a href="#features" class="btn btn-primary btn-lg">Explore</a>
    </div>
</div>


<section id="features" class="text-center py-5">
    <div class="container">
        <h2 class="mb-5">Service</h2>
        <div class="row">
            <div class="col-md-4">
                <i class="fas fa-shield-alt fa-3x mb-3"></i>
                <h3>healing</h3>
                <p>Lorem ipsum dolor sit amet.</p>
            </div>
            <div class="col-md-4">
                <i class="fas fa-bolt fa-3x mb-3"></i>
                <h3>traveling</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
            </div>
            <div class="col-md-4">
                <i class="fas fa-cogs fa-3x mb-3"></i>
                <h3>staycation</h3>
                <p>Lorem ipsum dolor sit amet consectetur.</p>
            </div>
        </div>
    </div>
</section>

<section id="testimonials" class="py-5 bg-light">
    <div class="container text-center">
        <h2 class="mb-5">Comment</h2>
        <div class="row">
            <div class="col-md-4">
                <p>"Lorem ipsum dolor sit, amet consectetur adipisicing elit. Modi, sed."</p>
                <p><strong>- Kamal</strong></p>
            </div>
            <div class="col-md-4">
                <p>"Lorem ipsum dolor sit amet consectetur adipisicing elit."</p>
                <p><strong>- Abyan</strong></p>
            </div>
            <div class="col-md-4">
                <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit."</p>
                <p><strong>- David</strong></p>
            </div>
        </div>
    </div>
</section>
    
@endsection

@section('footer')
@endsection
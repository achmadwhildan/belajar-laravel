<!doctype html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>
    <body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Traveler</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('landing') }}">Landing</a>
                    </li>
                </ul>
            </div>
        </div>
        </nav>

        
        @yield('content')

        <footer class="footer bg-dark text-white py-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <h5>About Us</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus incidunt aspernatur nam delectus.</p>
                    </div>
        
                    <div class="col-md-4">
                        <h5>Quick Links</h5>
                        <ul class="list-unstyled">
                            <li><a href="/" class="footer-link">Home</a></li>
                            <li><a href="/services" class="footer-link">Services</a></li>
                            <li><a href="/about" class="footer-link">About </a></li>
                            <li><a href="/contact" class="footer-link">Contact</a></li>
                        </ul>
                    </div>
        
                    <div class="col-md-4">
                        <h5>Contact Us</h5>
                        <p>Email: achmad.whildan@gmial.com</p>
                        <p>Phone: +62-812-811-620-76</p>
        
                        <div class="social-icons">
                            <a href="#" class="footer-icon"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="footer-icon"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="footer-icon"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="footer-icon"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
        
                <div class="row mt-4">
                    <div class="col text-center">
                        <p>&copy; 2024 Your Travel.</p>
                    </div>
                </div>
            </div>
        </footer>
        @yield('footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>
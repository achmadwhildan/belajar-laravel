@extends('layouts.layout')
@section('content')
    
    <link rel="stylesheet" href="assets/css/landing.css">
    <div class="container">
        <div class="card" style="width: 18rem;">
            <img src="assets/img/pantai.jpeg" class="card-img-top" alt="">
            <div class="card-body">
                <h6>Pantai</h6>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga, sequi?</p>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="assets/img/candi.jpeg" class="card-img-top" alt="">
            <div class="card-body">
                <h6>Candi</h6>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero, veritatis.</p>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="assets/img/gunung.jpeg" class="card-img-top" alt="...">
            <div class="card-body">
                <h6>Gunung</h6>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut, veritatis.</p>
            </div>
        </div>    
    </div>    

    <div class="article">
        <div class="col">
            <h3>Pantai:</h3>
            <p>
                Pantai adalah area pertemuan antara daratan dan laut atau samudra yang biasanya ditandai oleh hamparan pasir, kerikil, atau batu karang. <br>
                Pantai sering menjadi tempat wisata populer karena pemandangannya yang indah, suara ombak yang menenangkan, serta berbagai aktivitas seperti <br>
                berenang, berselancar, dan berjemur. Selain itu, 
                pantai juga merupakan habitat penting bagi berbagai flora dan fauna laut.</p>
        </div>
        <div class="col">
            <h3>Candi:</h3>
            <p>
                Candi adalah bangunan bersejarah yang biasanya digunakan untuk keperluan keagamaan, khususnya dalam agama Hindu dan Buddha. Candi umumnya <br>
                terbuat dari batu, dihiasi dengan relief, patung, dan arsitektur yang rumit. Di Indonesia, candi-candi terkenal seperti Candi Borobudur dan Candi <br>
                Prambanan merupakan warisan budaya dari peradaban kuno, berfungsi sebagai tempat ibadah, meditasi, atau pemujaan. <br> 
                Candi juga sering menjadi simbol kebesaran budaya dan kekayaan sejarah suatu bangsa.</p>
        </div>
        <div class="col">
            <h3>Gunung:</h3>
            <p>
                Gunung adalah formasi geologis yang menjulang tinggi di atas permukaan sekitarnya, biasanya terbentuk akibat pergerakan tektonik atau aktivitas vulkanik. <br>
                Gunung memiliki puncak dan lereng yang curam, sering kali ditutupi oleh hutan, padang rumput, atau salju di ketinggian tertentu. Gunung juga menjadi habitat bagi <br>
                berbagai spesies flora dan fauna unik yang hidup di lingkungan pegunungan.</p>
        </div>
    </div>

    <div class="contact-form">
        <h2>Contact</h2>
        <form id="contactForm">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="message">Message:</label>
            <textarea id="message" name="message" required></textarea>

            <button type="submit">Send</button>
        </form>
    </div>

@endsection

@section('footer')
@endsection
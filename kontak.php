<!DOCTYPE html>
<html lang="en">
<head>
<?php include 'assets/includes/head.php'; ?>
</head>
<body>
   
    <!-- Include header.php  -->
    <?php include 'assets/includes/header.php'; ?>
  
    <main>
        <div class="container-contact">
            <div class="contact">
                <div class="contact-heading" style="background-image: url(assets/image/cnt-img-1.jpg);">
                    <h1 class="title-absolute">Contact Us</h1>
                </div>
                <div class="contact-card">
                    <div class="contact-item"  data-aos="slide-up">
                        <i class="fa fa-phone"></i>
                        <h2>Phone</h2>
                        <p>+62 8218 4323 461 / +62 82394572875</p>
                    </div>
                    <div class="contact-item"  data-aos="slide-up">
                        <i class="fa fa-envelope"></i>
                        <h2>Email</h2>
                        <p>hmpsikomuningrat@gmail.com</p>
                    </div>
                    <div class="contact-item-active"  data-aos="slide-up">
                        <i class="fa fa-location-dot"></i>
                        <h2>Lokasi</h2>
                        <a href="https://maps.app.goo.gl/j19bMQsQXUQ4vMSbA">Lihat Di Google Map</a>
                    </div>
                </div>
            </div>

            <div class="container-contact-form">
                <h2>Contact Form</h2>
                <div class="contact-form">
<form id="quickForm">
    <div class="card-body">
        <div class="form-group">
            <label for="exampleInputName">Name</label>
            <input type="text" name="name" class="form-control" id="exampleInputName1" placeholder="Nama" required>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email" required>
        </div>
        <div class="form-group">
            <label for="exampleInputMessage1">Message</label>
            <textarea cols="10" rows="5" name="message" class="form-control" id="exampleInputMessage1" placeholder="Pesan" required></textarea>
        </div>
    </div>
    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>
                    
                    <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2848.7824681055567!2d132.75731457315786!3d-5.608786355623809!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2d301ba4097d7dcb%3A0xe6c4dd0265e0adbc!2sUNINGRAT%20TUAL!5e1!3m2!1sid!2sid!4v1717310493948!5m2!1sid!2sid" width="450" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
        <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-arrow-up"></i></button>
    </main>

    <!-- Include footer.php -->
    <?php include "assets/includes/footer.php"; ?>
</body>
</html>

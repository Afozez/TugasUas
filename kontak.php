<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="Icon" href="assets/image/img-logo-hmps-1.png">
    <title>Kontak - HMPS Ikom Uningrat</title>

    <!-- Eksternal Css -->
    <link rel="stylesheet" href="assets/css/kontak.css">
    <link rel="stylesheet" href="assets/css/navbar.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <link rel="stylesheet" href="admin/AdminLTE v3.2.0/ColorlibHQ-AdminLTE-bd4d9c7/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />

    <!-- Logo Icon -->
    <link rel="icon" type="image/png" sizes="32x32" href="assets/image/logo/img-hmps-logo.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/image/logo/img-hmps-logo-16x16.png">

    <!-- Apple Touch Icon for iOS devices -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/image/logo/img-hmps-logo.png">

    <!-- For Android devices -->
    <link rel="icon" type="image/png" sizes="192x192" href="assets/image/logo/logo-192x192.png">

    <!-- Font Google Poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- Fontawsome -->
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"/>
    <script src="https://kit.fontawesome.com/2f4686a27c.js" crossorigin="anonymous"></script>

    <!-- Bootstrap 5 Link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
   
    <!-- Include header.php  -->
    <?php include 'assets/includes/header.html'; ?>

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

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- jquery-validation -->
<script src="plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="plugins/jquery-validation/additional-methods.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- Page specific script -->
                    
                    <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2848.7824681055567!2d132.75731457315786!3d-5.608786355623809!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2d301ba4097d7dcb%3A0xe6c4dd0265e0adbc!2sUNINGRAT%20TUAL!5e1!3m2!1sid!2sid!4v1717310493948!5m2!1sid!2sid" width="450" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
        <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-arrow-up"></i></button>
    </main>

    <!-- Include footer.php -->
    <?php include "assets/includes/footer.html"; ?>

    <script src="assets/js/kontak.js"></script>

     <!-- Bootstrap 5 Script -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<!-- jQuery -->
<script src="admin/AdminLTE v3.2.0/ColorlibHQ-AdminLTE-bd4d9c7/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="admin/AdminLTE v3.2.0/ColorlibHQ-AdminLTE-bd4d9c7/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- jquery-validation -->
<script src="admin/AdminLTE v3.2.0/ColorlibHQ-AdminLTE-bd4d9c7/plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="admin/AdminLTE v3.2.0/ColorlibHQ-AdminLTE-bd4d9c7/plugins/jquery-validation/additional-methods.min.js"></script>
<!-- AdminLTE App -->
<script src="admin/AdminLTE v3.2.0/ColorlibHQ-AdminLTE-bd4d9c7/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="admin/AdminLTE v3.2.0/ColorlibHQ-AdminLTE-bd4d9c7/dist/js/adminlte.min.js"></script>
<!-- Page specific script -->
<script>
$(document).ready(function () {
  $('#quickForm').validate({
    rules: {
      name: {
        required: true,
      },
      email: {
        required: true,
        email: true,
      },
      message: {
        required: true,
        minlength: 5,
      },
    },
    messages: {
      name: {
        required: "Please enter your name",
      },
      email: {
        required: "Please enter your email address",
        email: "Please enter a valid email address",
      },
      message: {
        required: "Please enter your message",
        minlength: "Your message must be at least 5 characters long",
      },
    },
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.form-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    }
  });
});
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
        // Inisialisasi AOS
        AOS.init();
    </script>
</body>
</html>

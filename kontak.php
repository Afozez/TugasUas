<!DOCTYPE html>
<html lang="en">
<head>
    <title>Kontak</title>
    <?php include 'layout/web/head_web_hmps.php'; ?>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Warna border default hitam */
        .form-control {
            border: 1px solid #000;
        }

        /* Warna border merah untuk invalid */
        .was-validated .form-control:invalid, .form-control.is-invalid {
            border-color: #dc3545 !important;
        }

        /* Warna border biru untuk valid */
        .was-validated .form-control:valid, .form-control.is-valid {
            border-color: #265073 !important;
        }

        /* Menghilangkan icon centang pada validasi Bootstrap */
        .was-validated .form-control:valid:not(:focus):not(:disabled) ~ .valid-feedback,
        .was-validated .form-control:valid:not(:focus):not(:disabled) ~ .valid-tooltip {
            display: none;
        }

        /* Style untuk alert pop-up */
        .alert-popup {
            position: fixed;
            top: 0;
            left: 50%;
            transform: translateX(-50%);
            z-index: 1000;
            width: 100%;
            max-width: 600px;
            padding: 15px;
            background-color: #ffffff;
            border: 1px solid #ced4da;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            border-radius: 5px;
            display: none;
        }
    </style>
</head>
<body>
    <nav>
        <!-- Include header.php -->
        <?php include 'layout/web/navbar_web_hmps.php'; ?>
    </nav>

    <!-- Alert pop-up untuk hasil pengiriman -->
    <div id="alertPopup" class="alert-popup"></div>

    <main>
        <div class="container-contact">
            <div class="contact">
                <div class="contact-heading" style="background-image: url(assets/image/cnt-img-1.jpg);">
                    <h1 class="title-absolute">Contact Us</h1>
                </div>
                <div class="contact-card">
                    <div class="contact-item" data-aos="slide-up">
                        <i class="fa fa-phone"></i>
                        <h2>Phone</h2>
                        <p>+62 8218 4323 461 / +62 82394572875</p>
                    </div>
                    <div class="contact-item" data-aos="slide-up">
                        <i class="fa fa-envelope"></i>
                        <h2>Email</h2>
                        <p>hmpsikomuningrat@gmail.com</p>
                    </div>
                    <div class="contact-item-active" data-aos="slide-up">
                        <i class="fa fa-location-dot"></i>
                        <h2>Lokasi</h2>
                        <a href="https://maps.app.goo.gl/j19bMQsQXUQ4vMSbA">Lihat Di Google Map</a>
                    </div>
                </div>
            </div>

            <div class="container-contact-form">
                <h2>Contact Form</h2>
                <div class="contact-form">
                    <form id="contactForm" action="send_email.php" method="post" novalidate>
                        <div class="form-group">
                            <label for="name">Nama:</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Masukkan nama Anda" required>
                            <div class="invalid-feedback">
                                Mohon masukkan nama Anda.
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan email Anda" required>
                            <div class="invalid-feedback">
                                Mohon masukkan alamat email yang valid.
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="subject">Subjek:</label>
                            <input type="text" class="form-control" id="subject" name="subject" placeholder="Masukkan subjek pesan" required>
                            <div class="invalid-feedback">
                                Mohon masukkan subjek pesan.
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="message">Pesan:</label>
                            <textarea class="form-control" id="message" name="message" rows="5" placeholder="Masukkan pesan Anda" required></textarea>
                            <div class="invalid-feedback">
                                Mohon masukkan pesan Anda.
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Kirim Pesan</button>
                        <?php if (isset($_GET['status']) && $_GET['status'] == 'success'): ?>
                            <div class="alert alert-success mt-3" role="alert">
                                Pesan telah berhasil dikirim!
                            </div>
                        <?php elseif (isset($_GET['status']) && $_GET['status'] == 'error'): ?>
                            <div class="alert alert-danger mt-3" role="alert">
                                Gagal mengirimkan pesan. Silakan coba lagi nanti.
                            </div>
                        <?php endif; ?>
                    </form>
                    <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2848.7824681055567!2d132.75731457315786!3d-5.608786355623809!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2d301ba4097d7dcb%3A0xe6c4dd0265e0adbc!2sUNINGRAT%20TUAL!5e1!3m2!1sid!2sid!4v1717310493948!5m2!1sid!2sid" width="450" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
        <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-arrow-up"></i></button>
    </main>

    <footer>
        <!-- Include footer.php -->
        <?php include 'layout/web/footer_web_hmps.php'; ?>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            // Validasi form ketika tombol submit ditekan
            $('#contactForm').on('submit', function(e) {
                // Menghentikan perilaku bawaan form
                e.preventDefault();
                e.stopPropagation();

                // Menghapus semua status validasi sebelumnya
                $('.form-control').removeClass('is-invalid').removeClass('is-valid');

                // Validasi setiap field
                var valid = true;

                // Validasi nama
                var name = $('#name').val();
                if (name.trim() === '') {
                    $('#name').addClass('is-invalid');
                    valid = false;
                }

                // Validasi email harus diakhiri dengan "@gmail.com"
                var email = $('#email').val();
                if (email.trim() === '' || !email.endsWith('@gmail.com')) {
                    $('#email').addClass('is-invalid');
                    valid = false;
                }

                // Validasi subjek
                var subject = $('#subject').val();
                if (subject.trim() === '') {
                    $('#subject').addClass('is-invalid');
                    valid = false;
                }

                // Validasi pesan
                var message = $('#message').val();
                if (message.trim() === '') {
                    $('#message').addClass('is-invalid');
                    valid = false;
                }

                // Jika semua validasi terpenuhi, kirim formulir
                if (valid) {
                    submitForm();
                }
            });

            function submitForm() {
                // Kirim form menggunakan AJAX
                $.ajax({
                    type: "POST",
                    url: "send_email.php",
                    data: $('#contactForm').serialize(), // Serialisasi data form untuk dikirim
                    success: function(response) {
                        showAlert('Pesan berhasil dikirim!');
                        $('#contactForm')[0].reset(); // Reset form setelah berhasil dikirim
                    },
                    error: function(xhr, status, error) {
                        showAlert('Gagal mengirim pesan. Silakan coba lagi nanti.');
                    }
                });

                // Hapus status validasi dan kembalikan warna border ke hitam
                $('.form-control').removeClass('is-invalid').removeClass('is-valid');
                $('.form-control').css('border-color', '#000');
            }

            function showAlert(message) {
                // Tampilkan alert pop-up
                $('#alertPopup').html('<div class="alert alert-success alert-dismissible fade show" role="alert">' +
                    message +
                    '<button type="button" class="close" data-dismiss="alert" aria-label="Close">' +
                    '<span aria-hidden="true">&times;</span>' +
                    '</button>' +
                    '</div>').fadeIn();

                // Sembunyikan alert setelah 3 detik
                setTimeout(function() {
                    $('#alertPopup').fadeOut();
                }, 3000);
            }
        });
    </script>
</body>
</html>

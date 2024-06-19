<footer class="container-footer">
    <!-- Start Footer -->
    <div class="footer">
        <div class="footer-left">
            <a class="footer-brand" href="#">
                <img src="assets/image/logo/img-hmps-logo.png" alt="Logo" width="30" height="30" class="footer-logo-img">
                <div class="footer-logo-text">
                    <div class="footer-logo-text-hmps">HMPS</div>
                    <div class="footer-logo-text-prodi">ILMU KOMPUTER</div> 
                    <div class="footer-logo-text-university">UNINGRAT</div> 
                </div>
            </a>
            <p>Jln. Panglima Mandala, Fiditan - Kota Tual</p>
        </div>
        <div class="footer-center">
            <ul class="footer-navbar">
                <h2>Link</h2>
                <li><a href="">Home</a></li>
                <li><a href="">Profil</a></li>
                <li><a href="">Divisi</a></li>
                <li><a href="">Berita</a></li>
                <li><a href="">Kontak</a></li>
            </ul>
        </div>
        <div class="footer-right">
            <h2>Sosial Media</h2>
            <div class="footer-icon">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
                <a href="#"><i class="fa fa-youtube"></i></a>
            </div>
        </div>
    </div>
    <p class="copyright">Copyright&copy; by <span class="made">hmpsikomuningrat</span></p>
    <!-- End Footer -->

   <!-- Eksternal Js -->
   <script src="/tugasuas/assets/js/main.js"></script>
    <script src="/tugasuas/assets/js/kontak.js"></script>

    <!-- Font Awsome -->
    <script src="https://kit.fontawesome.com/2f4686a27c.js" crossorigin="anonymous"></script>

    <!-- Bootstrap 5 Script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
    <!-- Library AOS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

    <!-- Page specific script -->
    <script>
        // Inisialisasi AOS
        AOS.init();
    </script>

    <script>
        $(function () {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true
            });
        });
    </script>
</footer>


// Get the button:
let mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}

// Validation Form

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
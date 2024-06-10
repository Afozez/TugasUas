function contactValidation() {
    const name = document.forms['send-email.php']['nama'].value;
    const emails = document.forms['send-email.php']['email'].value;
    const messege = document.forms['send-email.php']['message'].value;

    if(name == "" || emails == "" || messege == "") {
        document.getElementById('empty-name').innerHTML = "Wajib di isi";
        return false
    } else {alert("Login Berhasil") }

} 

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
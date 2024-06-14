function contactForm() {
    const names = document.forms['contact-form']['name'].value;
    const emails = document.forms['contact-form']['email'].value;
    const messege = document.forms['contact-form']['message'].value;
    let succes = true;

    if(names == "") {
      document.getElementById('nameEror').innerHTML = "Wajib di isi";
      return false
    } else {
      document.getElementById('nameEror').innerHTML = "";
    }

    if(emails == "") {
        document.getElementById('emailEror').innerHTML = "Wajib di isi";
        return false
    } else {
      document.getElementById('emailEror').innerHTML = "";
    }

    if(messege == "") {
        document.getElementById('messageEror').innerHTML = "Wajib di isi";
        return false
    } else {
      document.getElementById('messageEror').innerHTML = "";
    }

    if(succes) {
      alert('Berhasil Di Kirim')
    } 


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
document.addEventListener('DOMContentLoaded', function() {
    const sidebar = document.getElementById('sidebar');
    const contentWrapper = document.querySelector('.content-wrapper');
    const commentSection = document.querySelector('.comment-section');
    const footer = document.querySelector('footer');

    // Function to adjust sidebar position based on scrolling
    function adjustSidebarPosition() {
      const scrollPosition = window.scrollY;
      const contentBottom = contentWrapper.offsetTop + contentWrapper.offsetHeight;
      const commentTop = commentSection.offsetTop;
      const footerTop = footer.offsetTop;

      if (scrollPosition > contentWrapper.offsetTop && scrollPosition < contentBottom - sidebar.offsetHeight) {
        sidebar.classList.add('fixed');
        sidebar.style.top = '20px'; // Adjust this value based on your layout
      } else if (scrollPosition >= contentBottom - sidebar.offsetHeight && scrollPosition < footerTop - sidebar.offsetHeight) {
        sidebar.classList.remove('fixed');
        sidebar.style.top = contentBottom - sidebar.offsetHeight + 'px';
      } else if (scrollPosition >= footerTop - sidebar.offsetHeight) {
        sidebar.classList.remove('fixed');
        sidebar.style.top = footerTop - sidebar.offsetHeight + 'px';
      } else {
        sidebar.classList.remove('fixed');
      }
    }

    // Initial call to adjust sidebar position
    adjustSidebarPosition();

    // Event listener for scroll to adjust sidebar position
    window.addEventListener('scroll', adjustSidebarPosition);
  });
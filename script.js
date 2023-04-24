document.querySelector(".scroll-down-btn").addEventListener("click", function () {
    const servicesSection = document.querySelector("#ad2");
    servicesSection.scrollIntoView({ behavior: "smooth" });
  });
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});


// new addded js
function toggle() {
    var div = document.getElementById("dropdown-menu"); 
    div.classList.toggle('showClass');
  }

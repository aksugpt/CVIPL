$(document).ready(function(){
    $('.slider').slick({
        autoplay: true
    });
  });
//   $(document).ready(function(){
//     $(".hamburger").click(function(){
//       $("#nav-slide").toggle();
//     });
//   });
function toggleSidebar() {
    let getSidebar = document.getElementById("#nav-slide");
    getSidebar.classList.toggle("slide");
}

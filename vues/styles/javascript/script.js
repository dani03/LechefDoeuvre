$(document).ready(function(){
  var scrollLink = $(".scroll");
  // on commence le scroll smooth
  scrollLink.click(function(e){
    e.preventDefault();
    $("body,html").animate({
       scrollTop: $(this.hash).offset().top
    }, 1000);
// nous activons les liens en bar de nav
$(window).scroll(function(){
  var scrollBarLocation = $(this).scrollTop();
  scrollLink.each(function(){
    var sectionOffset = $(this.hash).offset().top;
    if (sectionOffset <= scrollBarLocation){
      $(this).parent().addClass('active');
      $(this).parent().siblings().removeClass('active');
    }
  })

   var scrollNav = $(this).scrollTop();
        console.log(scrollNav);
        if (scrollNav > 298) {
          $(".navTwo").addClass(".navTwo");
          $(".photoDeProfil").addClass('animate fadeOut', 1000);
          // alert();
        }
});
  });
});

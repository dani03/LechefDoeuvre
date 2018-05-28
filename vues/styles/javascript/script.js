$(document).ready(function(){
  var scrollLink = $(".scroll");
  // on commence le scroll smooth
  scrollLink.click(function(e){
    e.preventDefault();
    $("body,html").animate({
       scrollTop: $(this.hash).offset().top
    }, 1000)

  })
})

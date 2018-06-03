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
$(document).ready(function(e) {
  $('#contact-form').submit(function(e){

    $('.comments').empty();
   //  ici ont va chercher tout les elements du formulaire et les mettrent dans une variable postData
    var postData = $('#contact-form').serialize();
// ici on recupere les données avec ajax
    $.ajax({
      type: 'POST',
      url: '../../controllers/contactController.php',
      data: postData,
      dataType: 'json',
      success: function(result){

                 if(result.isSuccess){
                   $('#contact-form').append("<p class='merci'> votre message a bien été envoyé merci de m'avoir contacter.</p>");
                   $('#contact-form')[0].reset();
                   // ici si tout c'est bien page on envoyer le message a l'utilisateur et on remet tout a zero
                 }
                  else
                  {
                   //  le "+" ici veut dire "va chercher l'element qui suit directement l'id idententifier"
                    $("#firstname + .comments").html(result.firstnameError);
                    $("#name + .comments").html(result.nameError);
                    $("#message + .comments").html(result.messageError);
                    $("#phone + .comments").html(result.phoneError);
                    $("#email + .comments").html(result.emailError);
                  }


      }
    });
   });

})

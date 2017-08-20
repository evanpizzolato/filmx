$(document).ready(function(){
  $(window).on('load', function() {
  // Animate loader off screen
  $(".se-pre-con").fadeOut("slow");;
});

   $(".hamburger-menu-open").hide();

   $(".hamburger-menu-icon").click(function(){
        $(this).hide();
        $(".hamburger-menu-open").show();
    });
    $(".close-x").click(function(){
         $(".hamburger-menu-open").hide();
         $(".hamburger-menu-icon").show();
     });
});

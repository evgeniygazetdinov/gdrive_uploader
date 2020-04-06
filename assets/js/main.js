console.log('hi');
$(document).ready(function() {
    $(".ff-btn-app").click(function(){
        alert("button");
    }); 
});

$(function() {
    var menuVisible = false;
    $('.hide_menu').click(function() {
      if (menuVisible) {
        $('.resp-nav-bar').css({'display':'none'});
        
        menuVisible = false;

        return;
      }
      $('.resp-nav-bar').css({'display':'block'});
      menuVisible = true;
    });
    $('.resp-nav-bar').click(function() {
      $(this).css({'display':'none'});
      
      menuVisible = false;
    });
  });
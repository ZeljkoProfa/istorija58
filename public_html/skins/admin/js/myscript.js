$(document).ready(function(){
    
    
    $('.section-content').hide();
    $('.section-title').click(function(){
        $(this).closest('li').find('.section-content').toggle('fast');
    });
    
    // Navigation show dropdown on mouseover
    $('.back-nav-dropdown').mouseover(function () {

        $(this).find('.back-nav-dropdown-ul').slideDown(100);
        $(this).css('background-color', '#d8e6f2');
    });
    $('.back-nav-dropdown').mouseleave(function () {
        
        $(this).find('.back-nav-dropdown-ul').slideUp(100);
        $(this).css('background-color', '#f8f8f8');
    });
  
});

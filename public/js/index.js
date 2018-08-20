$('#password').focusin(function(){
    $('form').addClass('up')
  });
  $('#password').focusout(function(){
    $('form').removeClass('up')
  });
  
  // Panda Eye move
  $(window).on( "mousemove", function( event ) {
    var dw = $(window).width() / 15;
    var dh = $(window).height() / 15;
    var x = event.pageX/ dw;
    var y = event.pageY/ dh;
    $('.eye-ball').css({
      width : x,
      height : y
    });
  });
  
  // validation
  
  
  $('.btn-1').click(function(){
    $('form').addClass('wrong-entry');
      setTimeout(function(){ 
         $('form').removeClass('wrong-entry');
       },3000 );
  });
  
  
  
  // Toggle Function
  // $('.toggle').click(function(){
  //   // Switches the Icon
  //   $(this).children('button').toggleClass('btn-2');
  //   // Switches the forms  
    
  // // });
  // $('.btn-2').click(function(){
  //   $('.DangKy').addClass('active');
  //   $('.foot').addClass('pad-top');
  // });
  // $('.btn-1').click(function(){
  //   $('.DangKy').removeClass('active');
  //   $('.foot').removeClass('pad-top')
  // });
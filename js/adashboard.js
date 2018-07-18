$(window).on('click',function(event){
    if(!$(event.target).hasClass("z-optionbtn"))
    {
      $(".z-optionbox").closest('div').removeClass("in");
      $(".z-optionbox").closest('div').addClass("hidden");
    }
  });
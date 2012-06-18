(function ($) {
  Drupal.behaviors.customOmegaSubthemeJS = {
    attach: function(context, settings) {
      // you can implement your custom javascript/jquery here,
      // and also create other attached behaviors
      
      // find skype status button and add random url paramter for quick image refresh
      $('img[src*="mystatus.skype.com"]').each(function() {
        var skypebutton_url =  $(this).attr("src");
        skypebutton_url = skypebutton_url + '?' + Math.floor(Math.random()*1000);  
        $(this).attr('src', skypebutton_url);
      }); // end if skype button 
  
    }
  };
  
})(jQuery);

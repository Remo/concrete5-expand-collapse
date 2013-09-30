$(document).ready(function() {
   $(".ccm-remo-expand-content").each(function (e,v) {
      $(this).css("height", $(this).height());
   });
   $(".ccm-remo-expand-closed").next().hide();
   
   $(".ccm-remo-expand-title").click(function(event) {
      event.preventDefault();
      
      var id = $(this).attr("id");

      if ($(this).hasClass("ccm-remo-expand-open")) {
         $(this).removeClass("ccm-remo-expand-open");
         $(this).addClass("ccm-remo-expand-closed");               
      }
      else {
         $(this).addClass("ccm-remo-expand-open");
         $(this).removeClass("ccm-remo-expand-closed");  
      }

      var contentId = id.replace(/ccm-remo-expand-title-/,"ccm-remo-expand-content-");
      
      $("#"+contentId).slideToggle(parseInt($(this).attr("data-expander-speed")));
      
   });      
   
});
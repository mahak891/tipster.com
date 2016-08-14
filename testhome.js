jQuery(document).ready(function(){

jQuery("#home-link").click(function(){
  jQuery(".aboutus").css({"display":"none"});
  jQuery(".contact").css({"display":"none"});
});


jQuery("#aboutus-link").click(function(){
  jQuery(".aboutus").css({"display":"block"});
  jQuery(".contact").css({"display":"none"});
});


jQuery("#contactus-link").click(function(){
  jQuery(".aboutus").css({"display":"none"});
  jQuery(".contact").css({"display":"block"});
});

});
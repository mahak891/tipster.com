

	jQuery(document).ready(function(){

jQuery("#login-box-link").click(function(){
  jQuery(".signup").css({"display":"none"});
  jQuery(".login").css({"display":"block"});
  jQuery("#login-box-link").addClass("active");
  jQuery("#signup-box-link").removeClass("active");

});
jQuery("#signup-box-link").click(function(){
  jQuery(".signup").css({"display":"block"});
  jQuery(".login").css({"display":"none"});
  jQuery("#login-box-link").removeClass("active");
  jQuery("#signup-box-link").addClass("active");
});

});


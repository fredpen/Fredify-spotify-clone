$(document).ready(function(){

    $("#hideSignIn").click(function(){
    $("#loginForm").hide();
    $("#registerForm").show();
  });

  $("#hideRegister").click(function(){
    $("#loginForm").show();
    $("#registerForm").hide();
  });

});

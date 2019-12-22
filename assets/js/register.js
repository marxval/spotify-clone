$(document).ready(function () {
  // This code is executed when all the dependecies are loaded
  // Create jQuery objects with the appropiate selectors.
  $("#hideLogin").click(function () {
    $("#loginForm").hide();
    $("#registerForm").show();
  });
  $("#hideRegister").click(function () {
    $("#loginForm").show();
    $("#registerForm").hide();
  });
});
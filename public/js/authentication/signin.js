'use strict';
$(document).ready(function() {
  //Asignar el foco al control principal
  $("#txt_username").focus(); 
});

//Función que al cancelar redirije a la lista
function cancel(){
  window.location.href = url_home;
}

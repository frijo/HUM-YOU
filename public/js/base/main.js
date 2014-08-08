

'use strict';
$(document).ready(function() {
  
  //--------------------------------------------------------------------
	// Se asocia al evento “click” una función anónima que redirige a login
	//--------------------------------------------------------------------
  $('#bt_iniciar_sesion').click(
  	function(){
  		window.location.href = url_login;
  });
  //--------------------------------------------------------------------

});


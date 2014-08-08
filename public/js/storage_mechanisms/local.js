'use strict';

var local_key = 'local_counter';

$(document).ready(function() {

  //Función para actualizar el valor almacenado en "local_storage"
  $('#local_click').click(function() {

    //Recuperando un valor predeterminado si el valor de "local_storage" está ausente
    var clicks = localStorage.getItem(local_key) || 0;

    //Se incrementa el contador y se escribe/sobre-escribe el "local_storage"
    clicks++;
    localStorage.setItem(local_key, clicks);

    //Se actualiza el contador con el valor que se almacenó en el "local_storage"
    update_local_counter(clicks);
  });

  //Función para reiniciar el valor almacenado en "local_storage"
  $('#local_clear').click(function() {
    //Se reinicia el contador y se escribe/sobre-escribe el "local_storage"
    var clicks = 0;
    localStorage.setItem(local_key, clicks);
    
    //Se actualiza el contador con el valor almacenado en el "local_storage"
     get_local_value();
  });

  //Actualizar el contador con el valor almacenado en el "local_storage"
  get_local_value();
});

function get_local_value() {
  //Recuperar el valor almacenado en "local_storage"
  var clicks = localStorage.getItem(local_key) || 0;

  //Se actualiza el contador con el valor almacenado en el "local_storage"
  update_local_counter(clicks);
}

function update_local_counter(value) {
  //Actualizar el contador
  $('#local_counter').text(value);
}
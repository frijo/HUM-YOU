'use strict';
$(document).ready(function() {

  $('#cookie_click').click(function() {
    //Solicitud HTTP asincrónica (Ajax), para actualizar el valor almacenado en la cookie
    $.ajax({
      url: 'cookie_click'
    })
    .done(function(data) {
      update_cookie_counter(data);
    })
    .fail(function() {
      alert('Error');
    });

  });

  $('#cookie_clear').click(function() {
    //Solicitud HTTP asincrónica (Ajax), para reiniciar el valor almacenado en la cookie
    $.ajax({
      url: 'cookie_clear'
    })
    .done(function(data) {
      update_cookie_counter(data);
    })
    .fail(function() {
      alert('Error');
    });

  });
  get_cookie_value();

});

function get_cookie_value() {
  //Solicitud HTTP asincrónica (Ajax), para obtener el valor almacenado en la cookie
  $.ajax({
    url: 'cookie_click_value'
  })
  .done(function(data) {
    update_cookie_counter(data);
  })
  .fail(function() {
    alert('Error');
  });
}

function update_cookie_counter(value) {
  //Actualizar el contador
  console.log(value);
  $('#cookie_counter').text(value);
}
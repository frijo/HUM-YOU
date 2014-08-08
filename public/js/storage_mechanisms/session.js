'use strict';
$(document).ready(function() {

  $('#session_click').click(function() {
    //Solicitud HTTP asincrónica (Ajax), para actualizar el valor almacenado en la session
    $.ajax({
      url: 'session_click'
    })
    .done(function(data) {
      update_session_counter(data);
    })
    .fail(function() {
      alert('error');
    });
  });

  $('#session_clear').click(function() {
    //Solicitud HTTP asincrónica (Ajax), para reiniciar el valor almacenado en la session
    $.ajax({
      url: 'session_clear'
    })
    .done(function(data) {
      update_session_counter(data);
    })
    .fail(function() {
      alert('error');
    });
  });
  get_session_value();

});

function get_session_value() {
  //Solicitud HTTP asincrónica (Ajax), para obtener el valor almacenado en la session  
  $.ajax({
    url: 'session_click_value'
  })
  .done(function(data) {
    update_session_counter(data);
  })
  .fail(function() {
    alert('error');
  });
}

function update_session_counter(value) {
  //Actualizar el contador
  $('#session_counter').text(value);
}
'use strict'

let templateComentarios;
fetch('js/templates/comentarios.handlebars')
.then(response => response.text())
.then(template => {
    templateComentarios = Handlebars.compile(template); // compila y prepara el template

    getComentarios();
});
function getComentarios() {
  alert("aca entra");
  let promesa=fetch("api/comentarios");
  console.log(promesa);
  let respuesta=promesa.then(response => response.json());
  console.log(respuesta);
let  jsonResp=respuesta.then(jsonComentarios => {
        mostrarComentarios(jsonComentarios)});
    console.log(jsonResp);
  /*  fetch("api/comentarios")
    .then(response => response.json())
    .then(jsonComentarios => {
        mostrarComentarios(jsonComentarios);
    })*/
  /*  .catch(function() {
             document.querySelector('#comentarios-container').append('<li>Imposible cargar los comentarios</li>');
          });*/

}

function mostrarComentarios(jsonComentarios) {
  alert("muestra comentarios");
    let context = {
      comentarios: jsonComentarios,
        prueba: "ingresa comentarios"
    }
    let html = templateComentarios(context);
    document.querySelector("#comentarios-container").innerHTML = html;
}

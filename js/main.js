


let templateComentarios;

fetch('js/templates/comentarios.handlebars')
.then(response => response.text())
.then(template => {

    templateComentarios = Handlebars.compile(template); // compila y prepara el template

   getComentarios();
});
function getComentarios() {
  valor =  document.getElementById("comentarios-container").getAttribute("value");
    fetch("api/comentarios/"+valor)
    .then(response => response.json())
    .then(jsonComentarios => {
      let adminSmarty=  $('#admin').val();
      let admin;
      if(adminSmarty=="1"){
         admin=true;
      }else {
         admin=false;
      }
       mostrarComentarios(jsonComentarios,admin);
    })

}
function mostrarComentarios(jsonComentarios,admin) {

    console.log(admin);
    let context = { // como el assign de smarty
        comentarios: jsonComentarios,
        prueba: "comentarios",
        administrador:admin
    }

    let html = templateComentarios(context);

    document.querySelector("#comentarios-container").innerHTML = html;
    $('.deleteComment').bind("click", function(event){
      let data = $(this).data("id");
      deleteComment(data);
    });
}
$('#submitComment').click(function(){ //Cuando clickeas en el boton "Submit" que tiene el ID '#submitcomment', entra.
        event.preventDefault(); //Previene que se actualice la página (que redireccione).
        let comentario = {
        "comentario": $('#commentText').val(), //Texto, comentario, tu opinion sobre el juego.
        "valoracion": $('#puntaje').val(), //Punta (entre 1 y 5) con el que se valora al juego.
        "idusuario": $('#idusuario').val(), //ID del juego al que pernetece el comentario.
        "idproducto": $('#idproducto').val() //ID del usuario que hizo el comentario.
        }
       //Imprimo un LOG con el JSON de datos ingresados por el usuario.
        fetch("api/comentarios", {
          method: 'POST',
          headers: {'Content-Type': 'application/json'},
          body: JSON.stringify(comentario)
        })
        .then(r => getComentarios()) //Si el POST tiene éxito, llama a una función de arriba que trae TODOS los comentarios y los muestra.
        .catch(error => console.log("error")); //Si el post falla, imprime un log con el error.
      });

      function deleteComment(data){ //Cuando clickeas en el boton "Submit" que tiene el ID '#deleteComment', entra.
        event.preventDefault(); //Previene que se actualice la página (que redireccione).
        fetch("api/comentarios/"+ data, {
          method: 'DELETE',
        })
        .then(r => getComentarios()) //Si el POST tiene éxito, llama a una función de arriba que trae TODOS los comentarios y los muestra.
        .catch(error => console.log("error")); //Si el post falla, imprime un log con el error.
      }




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
$('#submitComment').click(function(){
        event.preventDefault();
        let comentario = {
        "comentario": $('#commentText').val(),
        "valoracion": $('#puntaje').val(),
        "idusuario": $('#idusuario').val(),
        "idproducto": $('#idproducto').val()
        }
        fetch("api/comentarios", {
          method: 'POST',
          headers: {'Content-Type': 'application/json'},
          body: JSON.stringify(comentario)
        })
        .then(r => getComentarios())
        .catch(error => console.log("error"));
      });

      function deleteComment(data){
        event.preventDefault();
        fetch("api/comentarios/"+ data, {
          method: 'DELETE',
        })
        .then(r => getComentarios())
        .catch(error => console.log("error"));
      }

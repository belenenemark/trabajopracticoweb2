let templateComentarios;

fetch('js/templates/comentarios.handlebars')
.then(response => response.text())
.then(template => {

    templateComentarios = Handlebars.compile(template); // compila y prepara el template


   getComentarios();
});
function getComentarios() {
    fetch("api/comentarios")
    .then(response => response.json())
    .then(jsonComentarios => {
      alert("trae los comentarios");
       mostrarComentarios(jsonComentarios);
    })

}
function mostrarComentarios(jsonComentarios) {
    let context = { // como el assign de smarty
        comentarios: jsonComentarios,
        prueba: "hola"
    }
    console.log(context);
    let html = templateComentarios(context);
    console.log(html);
    document.querySelector("#comentarios-container").innerHTML = html;
}

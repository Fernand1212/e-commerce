<<<<<<< HEAD
window.onload = ()=> {
var resultado = document.getElementsByTagName("resultado");
var search = document.getElementById("search");
search.addEventListener('keyup', () => {
       fetch(`/Productos?search=${search.value}`)
        .then(respuesta =>  respuesta.text())
        .then(html =>  {resultado.innerHTML =  html} )
        .catch((error) => {
            console.log('Hubo un problema con la petición Fetch:' + error.message) })
    })
console.log(resultado);
console.log(search)
=======


window.onload=function(){




  let search = document.getElementById("search");
  let resultado = document.getElementById("buscado");

        document.addEventListener('keyup', () => {

               fetch(`?=${search.value}`)
                .then(respuesta =>  respuesta.text())
                .then(html =>  {resultado =  html} )
                .catch((error) => {
                    console.log('Hubo un problema con la petición Fetch:' + error.message) })
            })
>>>>>>> 0c6985df2c9656fbcce2c8ecd41e0e45356ba1a4
}

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
}

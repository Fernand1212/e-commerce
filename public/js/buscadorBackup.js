console.log("hola")

window.addEventListener('keyup',() =>{


var resultado = document.getElementById("buscado");
var search = document.getElementById("search");
        search.addEventListener('keyup', () => {
            
                console.log(resultado)
               fetch(`/Productos?search=${search.value}`)
                .then(respuesta =>  respuesta.text())
                .then(html =>  {resultado.innerHTML =  html} )
                .catch((error) => {
                    console.log('Hubo un problema con la petición Fetch:' + error.message) })
            })})
        
  


      





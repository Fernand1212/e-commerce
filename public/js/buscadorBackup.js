console.log("hola")

window.addEventListener('keyup',() =>{


var resultado = document.getElementById("resultado");
var search = document.getElementById("search");
        search.addEventListener('keyup', () => {

                console.log(resultado)
               fetch(`/Productos?search=${search.value}`,{ method:'get' })
                .then(respuesta =>  respuesta.text())
                .then(html =>  {resultado.innerHTML =  html} )
                .catch((error) => {
                    console.log('Hubo un problema con la petición Fetch:' + error.message) })
            })})



            

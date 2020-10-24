

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
}

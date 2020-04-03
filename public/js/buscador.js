window.addEventListener('load',function(){
  
var resultadoId = document.getElementById("buscado");
var buscadorId = document.getElementById("search");
console.log(buscadorId)
        buscadorId.addEventListener("keyup", () => {
            if((buscadorId.value.length)>=1) { 
                fetch(`/Productos?search=${buscadorId.value}`,{ method:'get' })
                .then(function(respuesta){
                    return respuesta.text();
                  })
            
    .then(function(html){
        
        document.body.innerHTML = resultadoId.innerHTML + html
      
        }) }
            else
                resultadoId.innerHTML = ""
        })
    });



      




    
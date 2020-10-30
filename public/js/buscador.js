window.addEventListener('load',function(){
  var resultado = document.getElementById("resultado");
  var search = document.getElementById("search");
        search.addEventListener("keyup", () => {
            if((search).value.length >=2 )
                fetch(`/Productos?=search${search.value}`,{ method:'get' })
                .then(response  =>  response.json() )
                .then(html      =>  console.log(html))
            else
                resultado.innerHTML = ""
        })
    });

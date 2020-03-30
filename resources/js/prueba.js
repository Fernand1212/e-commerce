
window.addEventListener("load", function(){
    document.getElementById('search').addEventListener('keyup', function(){
        fetch('/Productos/Marca?search=${document.getElementById("search").value}',{
            method:'GET'
        })
        .then(Response=> response.text())
        .then(html =>{
            
            document.getElementById('buscador').innerHTML += html
            
        })
        .catch(error => console.log(error))
    })
})


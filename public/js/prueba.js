
window.addEventListener("load", function(){
    document.getElementById('search').addEventListener('keyup', function(){
        fetch('/Productos/Marca?search=${document.getElementById("search").value}',{
            method:'GET'
        })
        .then(response=> response.text())
        .then(producto =>{
            
            document.getElementById('buscador').innerHTML += producto
        })
        .catch(error => console.log(error))
    })
})
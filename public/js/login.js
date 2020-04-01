var formLogin = document.querySelector('#login')
var campos = Array.from(formLogin.elements);

formLogin.onsubmit = function(event){
campos.splice(3)
campos.forEach(function(valor){
  let attribute = valor.name
  if(valor.value == ""){
    event.preventDefault()
    return valor.value = prompt("El campo "+ attribute + "no puede estar vacio, por favor completelo")
  }
})
}
console.log(campos)

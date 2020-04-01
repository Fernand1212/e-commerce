
fetch("https://restcountries.eu/rest/v2/all")
.then(function(respuesta){
  return respuesta.json();
})
.then(function(paises){
  let select = document.querySelector('select');
  for(obj of paises){
let option = document.createElement('option');
let pais = document.createTextNode(obj.name);
option.append(pais)
    select.append(option);

  }
})


var formularioRegistro = document.querySelector('#registro');
var elementosFormulario = formularioRegistro.elements;
var nombre = document.querySelector('#name');
var apellido = document.querySelector('#apellido');
var email = document.querySelector('#email');
var password = document.querySelector('#password');
var password_confirmation = document.querySelector('#password_confirmation');
var country_id = document.querySelector('#country_id');
var ciudad = document.querySelector('#ciudad');
var barrio = document.querySelector('#barrio');
var postal = document.querySelector('#postal');
var direccion = document.querySelector('#direccion');
var nacimiento = document.querySelector('#nacimiento');
var alias = document.querySelector('#alias');
var telefono = document.querySelector('#telefono');
var avatar = document.querySelector('#avatar');
var customSwitch1 = document.querySelector('#customSwitch1');
var invalidCheck2 = document.querySelector('#invalidCheck2');
var terminos = document.querySelector('#Terminos');

var arrayElementos = Array.from(elementosFormulario);
arrayElementos.forEach(function(elementos){
  elementos.addEventListener("blur",function(){
    var attribute = this.name;
    if (this.value == ""){
      return this.value = prompt("El "+ attribute +" es olbigatorio, por favor completelo");
       }

}) })

console.log()
var onchange = function(campo){
campo.onchange = function(){
var attribute = this.name;
  if (this.value.length < 3){
  return alert("El " +attribute+ " debe tener minimo 3 caracteres")
} }}

onchange(nombre)
onchange(apellido)
onchange(barrio)
onchange(postal)
onchange(alias)
onchange(telefono)
onchange(ciudad)

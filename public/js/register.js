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




formularioRegistro.onsubmit = function(event){
let arrayElementos = Array.from(elementosFormulario);
arrayElementos.splice(14, 5)
arrayElementos.forEach(function(elementos){
    var attribute = elementos.name;
    if (elementos.value == ""){
event.preventDefault();
      return elementos.value  = prompt("El campo "+ attribute +" es olbigatorio, por favor completelo");

       }})}



var onchange = function(campo, caracteres){
campo.onchange = function(){
var attribute = campo.name;
  if (campo.value.length < caracteres){
  return alert("El campo " + attribute + " debe tener minimo " +caracteres + " caracteres")
} }}

onchange(nombre, 3)
onchange(apellido, 3)
onchange(barrio, 4)
onchange(postal, 4)
onchange(alias, 8)
onchange(telefono, 10)
onchange(ciudad, 6)

var nombre = document.getElementById('Nombre'),
mail =  document.getElementById('mail'),
error = document.getElementById('error');
error.style.color = 'red';


function Validacion(){
console.log('enviando formulario...');
var mensajesError = [];

if(nombre.value === null || nombre.value === ''){
    mensajesError.push('Ingresa tu nombre');
}
if(mail.value === null || nombre.value === ''){
    mensajesError.push('Ingresa tu Email');
}
error.innerHTML =   mensajesError.join(' e ');
return false;
}

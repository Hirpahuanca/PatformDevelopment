const formulario =document.getElementById('formulario');
const inputs= document.querySelectorAll('#formulario input');

const expresiones = {
	nombre: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y espacios, pueden llevar acentos.
    ocupacion: /^[a-zA-ZÀ-ÿ\s]{1,40}$/,
	correo: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
	telefono: /^\d{1,9}$/, // 
    experiencia: /^[a-zA-ZÀ-ÿ\s]{1,40}$/,
    formacion: /^[a-zA-ZÀ-ÿ\s]{1,40}$/,
    idiomas: /^[a-zA-ZÀ-ÿ\s]{1,40}$/,
    aptitudes: /^[a-zA-ZÀ-ÿ\s]{1,40}$/,
    habilidad: /^[a-zA-ZÀ-ÿ\s]{1,40}$/,
    perfil: /^[a-zA-ZÀ-ÿ\s]{1,40}$/
}

const campos={
    nombre:false,
    ocupacion:false,
    contacto:false,
    telefono:false,
    formacion:false,
    experiencia:false,
    idiomas:false,
    aptitudes:false,
    habilidad:false,
    perfil:false
}

const validarFormulario =(e) => {
    switch (e.target.name){
        case 'nombre':
            validarCampo(expresiones.nombre, e.target,'nombre');
        break;

        case 'ocupacion':
            validarCampo(expresiones.ocupacion, e.target,'ocupacion');
        break;

        case 'contacto':
            validarCampo(expresiones.correo, e.target,'contacto');
        break;

        case 'telefono':
            validarCampo(expresiones.telefono, e.target,'telefono');
        break;

        case 'formacion':
            validarCampo(expresiones.formacion, e.target,'formacion');
        break;

        case 'experiencia':
            validarCampo(expresiones.experiencia, e.target,'experiencia');
        break;

        case 'idiomas':
            validarCampo(expresiones.idiomas, e.target,'idiomas');
        break;

        case 'aptitudes':
            validarCampo(expresiones.aptitudes, e.target,'aptitudes');
        break;

        case 'habilidad':
            validarCampo(expresiones.habilidad, e.target,'habilidad');
        break;

        case 'perfil':
            validarCampo(expresiones.perfil, e.target,'perfil');
        break;
    }
    
}
const validarCampo = (expresion, input, campo) => {
    if(expresion.test(input.value)){
        document.getElementById(`grupo_${campo}`).classList.remove('formulario_grupo-incorrecto');
        document.getElementById(`grupo_${campo}`).classList.add('formulario_grupo-correcto');
        document.querySelector(`#grupo_${campo} i`).classList.add('fa-circle-check');
        document.querySelector(`#grupo_${campo} i`).classList.remove('fa-circle-xmark');
        document.querySelector(`#grupo_${campo} .formulario_error`).classList.remove('formulario_error-activo');
        campos[campo]=true;
    }else{
        document.getElementById(`grupo_${campo}`).classList.add('formulario_grupo-incorrecto');
        document.getElementById(`grupo_${campo}`).classList.remove('formulario_grupo-correcto');
        document.querySelector(`#grupo_${campo} i`).classList.add('fa-circle-xmark');
        document.querySelector(`#grupo_${campo} i`).classList.remove('fa-circle-check');
        document.querySelector(`#grupo_${campo} .formulario_error`).classList.add('formulario_error-activo');
        campos[campo]=false;
    }
}



inputs.forEach((input) => {
    input.addEventListener('keyup', validarFormulario);
    input.addEventListener('blur', validarFormulario);
    
});

const container=document.getElementById('grupo_experiencia_l');
function addInput(){
    let input = document.createElement('input');
    input.placeholder = 'more';
    container.appendChild(input);
}

const container2=document.getElementById('grupo_formacion');
function addInput2(){
    let input = document.createElement('input');
    input.placeholder = 'more';
    container2.appendChild(input);
}

const container3=document.getElementById('grupo_idiomas');
function addInput3(){
    let input = document.createElement('input');
    input.placeholder = 'more';
    container3.appendChild(input);
}

const container4=document.getElementById('grupo_aptitudes');
function addInput4(){
    let input = document.createElement('input');
    input.placeholder = 'more';
    container4.appendChild(input);
}

const container5=document.getElementById('grupo_habilidad');
function addInput5(){
    let input = document.createElement('input');
    input.placeholder = 'more';
    container5.appendChild(input);
}


//comprovacion cunado falta rellenar campos

formulario.addEventListener('submit',(e) => {
    e.preventDefault();
    formulario.reset();
    document.querySelectorAll('.formulario_grupo-correcto').forEach((icono) => {
        icono.classList.remove('formulario_grupo-correcto');
    });
    //if(campos.nombre && campos.ocupacion && campos.contacto && campos.telefono && campos.experiencia && campos.formacion && campos.idiomas && campos.aptitudes && campos.habilidad && campos.perfil){
    //    formulario.reset();
    //   document.querySelectorAll('.formulario_grupo-correcto').forEach((icono) => {
    //        icono.classList.remove('formulario_grupo-correcto');
    //    });
    //}
 
   
});




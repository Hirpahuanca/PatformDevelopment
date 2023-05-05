/*----------------------------mostrar menu.----------------------*/
 const  navMenu=document.getElementById('nav-menu'),
        navToggle=document.getElementById('nav-toggle'),
        navClose=document.getElementById('nav-close')

//validacion si la constante existe--menu desplegado

if(navToggle){
    navToggle.addEventListener('click',()=>{
        navMenu.classList.add('show-menu')
    })
}

//validacion menu oculto

if(navClose){
    navClose.addEventListener('click',()=>{
        navMenu.classList.remove('show-menu')
    })
}

/*----------------------------REMOVER menu.----------------------*/

const navLink=document.querySelectorAll('.nav__link')

const linkAction=()=>{
    const navMenu=document.getElementById('nav-menu')
    navMenu.classList.remove('show-menu')
}

navLink.forEach(n=> n.addEventListener('click',linkAction))

/*----------------------------cambiar de color el header.----------------------*/
const scrollHeader = ()=>{
    const header = document.getElementById('header')
    //console.log(header)
    this.scrollY >=50 ? header.classList.add('bg-header'): header.classList.remove('bg-header')
}
window.addEventListener('scroll',scrollHeader)

/*----------------------------calcular js.---------------------------------------*/
const calculateForm=document.getElementById('calculate-form'),
       calculateCm=document.getElementById('calculate-cm'),
       calculateKg=document.getElementById('calculate-kg'),
       calculateMessage=document.getElementById('calculate-message')

const calculateBmi= (e)=>{
    e.preventDefault()
    //verificar campo
    if(calculateCm.value==='' || calculateKg.value===''){
        //Remover color
        calculateMessage.classList.remove('color-green')
        calculateMessage.classList.add('color-red')

        //mostrar mensaje
        calculateMessage.textContent='Complete los campos respectivos 👩‍💻'
        //remover mensaje despues de 3s
        
        setTimeout ( ()=>{
        calculateMessage.textContent=''
        },3000)
    }else{
        //formila BMI
        const cm= calculateCm.value/100,
              kg= calculateKg.value,
              bmi= Math.round(kg/(cm*cm))

        //mostrar stado de salud
        if(bmi<18.5){
            calculateMessage.classList.add('color-green')
            calculateMessage.textContent =`Your BMI is ${bmi} and you are skinny 😔`
        } else if(bmi<25){
            calculateMessage.classList.add('color-green')
            calculateMessage.textContent =`Your BMI is ${bmi} and you are healthy 🥳`
        }else{
            calculateMessage.classList.add('color-green')
            calculateMessage.textContent =`Your BMI is ${bmi} and you are overweight 😭`
        }

        //limpiar campos
        calculateCm.value=''
        calculateKg.value=''

        //limpiar mensaje
        setTimeout (()=>{
            calculateMessage.textContent=''
        },4000)

    }
}

calculateForm.addEventListener('submit',calculateBmi)

/*----------------------------EMAIL---------------------------------------*/
const contactForm = document.getElementById('contact-form'),
      contactMessage = document.getElementById('contact-message'),
      contactUser = document.getElementById('contact-user')

const sendEmail = (e) => {
    e.preventDefault()

    //check if email
    if(contactUser.value===''){
        //Remover color
        contactMessage.classList.remove('color-green')
        contactMessage.classList.add('color-red')

        //mostrar mensaje
        contactMessage.textContent='Ingrese su email 👆'
        
        //remover mensaje despues de 3s
        setTimeout ( ()=>{
        contactMessage.textContent=''
        },3000)


    }else{
        //enviar email    
        //window.open(`https://api.whatsapp.com/send?phone=${contactUser.value}&text=${contactUser.value}`) //........................ojo
        then(() => {
            //mostar mensaje
            contactMessage.classList.add('color-green')
            contactMessage.textContent =`Su email ha sido enviado 👍`

            //remover mensaje
            setTimeout ( ()=>{
                contactMessage.textContent=''
                },3000)
            })
        
        contactUser.value=''    
        //limpiar mensaje
        setTimeout (()=>{
            calculateMessage.textContent=''
        },4000)
    }
}

contactForm.addEventListener('submit',sendEmail)

/*----------------------------SCROLL SECTIONS ACTIVE LINK---------------------------------------*/
const sections = document.querySelectorAll('section[id]')

const scrollActive = () => {
    
    const scrollY =window.pageYOffset

    sections.forEach(current =>{
        const sectionHeight = current.offsetHeight,
                sectionTop = current.offsetTop - 58,
                sectionId = current.getAttribute('id'),
                sectionsClass = document.querySelector('.nav__menu a[href*= ' + sectionId + ']')


        if(scrollY > sectionTop && scrollY <= sectionTop + sectionHeight){
            sectionsClass.classList.add('active-link')
        }else{
            sectionsClass.classList.remove('active-link')
        }

    })
}
window.addEventListener('scroll', scrollActive)

/*----------------------------SHOW SCROLL UP----------------------------------------------*/
const scrollUp = () => {
    const scrollUp = document.getElementById('scroll-up')
    this.scrollY >= 350? scrollUp.classList.add('show-scroll'):scrollUp.classList.remove('show-scroll')
}

window.addEventListener('scroll', scrollUp)

/*---------------------------- SCROLL ANIMATION----------------------------------------------*/
const sr = ScrollReveal({
    origin:'top',
    distance:'60px',
    duration:2500,
    delay:400,
})
sr.reveal(`.home__data, .footer__container, .footer__group`)
sr.reveal(`.home__img`, {delay: 700, origin: 'bottom'})
sr.reveal(`.logos__img, .program__card, .pricing__card`,{ interval:100})
sr.reveal(`.choose__img, .calculate__content`,{ origin: 'left'})
sr.reveal(`.choose__content, .calculate__img`,{ origin: 'right'})
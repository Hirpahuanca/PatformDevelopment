<?php
    // session_start();

    // if(!isset($_SESSION['usuario'])){
    //     echo'
    //     <script>

    //     alert("POR FAVOR DEBES INICIAR SESIÓN");
    //     window.location = "index.php";
    //     </script>
    //     ';
    //     session_destroy();
    //     die();    
    // }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!----------------------------------ICONO PESTAÑA--------------------------------------------------------->
    <link rel="shortcut icon" href="tools/img/logo.png" type="image/x-icon">
    <!----------------------------------google fonts--------------------------------------------------------->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Quicksand:wght@300;500;700&family=Red+Hat+Display:wght@400;700;900&display=swap" rel="stylesheet">
    <!----------------------------------REMIXICON LIBRARY------------------------------------------------------->

    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
    <!----------------------------------CSS------------------------------------------------------------->
    <link rel="stylesheet" href="tools/css/style.css">


    <!----------------------------------write here------------------------------------------------------->

    <title>Fitness Club-Home</title>
</head>
<body>
    <!----------------------------------HEADER------------------------------------------------------->
    <header class="header" id="header">
        <nav class="nav container">
            <a href="#" class="nav__logo">
                <img src="tools/img/logo.png" alt="logo">FITNESS CLUB
            </a>
            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item">
                        <a href="#home" class="nav__link active-link">Menu</a>
                    </li>
                    <li class="nav__item">
                        <a href="#features" class="nav__link ">Features</a>
                    </li>
                    <li class="nav__item">
                        <a href="#trainers" class="nav__link">Entrenadores</a>
                    </li>
                    <li class="nav__item">
                        <a href="#videos" class="nav__link">Contenido</a>
                    </li>

                    <div class="nav__link">
                        <a href="php/cerrar_sesion.php" class="button nav__button">Salir</a>
                    </div>
                </ul>

                <div class="nav__close" id="nav-close">
                    <i class="ri-close-line"></i>
                </div>

            </div>

            <!--toggle button-->
            <div class="nav__toggle" id="nav-toggle">
                <i class="ri-menu-line"></i>
            </div>

        </nav>
    </header>


    <!------------------------------------------------------MAIN----------------------------------------->
    <main class="home2 ">
        <section class="homeprincipal section">
            <div class="home_slider container grid">
                <div class="wrapper">
                    <div class="box" style="background: linear-gradient(rgba(0,0,0,.3), rgba('0,0,0,.3')), url('tools/img/training.gif');">
                        <div class="contenido section__data">
                            <h3>¡Es hora de entrenar!</h3>
                            <p>Entrena, tu cuerpo y tu alma lo necesitan</p>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!--featura section ------------>

        <section class="features" id="features">
            <h1 class=" titles heading"><span>GYM FEATURES</span></h1>
            <div class="box-container">
                <!------------->
                <div class="box">

                    <div class="image">
                        <img src="tools/img/feature1.webp" alt="">
                    </div>

                    <div class="content_feature">
                        <img src="tools/img/calculate.png" alt="">
                        <div class="feature_data">
                            <h3>Fisicoculturismo</h3>
                            <p>Actividad física que consiste en la realización de un programa de entrenamiento con pesas </p>
                            <a href="#" class="btnbox">Ver mas</a>
                        </div>

                    </div>
                </div>
                <!------------->
                <div class="box second">
                    <div class="image">
                        <img src="tools/img/feature2.webp" alt="">
                    </div>
                    <div class="content_feature">
                        <img src="tools/img/home.png" alt="">
                        <div class="feature_data">
                            <h3>Gym for men</h3>
                            <p>El ejercicio regular y una nutrición adecuada son esenciales para los hombres de todas las edades que les permita mejorar la flexibilidad</p>
                            <a href="#" class="btnbox">Ver mas</a>
                        </div>

                    </div>
                </div>
                <!------------->
                <div class="box">
                    <div class="image">
                        <img src="tools/img/feature3.jpg" alt="">
                    </div>
                    <div class="content_feature">
                        <img src="tools/img/choose3.png" alt="">
                        <div class="feature_data">
                            <h3>Gym for Woman</h3>
                            <p>En mujeres, predominan ejercicios que incrementen la fuerza y quemen grasa.</p>
                            <a href="#" class="btnbox">Ver mas</a>
                        </div>

                    </div>
                </div>
                <!------------->
            </div>
        </section>

        <!-----------------------------------TRAINING SECTION-------------------------------------------->
        <section class="trainers" id="trainers">
            <h1 class="heading"><span>Entrenadores Expertos</span></h1>
            <div class="box-container">

                <!---->
                <div class="box-trainer">
                    <img src="tools/img/choose3.png" alt="">
                    <div class="content_trainer">
                        <span>expert trainer</span>
                        <h3>Sergio Sirena</h3>
                        <div class="share">
                            <ul class="footer__social">
                                <a href="https://www.facebook.com/" target="_blank" class="footer__social-link"><i class="ri-facebook-circle-fill"></i></a>
                                <a href="https://twitter.com/" target="_blank" class="footer__social-link"><i class="ri-twitter-fill"></i></a>
                                <a href="https://www.instagram.com/" target="_blank"  class="footer__social-link"><i class="ri-instagram-fill"></i></a>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="box-trainer">
                    <img src="tools/img/home (2).png" alt="">
                    <div class="content_trainer">
                        <span>expert trainer</span>
                        <h3>Karla Zuñiga</h3>
                        <div class="share">
                            <ul class="footer__social">
                                <a href="https://www.facebook.com/" target="_blank" class="footer__social-link"><i class="ri-facebook-circle-fill"></i></a>
                                <a href="https://twitter.com/" target="_blank" class="footer__social-link"><i class="ri-twitter-fill"></i></a>
                                <a href="https://www.instagram.com/" target="_blank"  class="footer__social-link"><i class="ri-instagram-fill"></i></a>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="box-trainer">
                    <img src="tools/img/calcule3.png" alt="">
                    <div class="content_trainer">
                        <span>expert trainer</span>
                        <h3>Angelica Barreros</h3>
                        <div class="share">
                            <ul class="footer__social">
                                <a href="https://www.facebook.com/" target="_blank" class="footer__social-link"><i class="ri-facebook-circle-fill"></i></a>
                                <a href="https://twitter.com/" target="_blank" class="footer__social-link"><i class="ri-twitter-fill"></i></a>
                                <a href="https://www.instagram.com/" target="_blank"  class="footer__social-link"><i class="ri-instagram-fill"></i></a>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="box-trainer">
                    <img src="tools/img/trainer1.png" alt="">
                    <div class="content_trainer">
                        <span>expert trainer</span>
                        <h3>Fernanda Cuentas</h3>
                        <div class="share">
                            <ul class="footer__social">
                                <a href="https://www.facebook.com/" target="_blank" class="footer__social-link"><i class="ri-facebook-circle-fill"></i></a>
                                <a href="https://twitter.com/" target="_blank" class="footer__social-link"><i class="ri-twitter-fill"></i></a>
                                <a href="https://www.instagram.com/" target="_blank"  class="footer__social-link"><i class="ri-instagram-fill"></i></a>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-----------------------------------CONTENIDO SECTION-------------------------------------------->
        <section class="videos" id="videos">
            <h1 class="heading"><span>Contenido</span></h1>
            <div class="box-container">

                <div class="box-video">
                    <div class="image">
                        <img src="tools/img/training.gif" alt="">
                    </div>
                    <div class="content_video">
                        <div class="feature_data">
                            <h3>Cardio core</h3>
                            <p>Su objetivo principal es mejorar la resistencia cardiovascular</p>
                            <a href="#" class="btnbox">Ver mas</a>
                        </div>
                    </div>
                </div>

                <div class="box-video">
                    <div class="image">
                        <img src="tools/img/training2.gif" alt="">
                    </div>
                    <div class="content_video">
                        <div class="feature_data">
                            <h3>Tonifica Brazos</h3>
                            <p>Se centra en fortalecer y tonificar los músculos de los brazos</p>
                            <a href="#" class="btnbox">Ver mas</a>
                        </div>
                    </div>
                </div>

                <div class="box-video">
                    <div class="image">
                        <img src="tools/img/train3.gif" alt="">
                    </div>
                    <div class="content_video">
                        <div class="feature_data">
                            <h3>Piernas Perfectas</h3>
                            <p>Busca tonificar y fortalecer los músculos de las piernas incluyendo los cuádriceps</p>
                            <a href="#" class="btnbox">Ver mas</a>
                        </div>
                    </div>
                </div>

                <div class="box-video">
                    <div class="image">
                        <img src="tools/img/train4.gif" alt="">
                    </div>
                    <div class="content_video">
                        <div class="feature_data">
                            <h3>Gluteos Perfectos</h3>
                            <p>Se centra en tonificar y fortalecer los músculos de los glúteos</p>
                            <a href="#" class="btnbox">Ver mas</a>
                        </div>
                    </div>
                </div>

                <div class="box-video">
                    <div class="image">
                        <img src="tools/img/train5.gif" alt="">
                    </div>
                    <div class="content_video">
                        <div class="feature_data">
                            <h3>Tonifica Abdomen</h3>
                            <p>Fortalecer y definir los músculos abdominales para lograr un aspecto más firme.</p>
                            <a href="#" class="btnbox">Ver mas</a>
                        </div>
                    </div>
                </div>

                <div class="box-video">
                    <div class="image">
                        <img src="tools/img/train6.gif" alt="">
                    </div>
                    <div class="content_video">
                        <div class="feature_data">
                            <h3>CrossFit</h3>
                            <p>Entrenamiento de alta intensidad para mejorar la fuerza y resistencia.</p>
                            <a href="#" class="btnbox">Ver mas</a>
                        </div>
                    </div>
                </div>

                <div class="box-video">
                    <div class="image">
                        <img src="tools/img/train8.gif" alt="">
                    </div>
                    <div class="content_video">
                        <div class="feature_data">
                            <h3>Zumba</h3>
                            <p>Ejercicio aeróbico que combina música para quemar calorías.</p>
                            <a href="#" class="btnbox">Ver mas</a>
                        </div>
                    </div>
                </div>


                <div class="box-video">
                    <div class="image">
                        <img src="tools/img/train7.gif" alt="">
                    </div>
                    <div class="content_video">
                        <div class="feature_data">
                            <h3>Pilates</h3>
                            <p>Conjunto de ejercicios que se enfocan en mejorar la flexibilidad</p>
                            <a href="#" class="btnbox">Ver mas</a>
                        </div>
                    </div>
                </div>


                


                </div>
            </div>


        </section>
    </main>
    
    <!----------------------------------FOOTER home------------------------------------------------------->
    <footer class="footer section" id="footer">
        <div class="footer__container container grid">
            <div>
                <a href="#" class="footer__logo">
                    <img src="tools/img/logo.png" alt="">FITNESS CLUB
                </a>

                <p class="footer__description">
                    Suscribete a nuestra compañia <br>updates below.
                </p>



                <p class="footer__message" id="contact-message"></p>

            </div>

            <div class="footer__content">
                <div>
                    <h3 class="footer__title">SERVICIOS</h3>

                    <ul class="footer__links">
                        <li>
                            <a href="#" class="footer__link">Flexión Muscular</a>
                        </li>
                        <li>
                            <a href="#" class="footer__link">Cardio</a>
                        </li>
                        <li>
                            <a href="#" class="footer__link">Yoga Básico</a>
                        </li>
                        <li>
                            <a href="#" class="footer__link">Levantamiento de Pesas</a>
                        </li>
                    </ul>
                </div>


                <div>
                    <h3 class="footer__title">PRICING</h3>

                    <ul class="footer__links">
                        <li>
                            <a href="#" class="footer__link">Básico</a>
                        </li>
                        <li>
                            <a href="#" class="footer__link">Premium</a>
                        </li>
                        <li>
                            <a href="#" class="footer__link">Diamond</a>
                        </li>
                    </ul>
                </div>

                <div>
                    <h3 class="footer__title">COMPANY</h3>

                    <ul class="footer__links">
                        <li>
                            <a href="#" class="footer__link">About Us</a>
                        </li>
                        <li>
                            <a href="#" class="footer__link">Careers</a>
                        </li>
                        <li>
                            <a href="#" class="footer__link">Customers</a>
                        </li>
                        <li>
                            <a href="#" class="footer__link">Partnes</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="footer__group">
                <ul class="footer__social">
                    <a href="https://www.facebook.com/" target="_blank" class="footer__social-link"><i class="ri-facebook-circle-fill"></i></a>
                    <a href="https://twitter.com/" target="_blank" class="footer__social-link"><i class="ri-twitter-fill"></i></a>
                    <a href="https://www.instagram.com/" target="_blank"  class="footer__social-link"><i class="ri-instagram-fill"></i></a>
                </ul>

                <span class="footer__copy">
                    &#169; Copyright FITNESS CLUB. All rights reserved
                </span>

            </div>
        </div>
    </footer>
    <!----------------------------------SCROLL UP------------------------------------------------------>
    <a href="#" class="scrollup" id="scroll-up">
        <i class="ri-arrow-up-line"></i>
    </a>
    <!----------------------------------SCROLLREVEAL--------------------------------------------------->
    <script src="tools/js/scrollreveal.min.js"></script>
    <!----------------------------------CORREO JS----------------------------------------------------->
    
    <!----------------------------------MAIN-------------------------------------------------------->
     <script src="tools/js/main.js"></script>
    


</body>
</html>
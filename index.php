<!DOCTYPE html>
<html lang="hu">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="author" content="Molnár Tamás"/>
<meta name="keywords" content="weboldal,webshop,weboldal készítés,webshop készítés,weboldal készítés árak,webáruház készítés árak"/>
<meta name="description" content="Egyedi weboldal és webshop készítés elérhető áron.  Wordpress és mindenféle tartalomkezelő mentesen, egyedileg az Ön igényeire szabva."/>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css"/>

<!--GOOGLE FONTS POPPINS-->
<link rel="preconnect" href="https://fonts.googleapis.com"/>
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet"/>
<link rel="icon" type="image/png" sizes="16x16" href="images/favicon.ico"/>
<!--STYLESHEET-->
<link rel="stylesheet" href="css/style.css"/>
<title>Molnár Tamás · Weboldal / Webshop készítés</title>

<!--Favicon-->
<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png"/>
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png"/>
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png"/>
</head>
<body>

    <!--<nav>
        <div class="container nav1__container">
            <a href="tel:+36307224355"></a><i class="bi bi-phone"></i> +36 30 722 4355</a>
            <a href="mailto:molnartomi199@gmail.com"><i class="bi bi-envelope"></i> molnartomi199@gmail.com</a>
        </div>
    </nav> -->
    
    <nav>
        <div class="container nav__container">
            <a href="index.html" class="nav_logo">
                <img src="./images/irottlogofekete.png" class="img__logo">
            </a>

            <ul class="nav__menu">
                <li><a href="index.html">KEZDŐLAP</a></li>
                <li><a href="#services">SZOLGÁLTATÁSOK</a></li>
                <li><a href="#portfolio">REFERENCIÁK</a></li>
                <li><a href="#contact">KAPCSOLAT</a></li>
                <li>
                    <a href="#contact" id="btn" class="btn btn-primary">Árajánlatot kérek!</a>
                </li>
            </ul>

            <button id="open-menu-btn"><i class="bi bi-list"></i></button>
            <button id="close-menu-btn"><i class="bi bi-x-lg"></i></button>
        </div>
    </nav>
    <!--============== NAVBAR VÉGE ==================-->

    <header>
        <div class="container header__container">
            <div class="header__left">
                <div>
                    <h3>Üdvözlöm!</h3>
                    <h2>Weboldalt vagy Webshopot szeretne?<br>Akkor jó helyen jár!</h2>
                    <p id="name" style="color: rgb(37, 27, 92);"><strong>MolnárTamás</strong><br>vagyok, Webmester. Személyre szabott, egyedi, reszponzív Weboldalak, Webshopok készítésével foglalkozom. Szeretem amit csinálok! Célom, hogy az ügyfeleim maximálisan elégedettek legyenek a munkámmal.</p>
                    <a href="#contact" class="btn btn-primary btn-lg">Kapcsolatfelvétel <i class="bi bi-arrow-down-circle"></i></i></a>
                </div>
            </div>
            
            <div class="header__right">
                <div class="header__image">
                    <img src="./images/kivagottkep.png">
                </div>
                <div class="header__right-bg"></div>
                <ul class="header__socials">
                    <li><a href="https://instagram.com" target="_blank"><i class="bi bi-instagram"></i></a></li>
                    <li><a href="https://facebook.com" target="_blank"><i class="bi bi-facebook"></i></a></li>
                    <li><a href="https://linkedin.com" target="_blank"><i class="bi bi-linkedin"></i></a></li>
                </ul>
            </div>
        </div>
    </header>
     <!--============== HEADER VÉGE ==================-->

    <!--============== COMPANIES ==================-->

<!--
    <section id="companies">
        <div class="container companies__container">
            <span><img src="images/companies1.png"></span>
            <span><img src="images/companies1.png"></span>
            <span><img src="images/companies1.png"></span>
            <span><img src="images/companies1.png"></span>
            <span><img src="images/companies1.png"></span>
            <span><img src="images/companies1.png"></span>
        </div>
    </section>

-->
    <!--============== COMPANIES VÉGE ==================-->

 <!--============== SERVICES ==================-->

    <section id="services">
        <div class="container services__container">

            <div class="services__circle"><img src="images/circle.svg"></div>

            <div class="services__right">
                <h2>Szolgáltatások</h2>
                <div class="services__cards">

                    <div class="services__card">
                        <span><img src="images/internet (1).png"></span>
                        <h5>Weboldal / Webshop készítés</h5>
                        <a href="#">Érdekel <i class="bi bi-arrow-right"></i></a>
                    </div>

                    <div class="services__card">
                        <span><img src="images/coding (1).png"></span>
                        <h5>Webshop karbantartás / üzemeltetés</h5>
                        <a href="#">Érdekel <i class="bi bi-arrow-right"></i></a>
                    </div>

                    <div class="services__card">
                        <span><img src="images/sketch.png"></span>
                        <h5>Logó tervezés</h5>
                        <a href="#">Érdekel <i class="bi bi-arrow-right"></i></a>
                    </div>

                    <div class="services__card">
                        <span><img src="images/brand (1).png"></span>
                        <h5>Branding Design</h5>
                        <a href="#">Érdekel <i class="bi bi-arrow-right"></i></a>
                    </div>

                    <div id="off__service" class="services__card">
                        <span><img src="images/camera (1).png"></span>
                        <h5>Portfólió / Termék fotózás</h5>
                        <p>Hamarosan</p>
                        <a href="#">Érdekel <i class="bi bi-arrow-right"></i></a>
                    </div>

                    <div class="services__card">
                        <span><img src="images/social-media (1).png"></span>
                        <h5>Social média kezelése</h5>
                        <a href="#">Érdekel <i class="bi bi-arrow-right"></i></a>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!--============== SZOLGÁLTATÁSOK VÉGE ==================-->


    <section id="portfolio">
        <div class="container portfolio__container">
            <div class="portfolio__head">
                <h3>Referencia munkáim</h3>
            </div>

            <div class="portfolio__projects">
                <article class="portfolio__project">
                    <span class="portfolio__project-image"><img src="images/localhost_bakaeszter_index.php (1).png"></span>
                    <div class="portfolio__cta">
                        <a href="https://behance.net" class="btn btn-primary" target="_blank">Megtekintés</a>
                    </div>
                </article>
                <article class="portfolio__project">
                    <span class="portfolio__project-image"><img src="./images/Personal-Portfolio-Website-Landing-Page-Template-scaled.jpg"></span>
                    <div class="portfolio__cta">
                        <a href="https://behance.net" class="btn btn-primary" target="_blank">Megtekintés</a>
                    </div>
                </article>
                <article class="portfolio__project">
                    <span class="portfolio__project-image"><img src="./images/Personal-Portfolio-Website-Landing-Page-Template-scaled.jpg"></span>
                    <div class="portfolio__cta">
                        <a href="https://behance.net" class="btn btn-primary" target="_blank">Megtekintés</a>
                    </div>
                </article>
                <article class="portfolio__project">
                    <span class="portfolio__project-image"><img src="./images/Personal-Portfolio-Website-Landing-Page-Template-scaled.jpg"></span>
                    <div class="portfolio__cta">
                        <a href="https://behance.net" class="btn btn-primary" target="_blank">Megtekintés</a>
                    </div>
                </article>
            </div>
        </div>
    </section>

<!--============== PORTFÓLIÓ VÉGE ==================-->

    <section id="contact">
        <div class="container contact__container">
            <div class="contact__left">
                <h2>Írjon üzenetet:</h2>
                <p>Igyekszem minél előbb válaszolni az üzenetre! Gyorsabb elérés érdekében, hívjon a megadott telefonszámon.<br>  Köszönettel: Tamás</p>
                <div class="tel__email">
                    <a href="tel:+36307224355"><i class="bi bi-phone"></i> +36 30 722 4355</a>
                    <a href="mailto:molnartomi199@gmail.com"><i class="bi bi-envelope"></i> molnartomi199@gmail.com</a>
                </div>
                <ul class="contact__socials">
                    <li><a href="https://instagram.com" target="_blank"><i class="bi bi-instagram"></i></a></li>
                    <li><a href="https://facebook.com" target="_blank"><i class="bi bi-facebook"></i></a></li>
                    <li><a href="https://linkedin.com" target="_blank"><i class="bi bi-linkedin"></i></a></li>
                </ul>
            </div>

            <!--============== PHP Mailer eleje ==================-->
            <?php

                require "PHPMailer/Exception.php";
                require "PHPMailer/PHPMailer.php";
                require "PHPMailer/SMTP.php";

                use PHPMailer\PHPMailer\PHPMailer;
                use PHPMailer\PHPMailer\SMTP;
                use PHPMailer\PHPMailer\Exception;

                $mail = new PHPMailer(true);

                $msg = "";

                if(isset($_POST["send"])){

                    try{
                        

                        //Emailező szerver beállításai
                        $mail->isSMTP();                                       
                        $mail->Host = "smtp.gmail.com";                          
                        $mail->SMTPAuth = true;                                
                        $mail->Username = "mtweboldal@gmail.com";             
                        $mail->Password = "Webmester23";                        
                        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;     
                        $mail->Port = 587;                                    
                        $mail->CharSet = "UTF-8";                               

                        //Email adatainak beállítása
                        $mail->setFrom($_POST["Email"], $_POST["Name"]);     
                        $mail->addAddress("mtweboldal@gmail.com");                               
                                                    


                        //Email tartalmi beállításai
                        $mail->isHTML(true);     
                        $mail->Subject = $_POST["Email"];                      
                        $mail->Body = nl2br($_POST["message"]);         

                        $mail->send();                                  
                        $msg = "Levél sikeresen elküldve!";

                        

                    }
                    catch(Exception $e){

                        $msg = "Levél küldése sikertelen: ".$mail->ErrorInfo;
                    }
                }

            ?>
            <!--============== PHP Mailer vége ==================-->

            <form action="" enctype="multipart/form-data" method="POST">

                <span class="mb-3"><?php if(!empty($msg)){echo $msg;}  ?></span>

                <input type="text" name="Name" placeholder="Név" required>
                <input type="email" name="Email" placeholder="E-mail cím" required>
                <textarea name="message" rows="6" placeholder="Üzenet"></textarea>
                <button type="submit" class="btn" name="send">Küldés <i class="bi bi-arrow-right-circle"></i></button>
            </form>
        </div>
    </section>

    <footer>
        <small>Copyright &copy; Molnár Tamás 2022</small>
    </footer>


    <script src="js/main.js"></script>
    

</body>
</html>
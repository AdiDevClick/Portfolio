<?php
///include "Functions.php";
//include "includes/formhandler.php"

?>

<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clic Répare</title>
    <link rel="icon" href="icons/icon.webp" type="image/x-icon">
    <script src="js/main.js" defer></script>
    <!-- We are using local fonts -->
    <!-- Reactivate this in order to use CDN based Google Fonts
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400;700&family=Roboto:wght@100;300&display=swap" rel="stylesheet"> 
    !-->
    <!-- Links to our stylesheets -->
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/index.css">
</head>
<body>

    <!-- Burger menu for mobile version -->
    <nav class="burger-menu">
        <ul >
            <li><a href="Index.php">HOME</a></li>
            <li><a href="#categorie">GALLERY</a></li>
            <li><a href="#contact">CONTACT</a></li>
            <li><a href="#about">ABOUT US</a></li>
        </ul>
    </nav>
    <!-- Burger menu stop-->

    <!-- The header navbar (top)-->
    <header class="header-main">
            <div class="header-main-logo">
                <img src="img/logo.webp" alt="Clicrepare logo">
                <!--    To center the nav bar instead of sticky left, 
                        move the nav tag to outside the div tag -->
                <nav class="header-main-nav">
                    <ul >
                        <li><a href="Index.php">HOME</a></li>
                        <li><a href="#categorie">GALLERY</a></li>
                        <li><a href="Contact.php">CONTACT</a></li>
                        <li><a href="#about">ABOUT US</a></li>
                    </ul>
                </nav> 
            </div> 
            <!-- move the nav tag just here to center it -->  
                
            <div class="header-main-sm"> 
                <a href="www.facebook.com">
                    <div class="header-main-sm-fb"></div>
                </a>
                <a href="www.facebook.com">
                    <div class="header-main-sm-insta"></div>
                </a>
                <div class="burger-menu-btn"></div>
            </div>
    </header>

    <!-- The hero section of our website -->
    <main>
        <div class="wrapper-main-hero main-hero-flex">
            <div class="main-intro">
                <h1>Bienvenue<br>sur<br> Clic répare</h1>
                <p> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cupiditate, 
                rerum commodi nihil mollitia  <br> 
                non aspernatur hic repellat in, tenetur quia.<br>
                Saepe dolore dolor illum voluptate.</p>
                <a href="#">MY WORK</a>            
            </div>

            <div class="main-quotes">
                <p> "The more that you read, <br>the more things you will know. <br> 
                The more that you learn, the more places.<br>
                you'll go." <br><br> - Dr Seuss</p>
                <p>"For the best return on your money, <br>pour your purse. <br> 
                into your head".<br><br> - Benjamin Franklin</p>
            </div>
        </div>
    </main>

    <!-- The category section of our website -->
    <section class="index-category" id="categorie">
        <p>Categories</p>
        <a href="#" class="index-category-box">
            <div class="dark-overlay"></div>
            <h3>Web Development</h3>
        </a>
        <a href="#" class="index-category-box">
            <div class="dark-overlay"></div>
            <h3>Movie Production</h3>
        </a>
        <a href="#" class="index-category-box">
            <div class="dark-overlay"></div>    
            <h3>Film Editing</h3>
        </a>
        <a href="#" class="index-category-box">
            <div class="dark-overlay"></div>
            <h3>Graphic Design</h3>
        </a>        
    </section>

    <!-- The about section of our website -->
    <section class="index-about">
        <div class="wrapper-main index-about-flex">
            <div class="index-about-img">
                <img src="img/Moi.png" alt="About Me image">
            </div>
            <div class="index-about-text" id="contact">
                <h2>A propos de moi</h2>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                    Explicabo corrupti at nulla nam delectus,<br> 
                    alias culpa laborum quod praesentium tempore 
                    dicta eveniet consequatur earum assumenda dolore, 
                    saepe, illum doloremque aliquam.
                </p>
                <a href="#">Me contacter</a>
            </div>
            <div class="index-about-skill">
                <p> HTML & CSS</p>
                <div class="index-about-skill-bar">
                    <div class="index-about-skill-bar-fill htmlcss"></div>
                </div>
                <p> ADOBE PREMIERE</p>
                <div class="index-about-skill-bar">
                    <div class="index-about-skill-bar-fill ap"></div>
                </div>
                <p> ADOBE PHOTOSOP</p>
                <div class="index-about-skill-bar">
                    <div class="index-about-skill-bar-fill ps"></div>
                </div>
                <p> JAVASCRIPT</p>
                <div class="index-about-skill-bar">
                    <div class="index-about-skill-bar-fill js"></div>
                </div>
                <p> PHP & SYMFONY </p>
                <div class="index-about-skill-bar">
                    <div class="index-about-skill-bar-fill php"></div>
                </div>
                <p> WORDPRESS </p>
                <div class="index-about-skill-bar">
                    <div class="index-about-skill-bar-fill wp"></div>
                </div>
            </div> 
        </div>  
    </section>

    <!-- The Footer of our website -->
    <footer class="footer-main">
        <div class="wrapper-main footer-main-flex">
            <div class="footer-testimony">
                <img src="img/Portraits/1.jpg" alt="testimony">
                <p>"Lorem ipsum dolor, Eveniet, 
                    sint? maxime iusto facilis molestiae similique 
                    nam nemo temporibus voluptatum?"            
                </p>
            </div>
            <div class="footer-testimony">
                <img src="img/Portraits/2.jpg" alt="testimony">
                <p>"Lorem ipsum dolor, Eveniet, 
                    sint? maxime iusto facilis molestiae similique 
                    nam nemo temporibus voluptatum?"            
                </p>
            </div>
            <div class="footer-testimony">
                <img src="img/Portraits/3.jpg" alt="testimony">
                <p>"Lorem ipsum dolor, Eveniet, 
                    sint? maxime iusto facilis molestiae similique 
                    nam nemo temporibus voluptatum?"            
                </p>
            </div>
            <div class="footer-testimony">
                <img src="img/Portraits/4.jpg" alt="testimony">
                <p>"Lorem ipsum dolor, Eveniet, 
                    sint? maxime iusto facilis molestiae similique 
                    nam nemo temporibus voluptatum?"            
                </p>
            </div>
            <div class="footer-testimony">
                <img src="img/Portraits/5.jpg" alt="testimony">
                <p>"Lorem ipsum dolor, Eveniet, 
                    sint? maxime iusto facilis molestiae similique 
                    nam nemo temporibus voluptatum?"            
                </p>
            </div>

            <a class="footer-getintouch" href="#">Get in touch with me</a>

            <div class="footer-sitemap">
                <ul>
                    <li><a href="#">HOME</a></li>
                    <li><a href="#">GALLERY</a></li>
                    <li><a href="#">ABOUT ME</a></li>
                    <li><a href="#">CONTACT</a></li>                
                </ul>
                <ul>
                    <li><a href="#">WEB DEVELOPMENT</a></li>
                    <li><a href="#">MOVIE PRODUCTION</a></li>
                    <li><a href="#">FILM EDITING</a></li>
                    <li><a href="#">GRAPHIC DESIGN</a></li>                
                </ul>
                <ul>
                    <li>
                        <p> Si vous souhaitez un produit personnalisé, 
                            n'hésitez pas à m'envoyer un email ou 
                            m'appeler pour convenir d'un rendez-vous !
                        </p>
                    </li>
                </ul>
                <ul>
                    <li><p>ME CONTACTER :</p></li>
                    <li><p>06 04 53 77 77</p></li>
                    <li><p>ptitbarba@hotmail.com</p></li>
                    <li><p>Rue de la Rhune, 31700 BEAUZELLE</p></li>                
                </ul>
            </div>
        </div>
    </footer>

    <section class="wrapper-main">
        <form action=<?php htmlspecialchars($_SERVER["PHP_SELF"])?> method="get">
            <label for="name"> Nom </label>
            <input type="text" id="name" name="name" placeholder="Votre Nom"value="<?php $saved ?>"> <br>
            <label for="message"> Votre message </label> <br>
            <textarea name="message" id="message" placeholder="Ecrivez votre message" style="width: 50%;"></textarea>
        </form>

    </section>

    <section class="wrapper-main bodytable">
        <table>
            <colgroup>
                <col span="2" style="background-color:aquamarine">
                <col span="1" style="background-color:red">
                <col span="1" style="background-color:aqua;">
            </colgroup>
            <tr>
                <th colspan="1"> Nom </th>
                <th style="width: 400px;"> Couleur des yeux </th>
                <th> Couleur des cheveux </th>
                <th> Age </th>
            </tr>
            <tr>
                <td style="height: 10px;"> Adi </td>
                <td> Vert </td>
                <td> Chatâin foncé</td>
                <td> 37 </td>
            </tr>
            <tr>
                <td colspan="1"> Roukie </td>
                <td> Marron </td>
                <td> Roux </td>
                <td> 8 </td>
            </tr>
            <tr>
                <td colspan="1"> Roukie </td>
                <td> Marron </td>
                <td> Roux </td>
                <td> 8 </td>
            </tr>
            <tr>
                <td colspan="1"> Roukie </td>
                <td> Marron </td>
                <td> Roux </td>
                <td> 8 </td>
            </tr>
        </table>
    </section>
    
</body>
    

</html>












?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clic Répare</title>
    <link rel="icon" href="icons/icon.webp" type="image/x-icon">
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
                        <li><a href="Index.php" class="left_button_header">HOME</a></li>
                        <li><a href="#categorie">GALLERY</a></li>
                        <li><a href="Contact.php">CONTACT</a></li>
                        <li><a href="#about" class="right_button_header">ABOUT US</a></li>
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
    <section class="wrapper-main form-flex">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post">
            <label for="name"> Nom </label>
            <input type="text" id="name" name="name" placeholder="Votre Nom"value="Adrien"> 
            <br><br>
            <label for="message"> Votre message </label>
            <br>
            <textarea name="message" id="message" placeholder="Ecrivez votre message" style="width: 50%;"></textarea>
            <br><br>
            <label> La couleur de vos yeux ? </label>
            <br>
            <input type="radio" id="couleur_vert" name="eyecolor" value="vert">
            <label for="couleur_vert"> Verte </label>
            <input type="radio" id="couleur_marron" name="eyecolor" value="marron">
            <label for="couleur_marron"> Marron </label>
            <input type="radio" id="couleur_bleu" name="eyecolor" value="bleu">
            <label for="couleur_bleu"> Bleue </label>
            <br><br>
            <label> Quel animal avez-vous ? </label>
            <br>
            <input type="checkbox" id="chien" name="chien" value="Chien">
            <label for="chien"> Chien </label>
            <input type="checkbox" id="chat" name="chat" value="Chat">
            <label for="chat"> Chat </label>
            <input type="checkbox" id="furet" name="furet" value="Furet">
            <label for="furet"> Furet </label>
            <br><br>
            <label> Quel voiture possédez-vous ? </label>
            <br>
            <select id="voiture" name="voiture">
                <option value="Choisir"></option>
                <option value="Audi">Audi</option>
                <option value="Peugeot">Peugeot</option>
                <option value="Mercedes">Mercedes</option>
                <option value="BWM">BWM</option>
            </select>
            <button class="button" type="submit" value="submit"> Envoyer </button>
        </form>

    </section>
</body>
</html>
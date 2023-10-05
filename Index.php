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
    <form action=<?php $_SERVER["PHP_SELF"]?> method="post">
    username : <br>
    <input type="text" name="username"><br>
    password :<br>
    <input type="password" name="password"><br>
    <input type="submit" name="submit" value="Log in">
    </form>

    <form action="includes/formhandler.php" method="post">
    <label> <h2> username2 </h2></label> 
    <input type="text" name="username" placeholder="Username"><br>
    <label> <h1> password2 </h1></label>
    <input type="password" name="password" placeholder="Password"><br>
    <label> <h1> email2 </h1></label> 
    <input type="text" name="email" placeholder="Your email"> <br>  <br>
    <button class="button"> Log In </button>
    </form>

    <form action="index.php"method="post">
        <label>Enter a country</label><br>
        <input type="text" name="country"><br>
        <input type="submit" value="Submit"><br>
    </form>


    <form action="Index.php" method="post">
        <label>Enter a number to count down from :</label><br>
        <input type="text" name="counter"><br>
        <input type="submit" value="start"><br>
        <input type="submit" value="STOP"><br>
    </form>



    <form action="Index.php" method="POST">
        <label> x :</label>
        <input type="text" name="x" >
        <label> y :</label>
        <input type="text" name="y" >
        <label> z :</label>
        <input type="text" name="z" >
        <button  class="button"> Afficher </button>

    </form> 

</html>


<?php
/*$x = "welove";
$y = "devs";
$z = strlen('y') ? $x:$y;*/

$chiffres =  [
                'X' => $_POST['x'],
                'Y' => $_POST['y'] ,
                'Z' => $_POST['z']
];
$maxi = [];
$mini = [];
//$keys = [];
$keys = array_keys($chiffres);
$values = array_values($chiffres);

//$max = array_search(max($chiffres), $chiffres);

//$maxi = array_keys($chiffres,max($chiffres));

//$test = $keys == $values;
/*foreach ($chiffres as $key => $value) {
    echo '<br>' . $key . $value .'<br>';
    //echo max($chiffres, $keys) ;
    echo '<br> La key est : '. $key;
    echo '<br> Le print de la maxi key est : ';
    //$maxi = max($chiffres, $key);
    echo '<br>Voici la maxi :';
    print_r($maxi);*/
if ($maxi = max($chiffres)) {
    foreach ($maxi as $keys => $values) {
        echo '<br>' . $keys . $values .'<br>';
        echo '<br>Voici la maxi2 :';
        //$maxi2 = max($chiffres);
        print_r($maxi);
        echo "<br>". $maxi . "<br>";
    }
}
//echo array_key_exists($keys, $chiffres);


/*for ($maxi = max($chiffres);
    $maxi < count($chiffres);
    $maxi++
) {
    if ($keys < $chiffres[$maxi]) {
        $keys = $chiffres[$maxi];
        return $keys;
    }
    //$value3 = max($chiffres, $chiffres);
}

print_r($keys);
echo "Test";
//print_r ($keys) ;
/*$value = $chiffres[0];
$n = count($chiffres);
for($i = 0;
$i < $n;
$i++) {
if ($value < $chiffres[$i]) {
    $value = $chiffres[$i];
}
}
echo $value;




//$mini = min($chiffres);
//extract($chiffres);

echo "<br><br><br>";
//echo "ce chiffre ". $keys ." et cette lettre ". $value ."<br>";


//echo $chiffres;
//print_r($chiffres) ;

/*$x = $_POST["x"];
$y = $_POST["y"];
$z = $_POST["z"];
$maxtotal = null;
$mintotal = null;
$letter = null;

$total = rand(50, 100);
$maxtotal = max($x, $y, $z);
$mintotal = min($x, $y, $z);
$totals = array($mintotal, $maxtotal);
echo "<br>";
echo "$total <br>";

echo ($mintotal == null || $maxtotal == null ? 'Il y a une erreur, veuillez saisir un chiffre' :
 ($mintotal == $x ? "Le plus petit chiffre est X, c'est le chiffre $x et le grand c'est $maxtotal" :
 ($mintotal == $y ? "Le plus petit chiffre est Y, c'est le chiffre $y et le grand c'est $maxtotal" :
 ($mintotal == $z ? "Le plus petit chiffre est Z, c'est le chiffre $z et le grand c'est $maxtotal" : "erreur"))));

//On compare $mintotal, donc x, y et z et on sort les chiffre et une lettre associée.
echo ($mintotal == null ? 'Il y a une erreur, veuillez saisir un chiffre' :
 ($mintotal == $x ? "Le plus petit chiffre est X, c'est le chiffre $x" :
 ($mintotal == $y ? "Le plus petit chiffre est Y, c'est le chiffre $x" :
 ($mintotal == $z ? "Le plus petit chiffre est Z, c'est le chiffre $x" : "erreur"))));
echo "<br>";
//On compare $maxtotal, donc x, y et z et on sort les chiffre et une lettre associée.
echo ($maxtotal == null ? 'Il y a une erreur, veuillez saisir un chiffre' :
 ($maxtotal == $x ? "Le plus grand chiffre est X, c'est le chiffre $x" :
 ($maxtotal == $y ? "Le plus grand chiffre est Y, c'est le chiffre $x" :
 ($maxtotal == $z ? "Le plus grand chiffre est Z, c'est le chiffre $x" : 'Il y a une erreur'))));

//On compare $mintotal, donc x, y et z et on sort les chiffre et une lettre associée.
if  ($mintotal == $x) {
($letter = "X");
} elseif  ($mintotal == $z) {
($letter = "Z");
} elseif  ($mintotal == $y) {
($letter = "Y");
}

echo "<br> <br>";
echo "Le plus grand chiffre c'est $maxtotal et correspond à la lettre $letter <br>";
echo "Le plus petit chiffre c'est $mintotal et correspond à la lettre $letter <br>";
/*echo "<br>";
echo $z . "<br>";
echo "<br>";
echo "\n";

$a = 2;



echo ($a == 1 ? 'one' :
 ($a == 3 ? 'three' :
 ($a == 2 ? 'four' : 'three')));

echo "\n";*/



/*if (isset($_POST["login"])) {
    $username = htmlspecialchars($_POST["username"]);
    $password = htmlspecialchars($_POST["password"]);
    $email = htmlspecialchars($_POST["email"]);
    echo"Hello ".$username."<br>" ."<br>";
    echo"Your password is : ".$password."<br>";
    $informations =    [$email,
                        $password,
                        $username];
    //$missing = $informations;

}
    //echo Class Functions($email, $password, $username);


    echo  isMissing($email, $password, $username) ."<br>";




/*for ($i = 0;
     $i > count($missing);
     $i++) {*/
//if (!empty($email & $password & $username)) {





/*$capitals =  array( "USA"   => "Washington D.C.",
                    "FRANCE" => "Paris",
                    "JAPAN" => "Tokyo",
                    "INDIA" => "New Delhi" );
$capitals["USA"] = "Las Vegas";
$capitals["China"] = "Beijing";
$keys = array_keys($capitals);
$values = array_values($capitals);


$capital = $capitals[$_POST["country"]];

echo "The capital is $capital <br>";

foreach ($keys as $key) {
echo "$key <br>";
}
foreach ($values as $value) {
echo "$value <br>";
}

//$foods[0] = "pineapple";
//array_push($foods, "pineapple", "kiwi");
//array_pop($foods);
//array_shift($foods);
//$reversed_foods = array_reverse($foods);
//echo count($foods);


//foreach($foods as $food) {
//echo $food . "<br>";
//}



$counter = $_POST["counter"];

while ($counter) {
$counter = (isset($_POST["STOP"])) ? false : 5;
echo $counter . "HHHAAHHAHA <br>";
}

for ($i = $counter; $i >= 0; $i -= 5) {
echo $i . "lolipop <br>";
}


for ($i = 100; $i > 0; $i -= 10) {
echo $i . "<br>";
}

$date = date("l");
switch ($date) {
case "Monday":
    echo "I hate Mondays <br>.";
    break;
case "Tuesday":
    echo "It is taco Tuesdays. <br>";
    break;
case "Wednesday":
    echo "I hate Wednesdays. <br>";
    break;
case "Thursday":
    echo "I hate Thuersdays <br>";
    break;
case "Friday":
    echo "I hate Fridays <br>";
    break;
case "Saturday":
    echo "I love Saturdays. <br>";
    break;
case "Sunday":
    echo "Time to relax on Sundays. <br>";
    break;
default:
    echo "This isn't a valide $date <br>";
}






$child = false;
$senior = false;
$ticket_price = null;

$ticket_price = ($child || $senior) ? 10 : 15;

echo "The ticket price is {$ticket_price}€. <br>";*/

/*$x = $_POST["x"];
$y = $_POST["y"];
$z = $_POST["z"];
$maxtotal = null;
$mintotal = null;
$letter = null;

//$total = abs($x);
//$total = round($x);
//$total = floor($x);
//$total = ceil($x);
//$total = sqrt($x);
//$total = pow($x, $y);
$total = rand(50, 100);
$maxtotal = max($x, $y, $z);
$mintotal = min($x, $y, $z);
$totals = array($mintotal, $maxtotal);
echo "$total <br>";

$result = match ($totals) {
    $maxtotal => "test",
    $mintotal => "test2",
    default => "Rien trouvé",
};
echo $result;


foreach  ($totals as $totalminmax) {
    if    ($totalminmax = $x) {
        $totalminmax = $letter;
        $letter = "X";
    }
}
foreach  ($totals as $totalminmax) {
    if ($totalminmax = $z) {
        $letter = "Z";
        $letter = $totalminmax;
    }
}
foreach  ($totals as $totalminmax) {
    $letter = "Y";
    $letter = $totalminmax;
}

echo "Le plus grand chiffre c'est $maxtotal et correspond à la lettre $letter <br>";
echo "Le plus petit chiffre c'est $mintotal et correspond à la lettre $letter <br>";
echo "C'est donc la lettre $letter <br>";

switch ($maxtotal) {
    case "$x":
        echo "C'est X avec la valeur max $maxtotal <br>";
        $letter = "X";
        break;
    case "$z":
        echo "C'est Z avec la valeur max $maxtotal <br>";
        $letter = "Z";
        break;
    case "$y":
        echo "C'est Y avec la valeur max $maxtotal <br>";
        $letter = "Y";
        break;
    default:
        echo "$maxtotal est étrange <br>";
}
switch ($mintotal) {
    case "$x":
        echo "C'est X avec la valeur min $mintotal <br>";
        $letter = "X";
        break;
    case "$z":
        echo "C'est Z avec la valeur min $mintotal <br>";
        $letter = "Z";
        break;
    case "$y":
        echo "C'est Y avec la valeur min $mintotal <br>";
        $letter = "Y";
        break;
    default:
        echo "$mintotal est étrange <br>";
}




if  ($mintotal == $x) {
    ($letter = "X");
} elseif  ($mintotal == $z) {
    ($letter = "Z");
} elseif  ($mintotal == $y) {
    ($letter = "Y");
}

echo "Le plus petit chiffre c'est $mintotal et correspond à la lettre $letter <br>";
echo "C'est donc la lettre $letter <br>";


/*if  ($total == $z)  ($letter = "Z");
echo "Le plus grand chiffre c'est $z et correspond à la lettre Z <br>";
echo "C'est donc la lettre $letter <br>";


if  ($total == $y) ($letter = "Y");
echo "Le plus grand chiffre c'est $y et correspond à la lettre Y <br>";
echo "C'est donc la lettre $letter <br>";
*/

//elseif ($number == $z);


//echo "c'est X le plus grand <br>";
//echo "X = {$x}<br>";
//echo "number";
//else echo "$z c'est Z" ;
//return $z;
//else echo "$y c'est Y" ;
//return $y;



/*$item = "pizza";
$price = 4.99;
//$quantity = $_GET["quantity"];
//$total = null;

//$total = $quantity * $price;

//echo "<br> You ordered $quantity x {$item}s <br>";
//echo "Your total is : {$total}€ <br>";

//echo "{$_POST["username"]} <br>";
//echo "{$_POST["password"]} <br>";


$name = "Adi";
$food = "burger";
$email = "fake@gmail.com";

$age = 37;
$users = 2;
$quantity = 10;

$GPA = 2.5;
$price = 4.99;

$employed = false;
$online = false;
$for_sale = true;

//$total = null;



echo "<br> Hello {$name} <br>";
echo "You like {$food} and your age is {$age} <br>";
echo "Your email adress is : {$email} <br>";
echo "You would like to buy {$quantity} steaks <br>";
echo "There are $users users online <br>";

echo "Your GPA is : $GPA <br>";
echo "Your pizza cost : \${$price} <br>";

echo "Online status : $employed <br>";


if ($employed == true)
    echo "<br> You are employed <br>";
        else echo "<br> You aren't employed <br>";

echo "You ordered $quantity $food <br>";
//$total = $quantity * $price;
echo "Your total is : {$total}€ <br>";



//variables

$x = 12;
$y = 2;
$z = null;
$counter = 1;

$z = $y + $x + ($counter +=10);
        echo "<br> z is : $z <br>";

$counter += 3;
echo $counter
*/









?>

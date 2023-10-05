<?php

//include '../Functions.php';
//include '../Index.php';

//var_dump($_SERVER["REQUEST_METHOD"]);

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    require_once"../Functions.php";

    $username = htmlspecialchars($_POST["username"]);
    $password = htmlspecialchars($_POST["password"]);
    $email =    htmlspecialchars($_POST["email"]) && 
                filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);


if (isMissing($username, $email, $password)) {

    /*echo"Hello ".$username."<br>" ."<br>";
    echo"Your password is : ".$password."<br>";
    $informations =    [$email,
                        $password,
                        $username];
    //$missing = $informations;*/
    //header("Location: ../Index.php");
    echo  "<p class='calc-error'> Ca ira pas </p>";

    //echo Class Functions($email, $password, $username);
}

    else {
        header("Location: ../Index.php");
        //echo ("<script>alert('Hello $username, you are now logged in!')</script>");
        //echo ("<script>window.location = '../Index.php';</script>");
        //Ca devrait aller !<br>
        die();
    }

}
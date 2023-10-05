<?php

//We try to check weither the inputs are empty or set



/**
 * Summary of isMissing
 * @param mixed $email
 * @param mixed $password
 * @param mixed $username
 * @return bool
 */
function isMissing(string $username, string $password, string $email)
{
    $missing =  empty($username) ||
                empty($password) ||
                empty($email);
    if ($missing) {
        //echo ("<script>alert('You are missing some informations!')</script>");
        //echo ("<script>window.location = '../Index.php';</script>");
        echo"You are missing some informations" . "<br>";
        return true;
    } else {
        echo "Hello {$username}, you are now logged in<br>";
        return false;
    }
}


/*
//ne fonctionne pas
Class Functions
//($username, $password, $email)
{
        //Properties / Fields
        public $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_FULL_SPECIAL_CHARS);

        public $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_FULL_SPECIAL_CHARS);

        public $email = $_POST["email"];

    //Constructor


    public function __invoke($username = null, $password = null, $email = null)
    {
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
    }


    //Method
    public function getInput() {
    if (isset($_POST["login"])) {
        $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $password = $_POST["password"];
        $email = $_POST["email"];
        echo"Hello ".$username."<br>" ."<br>";

    return "Username :" . $this->username . ", password : " . $this->password;
    }
}

//$sanit = new Sanitized_inputs(test, test);

*/

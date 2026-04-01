
<?php
    session_start();

    $links = "";

    if(!isset($_SESSION["username"])){
        $links = "
            <a href='".LOGIN_URL."' class='general_link inner_border'>Login</a>
            <a href='".REGISTER_URL."' class='general_link inner_border'>Register</a>
        ";
    }
    else{
        $home = LOGOUT_URL;
        $links = "
            <p>Account: " . $_SESSION['username'] . "</p>
            <a href='".$home."' class='inner_border general_link general_font'>Logout</a>
        ";
    }

?>
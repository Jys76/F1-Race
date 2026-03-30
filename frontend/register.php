
<?php
    require_once(__DIR__ . '/core/path_config.php');
    require_once(__DIR__ . '/back/register_back.php');
?>

<html>
    <head>
        <title>F1 Race Register</title>
        <link rel="stylesheet" href="css/register.css">
        <link rel="stylesheet" href="core/style_util.css">
    </head>
    <body class="background_color">
        <div id="center" class="general_border background_color_2">
            <div id="navbar">
                <p class="general_font">F1 Race</p>
                <a href="<?=HOME_URL?>" class="general_link inner_border">Home</a>
            </div>
            
            <h1>Register</h1>
            <form action="" method="POST" id="register_form">
                <div>
                    <label for="username" class="general_font">Username</label>
                    <input type="text" name="username">
                </div>
                <div>
                    <label for="" class="general_font">Email</label>
                    <input type="text" name="email">
                </div>
                <div>
                    <label for="" class="general_font">Password</label>
                    <input type="password" name="password">
                </div>

                <button type="submit" class="general_button">Register</button>
                <p><?=$message !== "" ? $message : ""?></p>
            </form>
        </div>
    </body>
</html>
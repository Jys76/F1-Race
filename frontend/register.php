
<?php
    require_once(__DIR__ . '/core/path_config.php');
?>

<html>
    <head>
        <title>F1 Race Register</title>
        <link rel="stylesheet" href="css/register.css">
        <link rel="stylesheet" href="core/style_util.css">
    </head>
    <body>
        <div id="center" class="general_border">
            <div id="navbar">
                <p class="general_font">F1 Race</p>
                <a href="<?=HOME_URL?>" class="general_link">Home</a>
            </div>
            
            <h1>Register</h1>
            <form action="" method="POST" id="register_form">
                <div>
                    <label for="" class="general_font">Username</label>
                    <input type="text">
                </div>
                <div>
                    <label for="" class="general_font">Email</label>
                    <input type="text">
                </div>
                <div>
                    <label for="" class="general_font">Password</label>
                    <input type="password">
                </div>

                <button type="submit" class="general_button">Register</button>

            </form>
        </div>
    </body>
</html>
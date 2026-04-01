
<?php
    require_once(__DIR__ . '/core/path_config.php');
    require_once(__DIR__ . '/back/login_back.php');
?>

<html>
    <head>
        <title>F1 Race login</title>
        <link rel="stylesheet" href="css/login.css">
        <link rel="stylesheet" href="core/style_util.css">
    </head>
    <body class="background_color">
        <div id="inner_body" class="background_color_2 general_border">

            <div id="navbar">
                <h2>F1 Race</h2>
                <a href="<?= HOME_URL ?>" class="general_link inner_border">Home</a>
            </div>

            <h1>Login</h1>

            <form action="" id="login_form" method="post">
                <div>
                    <label for="email" class="general_font">Email</label>
                    <input type="text" name="email" class="general_input" placeholder="insert">
                </div>
                <div>
                    <label for="password" class="general_font">Password</label>
                    <input type="password" name="password" class="general_input" placeholder="insert">
                </div>
                
                <button type="submit" class="general_button">Login</button>
                <p><?=$message?></p>
            </form>

        </div>
    </body>
</html>
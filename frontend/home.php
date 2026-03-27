
<?php
    require_once(__DIR__ . '/core/path_config.php');
?>

<html>
    <head> 
        <title>F1 Race</title>
        <link rel="stylesheet" href="css/home.css">
        <link rel="stylesheet" href="core/style_util.css">
    </head>
    <body>
        <div id="inner_body">

            <div id="navbar" class="general_border">
                <div id="navbar_title">
                    <h1 class="general_font">F1 Race</h1>
                </div>
                <div id="navbar_right">
                    <a href="<?=LOGIN_URL?>" class="general_link">Login</a>
                    <a href="<?=REGISTER_URL?>" class="general_link">Register</a>
                </div>
            </div>

            <div id="navigation_section" class="general_border">
                <div id="links">
                    <!--Visible-->
                    <a href="<?=TRACK_URL?>" class="general_border general_button">Piste</a>
                    <a href="<?=CHAMP_URL?>" class="general_border general_button">Championship</a>
                    <a href="<?=BOARD_URL?>" class="general_border general_button">Leaderboard</a>
                    <!--Not visible-->
                    <a href="<?=PRENO_URL?>" class="general_border general_button">Prenota Championship</a>
                </div>

                <div id="leclerc">
                    <img src="img/Leclerc.jpg" alt="Charles Leclerc">
                </div>
            </div>

        </div>

        
    </body>
</html>
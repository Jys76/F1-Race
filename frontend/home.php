
<?php
    require_once(__DIR__ . '/core/path_config.php');
?>

<html>
    <head> 
        <title>F1 Race</title>
        <link rel="stylesheet" href="css/home.css">
    </head>
    <body>
        <div id="inner_body">

            <div id="navbar">
                <div id="navbar_title">
                    <h1>F1 Race</h1>
                </div>
                <div id="navbar_right">
                    <a href="<?=LOGIN_URL?>">Login</a>
                    <a href="<?=REGISTER_URL?>">Register</a>
                </div>
            </div>

            <div id="navigation_section">
                <div id="links">
                    <!--Visible-->
                    <a href="<?=TRACK_URL?>">Piste</a>
                    <a href="<?=CHAMP_URL?>">Championship</a>
                    <a href="<?=BOARD_URL?>">Leaderboard</a>
                    <!--Not visible-->
                    <a href="<?=PRENO_URL?>">Prenota Championship</a>
                </div>

                <div id="leclerc">
                    <img src="img/Leclerc.jpg" alt="Charles Leclerc">
                </div>
            </div>

        </div>

        
    </body>
</html>
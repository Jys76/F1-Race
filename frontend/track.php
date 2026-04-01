
<?php
    require_once(__DIR__ . '/core/path_config.php');
    require_once(__DIR__ . '/back/track_back.php');
?>

<html>
    <head>
        <title>F1 Tracks</title>
        <link rel="stylesheet" href="css/general.css">
        <link rel="stylesheet" href="core/style_util.css">
        <link rel="stylesheet" href="css/track.css">
    </head>
    <body class="background_color">

        <div id="navbar" class="general_border background_color_2">
            <h1 class="general_font">F1 Tracks</h1>
            <a href="home.php" class="inner_border general_link">Home</a>
        </div>

        <div id="content" class="background_color_2 general_border scroll_bar">
            <?=$track_table?>
        </div>

    </body>
</html>
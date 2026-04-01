<?php
    require_once(__DIR__ . '/core/path_config.php');
    require_once(__DIR__ . '/back/champ_back.php');
?>

<html>
    <head>
        <title>F1 Championships</title>
        <link rel="stylesheet" href="css/general.css">
        <link rel="stylesheet" href="core/style_util.css">
        <link rel="stylesheet" href="css/champ.css">
        <script src="script/champ.js" defer></script>
    </head>
    <body class="background_color">
        <div id="navbar" class="background_color_2 general_border">
            <h1>F1 Championships</h1>
            <a href="<?=HOME_URL?>" class="inner_border general_link">Home</a>
        </div>
       <div id="content" class="background_color_2 general_border">
            <div id="champ_table_view">
                <?=$champ_view ?? ""?>
            </div>
            <h3>Champion leaderboard: <u class="general_font"><?=$_GET['champ_name'] ?? "Not selected"?></u></h3>
            <div id="leaderboard" class="inner_border inner_background scroll_bar">
                <table id='champ_leaderboard_table'>
                    <tr> 
                        <th>Position</th>
                        <th>Pilot Name</th>
                        <th>Points</th>
                        <th>Prix Played</th>
                    </tr>
                    <?=$leaderboard_view ?? ""?>
                </table>
                
            </div>
       </div>
    </body>
</html>
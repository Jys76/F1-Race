<?php
    require_once(__DIR__ . '/core/path_config.php');
    require_once(__DIR__ . '/back/book_back.php');
?>

<html>
    <head>
        <title>F1 Prenotations</title>
        <link rel="stylesheet" href="core/style_util.css">
        <link rel="stylesheet" href="css/book.css">
        <script src="script/prix.js" defer></script>
    </head>
    <body class="general_body background_color">
        <div id="navbar" class="general_navbar background_color_2 general_border">
            <h1>F1 Reservation</h1>
            <a href="<?=HOME_URL?>" class="general_navbar_link general_link inner_border">Home</a>
        </div>

        <div id="content" class="background_color_2 general_border">
            <h3>Available grand prix</h3>
            <form action="" id="prix_select_form" method="post">
                <input type="text" name="id_prix" id="id_prix">
                <input type="text" name="id_clie_prix_stat" id="id_clie_prix_stat">
                <button type="submit" id="submit_prix"></button>
            </form>
            <table id="prix_table">
                <tr>
                    <th>Champion</th>
                    <th>Track</th>
                    <th>Start date</th>
                    <th>End date</th>
                    <th>Prenota</th>
                </tr>
                <?=$prix_view ?? ""?>
            </table>
        </div>
       
    </body>
</html>
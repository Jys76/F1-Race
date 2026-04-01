<?php
    require_once __DIR__ . '/../query/client.php';
    require_once __DIR__ . "/../core/query_util.php";
    require_once __DIR__ . "/../query/champ.php";
    require_once __DIR__ . "/../view/table_view.php";

    $conn = get_conn();
    $champ_query = champ_select_query();
    $champ_result = execute_default_query($conn, $champ_query);
    $champ_view = champ_table_view($champ_result);

    $id_champ = $_GET['id'] ?? "";
    
    if($id_champ !== ""){
        $leaderboard_query = champ_leaderboard_query();
        $execution = execute_query($conn, $leaderboard_query, [$id_champ]);
        $result = $execution->get_result();

        $leaderboard_view = champ_leaderboard_table_view($result);
    }
?>
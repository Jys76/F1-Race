<?php
    require_once __DIR__ . "/../query/track.php";
    require_once __DIR__ . "/../core/query_util.php";
    require_once __DIR__ . "/../view/table_view.php";

    $conn = get_conn();
    $track_query = get_select_track_query();
    $track_result = execute_default_query($conn, $track_query);
    $track_table = get_track_table($track_result);
?>
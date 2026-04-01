<?php
    require_once __DIR__ . "/../query/prix.php";
    require_once __DIR__ . "/../query/book.php";
    require_once __DIR__ . "/../core/query_util.php";
    require_once __DIR__ . "/../view/table_view.php";

    session_start();

    if(!isset($_SESSION['username'])){
        header("Location: " . LOGIN_URL);
        exit;
    }
    
    $conn = get_conn();
    $prix_query = prix_select_query();
    $prix_result = execute_default_query($conn, $prix_query);
    $prix_view = prix_table_view($prix_result);


    if(
        isset($_POST['id_prix']) &&
        isset($_POST['id_clie_prix_stat'])
    ){
        $id_prix = $_POST['id_prix'];
        $id_clie_prix_stat = $_POST['id_clie_prix_stat'];
        
        if(
            $id_prix !== "" &&
            $id_clie_prix_stat !== ""
        ){
            $book_query = insert_clie_prix();
            execute_query($conn, $book_query, [$_SESSION['clie_id'], $id_prix, $id_clie_prix_stat]);
        }
    }

    
?>
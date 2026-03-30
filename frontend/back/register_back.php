
<?php
    require_once __DIR__ . "/../query/client.php";
    require_once __DIR__ . "/../core/query_util.php";

    $message = "";

    $username = $_POST['username'] ?? "";
    $email = $_POST['email'] ?? "";
    $password = $_POST['password'] ?? "";

    if(
        $username !== "" &&
        $email !== "" &&
        $password !== ""
    ){
        $register_sql = register_insert_query();
        $conn = get_conn();
        try{
            execute_query($conn, $register_sql, [$username, $email, $password]);
        }
        catch(Exception $e){
            $message = "Insert query error";
        }
    }
    else{
        $message = "You must insert all the data";    
    }
?>
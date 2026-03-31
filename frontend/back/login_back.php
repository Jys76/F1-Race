<?php
    require_once __DIR__ . '/../query/client.php';
    require_once __DIR__ . "/../core/query_util.php";

    $message = "";

    if(
        isset($_POST['email']) && 
        isset($_POST['password'])
    ){
        $email = $_POST['email'];
        $password = $_POST['password'];

        if($email !== "" && $password !== ""){
            $conn = get_conn();
            $select_query = login_select_query();
            try{
                $stmt = execute_query($conn, $select_query, [$email, $password]);
                $result = $stmt->get_result();
                $num_rows = $result->num_rows;
            }
            catch(Exception $e){
                $message = "Select query error";
            }
            $num_rows == 1 ? header("Location: " . HOME_URL) : $message = "Incorrect email or password";
        }
        else{
            $message = "You must insert all the value";
        }
    }
?>
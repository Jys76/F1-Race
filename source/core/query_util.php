<?php
    function get_conn(){
        #$conn = mysqli_connect('localhost', "sun", "sun53", "sun_f1race");
        $conn = mysqli_connect('127.0.0.1:3306', "secondary", "secondary2026", "sun_f1race");
        if($conn -> connect_error){
            die("Connection failed . $conn -> connect_error");
        }
        return $conn;
    }

    function execute_query($conn, $sql, $params = []){
        $stmt = $conn -> prepare($sql);

        if(!empty($params)){
            $types = "";
            $values = [];
            
            foreach($params as $param){
                if(is_int($param)){
                    $types .= 'i';
                }
                elseif(is_double($param)){
                    $types .= 'd';
                }
                else{
                    $types .= 's';
                }

                $values[] = $param;
            }

            $bind_names[] = $types;
            for($i = 0; $i < count($values); $i++){
                $bind_names[] = &$values[$i];
            }
            
            call_user_func_array([$stmt, 'bind_param'], $bind_names);
        }
        
        if (!$stmt->execute()) {
            die("Execute error: " . $stmt->error);
        }

        return $stmt;
    }

    
    function execute_default_query($conn, $sql){
        try{
            $result = $conn->query($sql);
            return $result;
        }
        catch(Exception $e){
            die("Query select error");
        }
    }
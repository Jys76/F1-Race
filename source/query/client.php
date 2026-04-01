
<?php
    function register_insert_query(){
            return "
            INSERT INTO clie
                (username, email, password)
            VALUES
                (?, ?, ?)
        ";
    }

    function login_select_query(){
        return "
            SELECT id, username
            FROM clie
            WHERE 
                username = ? &&
                password = ?
            LIMIT 1
        ";
    }
?>
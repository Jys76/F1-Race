
<?php
    function register_insert_query(){
            return "
            INSERT INTO clie
                (username, email, password)
            VALUES
                (?, ?, ?)
        ";
    }
?>
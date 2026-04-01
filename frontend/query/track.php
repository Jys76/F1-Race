
<?php
    function get_select_track_query(){
        return "
            SELECT 
                id, 
                trac_name, 
                img_fname, 
                nation, 
                (
                    SELECT COUNT(*)
                    FROM prix p
                    WHERE t.id = p.id
                ) AS num_prix
            FROM trac t
        ";
    }
?>

<?php
    function prix_select_query(){
        return "
            SELECT 
                p.id_trac as id_track,
                c.champ_name as cham_name,
                t.trac_name as track_name,
                p.prix_start_date as start_date,
                p.prix_end_date as end_date
            FROM prix p
            JOIN cham c ON c.id = p.id_cham
            JOIN trac t ON t.id = p.id_trac
            WHERE p.prix_start_date > NOW()
        ";
    }
?>
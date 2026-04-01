
<?php
    function champ_select_query(){
        return "
            SELECT 
                id,
                champ_name,
                champ_start_date,
                champ_end_date
            FROM 
                cham
        ";
    }

    function champ_leaderboard_query(){
        return "
            SELECT 
                c.username as pilot_name,
                sum(cp.points) as points,
                count(cp.id) as prix_played
                
            FROM clie_prix cp
            JOIN clie c ON c.id = cp.id_clie
			JOIN prix p ON p.id = cp.id_prix
            JOIN cham ch ON ch.id = p.id_cham
            
            WHERE ch.id = ?
            GROUP BY id_clie
            ORDER BY points DESC
        ";  
    }
?>
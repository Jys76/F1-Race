
<?php
    function get_track_table($result){
        $table = "
            <table id='track_table'>
                <tr>
                    <th>Id</th>
                    <th>Track name</th>
                    <th>Nation</th>
                    <th>Prix played</th>
                </tr>
        ";

        while($row = $result->fetch_assoc()){
            ob_start()
            ?>
            <tr>
                <td class="table_background"><?=htmlspecialchars($row['id'])?></td>
                <td class="table_background"><?=htmlspecialchars($row['trac_name'])?></td>
                <td class="table_background"><?=htmlspecialchars($row['nation'])?></td>
                <td class="table_background"><?=htmlspecialchars($row['num_prix'])?></td>
            </tr>
            <?php
            $table .= ob_get_clean();
        }
        return $table . "</table>";
    }




    function champ_table_view($result){
        $table = "
            <table id='champ_table'>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                </tr>
        ";

        while($row = $result->fetch_assoc()){
            ob_start();
            ?>
            <tr 
                data-id="<?=$row['id']?>" 
                data-champ_name="<?=htmlspecialchars($row['champ_name'])?>"
                class="champ_row"
            >
                <td class="table_background"><?=htmlspecialchars($row['id'])?></td>
                <td class="table_background"><?=htmlspecialchars($row['champ_name'])?></td>
                <td class="table_background"><?=htmlspecialchars($row['champ_start_date'])?></td>
                <td class="table_background"><?=htmlspecialchars($row['champ_end_date'])?></td>
            </tr>
            <?php
            $table .= ob_get_clean();
        }

        return $table .= "</table>";
    }

    function champ_leaderboard_table_view($result){
        $table = "";
        $pos = 0;
        
        while($row = $result->fetch_assoc()){
            $pos ++;
            ob_start();
            ?>
            <tr>
                <td class="table_background"><?=$pos?></td>
                <td class="table_background"><?=htmlspecialchars($row['pilot_name'])?></td>
                <td class="table_background"><?=htmlspecialchars($row['points'])?></td>
                <td class="table_background"><?=htmlspecialchars($row['prix_played'])?></td>
            </tr>
            <?php
            $table .= ob_get_clean();
        }

        return $table;
    }
?>
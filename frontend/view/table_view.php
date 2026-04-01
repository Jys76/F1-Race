
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
                <td><?=htmlspecialchars($row['id'])?></td>
                <td><?=htmlspecialchars($row['trac_name'])?></td>
                <td><?=htmlspecialchars($row['nation'])?></td>
                <td><?=htmlspecialchars($row['num_prix'])?></td>
            </tr>
            <?php
            $table .= ob_get_clean();
        }
        return $table . "</table>";
    }
?>
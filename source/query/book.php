<?php
    function insert_clie_prix(){
        return "
            INSERT INTO clie_prix
                (id_clie, id_prix, id_clie_prix_stat)
            VALUES
                (?, ?, ?)
        ";
    }
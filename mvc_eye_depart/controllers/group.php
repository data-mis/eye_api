<?php

    function get_group($year){
        $sql = "SELECT * FROM grp WHERE year_='".$year."' ORDER BY name ";

        $results = dbQuery($sql);

        $rows = array();

        while($row = dbFetchAssoc($results)) {
            $rows[] = $row;
        }
        echo json_encode($rows);
    }
?>
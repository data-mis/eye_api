<?php

    function get_users(){
        $sql = "SELECT * FROM user";
	    $results = dbQuery($sql);

        $rows = array();

        while($row = dbFetchAssoc($results)) {
            $rows[] = $row;
        }
        echo json_encode($rows);
    }

    function get_user($id){
        $sql = "SELECT * FROM user WHERE id='".$id."' ";
	    $results = dbQuery($sql);

        $rows = array();

        while($row = dbFetchAssoc($results)) {
            $rows[] = $row;
        }
        echo json_encode($rows);
    }
?>
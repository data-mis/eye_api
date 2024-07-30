<?php

    function cname($field,$table,$key,$value){
        $sql = "SELECT $field FROM $table WHERE $key='".$value."' ";

        $results = dbQuery($sql);

        while($row = dbFetchAssoc($results)) {
            $rows = $row[$field];
        }
        return $rows;
 
    }

    function find_tbllu($field,$title,$key,$value){
        $sql = "SELECT $field FROM tbllu WHERE title='".$title."' AND $key='".$value."' ";

        $results = dbQuery($sql);

        while($row = dbFetchAssoc($results)) {
            $rows = $row[$field];
        }
        return $rows;
    }
?>
<?php

    function get_classgroup($year){
        $sql = "SELECT * FROM grp WHERE year_='".$year."' ORDER BY name ";

        $results = dbQuery($sql);

        $rows = array();

        while($row = dbFetchAssoc($results)) {
            $rows[] = $row;
        }
        echo json_encode($rows);
    }

    function grp_blank(){
        $sql = "SELECT id,std_id,concat(trim(ttl),trim(name),' ',trim(lname)) as name FROM student WHERE grp_id=0 ORDER BY std_id ";

        $results = dbQuery($sql);

        $rows = array();

        while($row = dbFetchAssoc($results)) {
            $rows[] = $row;
        }
        echo json_encode($rows);
    }

    function in_grp($grp_id){
        $sql = "SELECT id,std_id,concat(trim(ttl),trim(name),' ',trim(lname)) as name  FROM student WHERE grp_id='".$grp_id."' ORDER BY std_id ";

        $results = dbQuery($sql);

        $rows = array();

        while($row = dbFetchAssoc($results)) {
            $rows[] = $row;
        }
        echo json_encode($rows);
    }

    function add_grp($year){

        $sql = "SELECT code  FROM tbllu WHERE title='grp' ";

        $results = dbQuery($sql);

        while($row = dbFetchAssoc($results)) {
            $name = $row['code'];

            $sql1 = "INSERT INTO grp SET year_='".$year."',name='".$name."' ";

            $results1 = dbQuery($sql1);
        
        }

    }

    function del_grp($id){
        $sql = "DELETE FROM grp WHERE id='".$id."'";

        $results = dbQuery($sql);
        if($results) {
            echo json_encode(array('success' => 'You delete grp successfully'));
        } else {
            echo json_encode(array('error' => 'Something went wrong, please contact administrator'));
        }
    }

    function add_studenttogrp($grp_id,$id){
        $sql = "UPDATE student SET grp_id='".$grp_id."' WHERE id='".$id."'";

        $results = dbQuery($sql);
        if($results) {
            echo json_encode(array('success' => 'You update student successfully'));
        } else {
            echo json_encode(array('error' => 'Something went wrong, please contact administrator'));
        }
    }

    function del_studenttogrp($id){
        $sql = "UPDATE student SET grp_id=0 WHERE id='".$id."'";

        $results = dbQuery($sql);
        if($results) {
            echo json_encode(array('success' => 'You update student successfully'));
        } else {
            echo json_encode(array('error' => 'Something went wrong, please contact administrator'));
        }
    }

    function update_grp($id,$teacher1,$teacher2,$meq1,$meq2){
        $sql = "UPDATE grp SET teacher1='".$teacher1."',teacher2='".$teacher2."',meq1='".$meq1."',meq2='".$meq2."' WHERE id='".$id."'";

        $results = dbQuery($sql);
        if($results) {
            echo json_encode(array('success' => 'You update grp successfully'));
        } else {
            echo json_encode(array('error' => 'Something went wrong, please contact administrator'));
        }
    }

    function get_advisor(){
        $sql = "SELECT concat(trim(ttl),trim(name),' ',trim(lname)) as name,id FROM advisor ORDER BY adv_id ";

        $results = dbQuery($sql);

        $rows = array();

        while($row = dbFetchAssoc($results)) {
            $rows[] = $row;
        }
        echo json_encode($rows);
    }

    function edit_grp($id,$name,$start,$stop){
        $sql = "UPDATE grp SET name='".$name."',start='".$start."',stop='".$stop."' WHERE id='".$id."'";

        $results = dbQuery($sql);
        if($results) {
            echo json_encode(array('success' => 'You update grp successfully'));
        } else {
            echo json_encode(array('error' => 'Something went wrong, please contact administrator'));
        }
    }


?>
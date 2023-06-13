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

    function get_group_advisor(){
        $sql = "SELECT concat(trim(ttl),trim(name),' ',trim(lname)) as name,id FROM advisor ORDER BY adv_id ";

        $results = dbQuery($sql);

        $rows = array();

        while($row = dbFetchAssoc($results)) {
            $rows[] = $row;
        }
        echo json_encode($rows);
    }

    function get_group_student(){
        $sql = "SELECT id,std_id,concat(trim(ttl),trim(name),' ',trim(lname)) as name FROM student WHERE grp_id=0 ORDER BY std_id ";

        $results = dbQuery($sql);

        $rows = array();

        while($row = dbFetchAssoc($results)) {
            $rows[] = $row;
        }
        echo json_encode($rows);
    }

    function get_in_group_student($grp_id){
        $sql = "SELECT id,std_id,concat(trim(ttl),trim(name),' ',trim(lname)) as name  FROM student WHERE grp_id='".$grp_id."' ORDER BY std_id ";

        $results = dbQuery($sql);

        $rows = array();

        while($row = dbFetchAssoc($results)) {
            $rows[] = $row;
        }
        echo json_encode($rows);
    }

    function add_group_student($grp_id,$id){
        $sql = "UPDATE student SET grp_id='".$grp_id."' WHERE id='".$id."'";

        $results = dbQuery($sql);
        if($results) {
            echo json_encode(array('success' => 'You update grp_id student successfully','status' => TRUE));
        } else {
            echo json_encode(array('error' => 'Something went wrong, please contact administrator','status' => FALSE));
        }
    }

    function delete_group_student($id){
        $sql = "UPDATE student SET grp_id=0 WHERE id='".$id."'";

        $results = dbQuery($sql);
        if($results) {
            echo json_encode(array('success' => 'You update grp_id=0 student successfully','status' => TRUE));
        } else {
            echo json_encode(array('error' => 'Something went wrong, please contact administrator','status' => FALSE));
        }
    }

    function save_group($id,$teacher1,$teacher2,$meq1,$meq2){
        $sql = "UPDATE grp SET teacher1='".$teacher1."',teacher2='".$teacher2."',meq1='".$meq1."',meq2='".$meq2."' WHERE id='".$id."'";

        $results = dbQuery($sql);
        if($results) {
            echo json_encode(array('success' => 'You save group successfully','status' => TRUE));
        } else {
            echo json_encode(array('error' => 'Something went wrong, please contact administrator','status' => FALSE));
        }
    }

    function add_group($year){

        $sql = "SELECT code  FROM tbllu WHERE title='grp' ";

        $results = dbQuery($sql);

        while($row = dbFetchAssoc($results)) {
            $name = $row['code'];

            $sql1 = "INSERT INTO grp SET year_='".$year."',name='".$name."' ";

            $results1 = dbQuery($sql1);
            
        }

        if($results1) {
            echo json_encode(array('success' => 'You add group successfully','status' => TRUE));
        } else {
            echo json_encode(array('error' => 'Something went wrong, please contact administrator','status' => FALSE));
        }

    }

    function delete_group($id){
        $sql = "DELETE FROM grp WHERE id='".$id."'";

        $results = dbQuery($sql);
        if($results) {
            echo json_encode(array('success' => 'You delete group successfully','status' => TRUE));
        } else {
            echo json_encode(array('error' => 'Something went wrong, please contact administrator','status' => FALSE));
        }
    }

    function edit_group($id,$name,$start,$stop){
        $sql = "UPDATE grp SET name='".$name."',start='".$start."',stop='".$stop."' WHERE id='".$id."'";

        $results = dbQuery($sql);
        if($results) {
            echo json_encode(array('success' => 'You edit group successfully','status' => TRUE));
        } else {
            echo json_encode(array('error' => 'Something went wrong, please contact administrator','status' => FALSE));
        }
    }
?>
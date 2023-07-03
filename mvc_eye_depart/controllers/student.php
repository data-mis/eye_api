<?php

    function get_student($year){
        $sql = "SELECT t1.* ,concat(trim(t2.ttl),trim(t2.name),' ',trim(t2.lname)) as advisor_name,t3.name as grp_name 
                FROM student as t1 
                LEFT JOIN advisor as t2 on t1.advisor_id=t2.id 
                LEFT JOIN grp as t3 on t1.grp_id=t3.id 
                WHERE t1.year_='".$year."' 
                ORDER BY t1.id ";

        $results = dbQuery($sql);

        $rows = array();

        while($row = dbFetchAssoc($results)) {
            $rows[] = $row;
        }
        echo json_encode($rows);
    }

    function get_student_advisor(){
        $sql = "SELECT concat(trim(ttl),trim(name),' ',trim(lname)) as name,id 
        FROM advisor 
        ORDER BY adv_id ";
        $results = dbQuery($sql);
        $rows = array();

        while($row = dbFetchAssoc($results)) {
            $rows[] = $row;
        }
        echo json_encode($rows);
    }

    function get_student_grp(){
        $sql = "SELECT name,id,start,stop 
                FROM grp
                WHERE year_=year(curdate()) 
                ORDER BY name ";
        $results = dbQuery($sql);
        $rows = array();

        while($row = dbFetchAssoc($results)) {
            $rows[] = $row;
        }
        echo json_encode($rows);
    }

    function add_student($year,$ttl,$name,$lname,$type,$std_id,$advisor_id,$grp_id,$start,$stop){
        $sql = "INSERT INTO student SET ttl='".$ttl."',name='".$name."',lname='".$lname."',type='".$type."'
                ,std_id='".$std_id."',advisor_id='".$advisor_id."',grp_id='".$grp_id."',year_='".$year."'
                ,start='".$start."',stop='".$stop."' ";

        $results = dbQuery($sql);
        if($results) {
            echo json_encode(array('success' => 'You add student successfully','status' => TRUE));
        } else {
            echo json_encode(array('error' => 'Something went wrong, please contact administrator','status' => FALSE));
        }
    }

    function edit_student($id,$year,$ttl,$name,$lname,$type,$std_id,$advisor_id,$grp_id,$start,$stop){
        $sql = "UPDATE student SET ttl='".$ttl."',name='".$name."',lname='".$lname."',type='".$type."'
                ,std_id='".$std_id."',advisor_id='".$advisor_id."',grp_id='".$grp_id."',year_='".$year."'
                ,start='".$start."',stop='".$stop."'
                WHERE id='".$id."'";

        $results = dbQuery($sql);
        if($results) {
            echo json_encode(array('success' => 'You edit student successfully','status' => TRUE));
        } else {
            echo json_encode(array('error' => 'Something went wrong, please contact administrator','status' => FALSE));
        }
    }

    function delete_student($id){
        $sql = "DELETE FROM student WHERE id='".$id."'";

        $results = dbQuery($sql);
        if($results) {
            echo json_encode(array('success' => 'You delete student successfully','status' => TRUE));
        } else {
            echo json_encode(array('error' => 'Something went wrong, please contact administrator','status' => FALSE));
        }
    }

    function add_student_score($id,$mcq,$osce1,$osce2,$meq1,$meq2,$book){
        $sql = "UPDATE student SET mcq='".$mcq."',osce1='".$osce1."',osce2='".$osce2."',meq1='".$meq1."'
                ,meq2='".$meq2."',book='".$book."'
                WHERE id='".$id."'";

        $results = dbQuery($sql);
        if($results) {
            echo json_encode(array('success' => 'You add score successfully','status' => TRUE));
        } else {
            echo json_encode(array('error' => 'Something went wrong, please contact administrator','status' => FALSE));
        }
    }

    

    

?>
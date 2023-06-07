<?php

    function get_teacher(){
        $sql = " SELECT * FROM advisor ORDER BY name";
        $results = dbQuery($sql);

        while($row = dbFetchAssoc($results)) {
            $rows[] = $row;
        }
        echo json_encode($rows);
    }

    function add_teacher($ttl,$name,$lname,$sex,$pin,$adv_id,$start,$stop){
        $sql = "INSERT INTO advisor SET ttl='".$ttl."',name='".$name."',lname='".$lname."',sex='".$sex."'
                ,pin='".$pin."',adv_id='".$adv_id."',start='".$start."',stop='".$stop."' ";

        $results = dbQuery($sql);
        if($results) {
            echo json_encode(array('success' => 'You insert teacher successfully'));
        } else {
            echo json_encode(array('error' => 'Something went wrong, please contact administrator'));
        }
    }

    function delete_teacher($id,$stop){
        //$sql = "DELETE FROM advisor WHERE id='".$id."'";

        $sql = "UPDATE advisor SET stop='".$stop."' WHERE id='".$id."'";

        $results = dbQuery($sql);
        if($results) {
            echo json_encode(array('success' => 'You delete teacher successfully'));
        } else {
            echo json_encode(array('error' => 'Something went wrong, please contact administrator'));
        }
    }

    function edit_teacher($id,$ttl,$name,$lname,$sex,$pin,$adv_id,$start,$stop){
        $sql = "UPDATE advisor SET ttl='".$ttl."',name='".$name."',lname='".$lname."',sex='".$sex."'
                ,pin='".$pin."',adv_id='".$adv_id."',start='".$start."',stop='".$stop."' 
                WHERE id='".$id."'";

        $results = dbQuery($sql);
        if($results) {
            echo json_encode(array('success' => 'You edit teacher successfully'));
        } else {
            echo json_encode(array('error' => 'Something went wrong, please contact administrator'));
        }
    }
?>
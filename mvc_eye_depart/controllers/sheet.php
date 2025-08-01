<?php 
    function get_sheet(){
    
        $sql = "SELECT * FROM sheet ORDER BY name ";

        $results = dbQuery($sql);

        $rows = array();

        while($row = dbFetchAssoc($results)) {
            $rows[] = $row;
        }
        echo json_encode($rows);
    }

    function get_sheet_head($sheet_id){
    
        $sql = "SELECT * FROM sheet_head WHERE sheet_id='".$sheet_id."' ORDER BY no ";

        $results = dbQuery($sql);

        $rows = array();

        while($row = dbFetchAssoc($results)) {
            $rows[] = $row;
        }
        echo json_encode($rows);
    }

    function get_sheet_detail($sheet_id){
    
        $sql = "SELECT * FROM sheet_detail WHERE sheet_id='".$sheet_id."' ORDER BY id ";

        $results = dbQuery($sql);

        $rows = array();

        while($row = dbFetchAssoc($results)) {
            $rows[] = $row;
        }
        echo json_encode($rows);
    }

    function get_sheet_detail_choice($sheet_detail_id){
    
        $sql = "SELECT * FROM sheet_detail_choice WHERE sheet_detail_id='".$sheet_detail_id."' ORDER BY no DESC ";

        $results = dbQuery($sql);

        $rows = array();

        while($row = dbFetchAssoc($results)) {
            $rows[] = $row;
        }
        echo json_encode($rows);
    }

    function add_sheet($name,$start,$stop){
    
        $sql = "INSERT INTO sheet SET name='".$name."',start='".$start."',stop='".$stop."' ";
        $results = dbQuery($sql);
    }

    function edit_sheet($id,$name,$start,$stop){
    
        $sql = "UPDATE sheet SET name='".$name."',start='".$start."',stop='".$stop."' WHERE id='".$id."' ";
        $results = dbQuery($sql);
    }

    function add_sheet_head($sheet_id){
    
        $sql = "INSERT INTO sheet_head SET sheet_id='".$sheet_id."' ";
        $results = dbQuery($sql);
    }

    function delete_sheet_head($id){
    
        $sql = " DELETE FROM sheet_head WHERE id='".$id."' ";
        $results = dbQuery($sql);
    }

    function add_sheet_detail($sheet_id){
    
        $sql = "INSERT INTO sheet_detail  SET sheet_id='".$sheet_id."' ";
        $results = dbQuery($sql);
    }

    function delete_sheet_detail($id){
    
        $sql = "DELETE FROM sheet_detail WHERE id='".$id."' ";
        $results = dbQuery($sql);
    }

    function update_sheet_detail($id,$txt,$score,$real_score,$score_type){
    
        $sql = "UPDATE sheet_detail SET txt='".$txt."',score='".$score."',real_score='".$real_score."',score_type='".$score_type."' WHERE id='".$id."' ";
        $results = dbQuery($sql);
    }

    function update_sheet($id,$note){
    
        $sql = "UPDATE sheet SET note='".$note."' WHERE id='".$id."' ";
        $results = dbQuery($sql);
    }

    function update_sheet_head($id,$txt,$type,$no){
    
        $sql = "UPDATE sheet_head SET txt='".$txt."',type='".$type."',no='".$no."' WHERE id='".$id."' ";
        $results = dbQuery($sql);
    }

    function add_sheet_detail_choice($sheet_detail_id){
    
        $sql = "INSERT INTO sheet_detail_choice   SET sheet_detail_id='".$sheet_detail_id."' ";
        $results = dbQuery($sql);
    }

    function delete_sheet_detail_choice($id){
    
        $sql = "DELETE FORM sheet_detail_choice WHERE id='".$id."' ";
        $results = dbQuery($sql);
    }

    function update_sheet_detail_choice($id,$txt,$score,$type,$no){
    
        $sql = "UPDATE sheet_detail_choice  SET txt='".$txt."',score='".$score."',type='".$type."',no='".$no."' WHERE id='".$id."' ";
        $results = dbQuery($sql);
    }
    
    
?>
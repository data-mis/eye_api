<?php

    router::set('sheet/get_sheet',function(){
        require_once('./controllers/sheet.php');
        $bearer_token = get_bearer_token();
        $is_jwt_valid = is_jwt_valid($bearer_token);
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if($is_jwt_valid) {
                $data = json_decode(file_get_contents("php://input",true));
                get_sheet();
            }else{
                echo json_encode(array('error' => 'Access denied','status' => FALSE));
            }
        }else{
            echo json_encode(array('error' => 'Invalid Method'.' '.$_SERVER['REQUEST_METHOD'],'status' => FALSE)); 
        }
    });

    router::set('sheet/get_sheet_head',function(){
        require_once('./controllers/sheet.php');
        $bearer_token = get_bearer_token();
        $is_jwt_valid = is_jwt_valid($bearer_token);
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if($is_jwt_valid) {
                $data = json_decode(file_get_contents("php://input",true));
                $sheet_id = $data->sheet_id;
                get_sheet_head($sheet_id);
            }else{
                echo json_encode(array('error' => 'Access denied','status' => FALSE));
            }
        }else{
            echo json_encode(array('error' => 'Invalid Method'.' '.$_SERVER['REQUEST_METHOD'],'status' => FALSE)); 
        }
    });

    router::set('sheet/get_sheet_detail',function(){
        require_once('./controllers/sheet.php');
        $bearer_token = get_bearer_token();
        $is_jwt_valid = is_jwt_valid($bearer_token);
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if($is_jwt_valid) {
                $data = json_decode(file_get_contents("php://input",true));
                $sheet_id = $data->sheet_id;
                get_sheet_detail($sheet_id);
            }else{
                echo json_encode(array('error' => 'Access denied','status' => FALSE));
            }
        }else{
            echo json_encode(array('error' => 'Invalid Method'.' '.$_SERVER['REQUEST_METHOD'],'status' => FALSE)); 
        }
    });

    router::set('sheet/get_sheet_detail_choice',function(){
        require_once('./controllers/sheet.php');
        $bearer_token = get_bearer_token();
        $is_jwt_valid = is_jwt_valid($bearer_token);
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if($is_jwt_valid) {
                $data = json_decode(file_get_contents("php://input",true));
                $sheet_detail_id = $data->sheet_detail_id;
                get_sheet_detail_choice($sheet_detail_id);
            }else{
                echo json_encode(array('error' => 'Access denied','status' => FALSE));
            }
        }else{
            echo json_encode(array('error' => 'Invalid Method'.' '.$_SERVER['REQUEST_METHOD'],'status' => FALSE)); 
        }
    });

    router::set('sheet/add_sheet',function(){
        require_once('./controllers/sheet.php');
        $bearer_token = get_bearer_token();
        $is_jwt_valid = is_jwt_valid($bearer_token);
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if($is_jwt_valid) {
                $data = json_decode(file_get_contents("php://input",true));
                $name = $data->name;
                $start = $data->start;
                $stop = $data->stop;
                add_sheet($name,$start,$stop);
            }else{
                echo json_encode(array('error' => 'Access denied','status' => FALSE));
            }
        }else{
            echo json_encode(array('error' => 'Invalid Method'.' '.$_SERVER['REQUEST_METHOD'],'status' => FALSE)); 
        }
    });

    router::set('sheet/edit_sheet',function(){
        require_once('./controllers/sheet.php');
        $bearer_token = get_bearer_token();
        $is_jwt_valid = is_jwt_valid($bearer_token);
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if($is_jwt_valid) {
                $data = json_decode(file_get_contents("php://input",true));
                $id = $data->id;
                $name = $data->name;
                $start = $data->start;
                $stop = $data->stop;
                edit_sheet($name,$start,$stop);
            }else{
                echo json_encode(array('error' => 'Access denied','status' => FALSE));
            }
        }else{
            echo json_encode(array('error' => 'Invalid Method'.' '.$_SERVER['REQUEST_METHOD'],'status' => FALSE)); 
        }
    });

    router::set('sheet/add_sheet_head',function(){
        require_once('./controllers/sheet.php');
        $bearer_token = get_bearer_token();
        $is_jwt_valid = is_jwt_valid($bearer_token);
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if($is_jwt_valid) {
                $data = json_decode(file_get_contents("php://input",true));
                $sheet_id = $data->sheet_id;
                add_sheet_head($sheet_id);
            }else{
                echo json_encode(array('error' => 'Access denied','status' => FALSE));
            }
        }else{
            echo json_encode(array('error' => 'Invalid Method'.' '.$_SERVER['REQUEST_METHOD'],'status' => FALSE)); 
        }
    });

    router::set('sheet/delete_sheet_head',function(){
        require_once('./controllers/sheet.php');
        $bearer_token = get_bearer_token();
        $is_jwt_valid = is_jwt_valid($bearer_token);
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if($is_jwt_valid) {
                $data = json_decode(file_get_contents("php://input",true));
                $id = $data->id;
                delete_sheet_head($id);
            }else{
                echo json_encode(array('error' => 'Access denied','status' => FALSE));
            }
        }else{
            echo json_encode(array('error' => 'Invalid Method'.' '.$_SERVER['REQUEST_METHOD'],'status' => FALSE)); 
        }
    });

    router::set('sheet/add_sheet_detail',function(){
        require_once('./controllers/sheet.php');
        $bearer_token = get_bearer_token();
        $is_jwt_valid = is_jwt_valid($bearer_token);
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if($is_jwt_valid) {
                $data = json_decode(file_get_contents("php://input",true));
                $sheet_id = $data->sheet_id;
                add_sheet_detail($sheet_id);
            }else{
                echo json_encode(array('error' => 'Access denied','status' => FALSE));
            }
        }else{
            echo json_encode(array('error' => 'Invalid Method'.' '.$_SERVER['REQUEST_METHOD'],'status' => FALSE)); 
        }
    });

    router::set('sheet/delete_sheet_detail',function(){
        require_once('./controllers/sheet.php');
        $bearer_token = get_bearer_token();
        $is_jwt_valid = is_jwt_valid($bearer_token);
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if($is_jwt_valid) {
                $data = json_decode(file_get_contents("php://input",true));
                $id = $data->id;
                delete_sheet_detail($id);
            }else{
                echo json_encode(array('error' => 'Access denied','status' => FALSE));
            }
        }else{
            echo json_encode(array('error' => 'Invalid Method'.' '.$_SERVER['REQUEST_METHOD'],'status' => FALSE)); 
        }
    });

    router::set('sheet/update_sheet_detail',function(){
        require_once('./controllers/sheet.php');
        $bearer_token = get_bearer_token();
        $is_jwt_valid = is_jwt_valid($bearer_token);
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if($is_jwt_valid) {
                $data = json_decode(file_get_contents("php://input",true));
                $id = $data->id;
                $txt = $data->txt;
                $score = $data->score;
                $real_score = $data->real_score;
                $score_type = $data->score_type;
                update_sheet_detail($id,$txt,$score,$real_score,$score_type);
            }else{
                echo json_encode(array('error' => 'Access denied','status' => FALSE));
            }
        }else{
            echo json_encode(array('error' => 'Invalid Method'.' '.$_SERVER['REQUEST_METHOD'],'status' => FALSE)); 
        }
    });

    router::set('sheet/update_sheet',function(){
        require_once('./controllers/sheet.php');
        $bearer_token = get_bearer_token();
        $is_jwt_valid = is_jwt_valid($bearer_token);
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if($is_jwt_valid) {
                $data = json_decode(file_get_contents("php://input",true));
                $id = $data->id;
                $note = $data->note;
                update_sheet($id,$note);
            }else{
                echo json_encode(array('error' => 'Access denied','status' => FALSE));
            }
        }else{
            echo json_encode(array('error' => 'Invalid Method'.' '.$_SERVER['REQUEST_METHOD'],'status' => FALSE)); 
        }
    });

    router::set('sheet/update_sheet_head',function(){
        require_once('./controllers/sheet.php');
        $bearer_token = get_bearer_token();
        $is_jwt_valid = is_jwt_valid($bearer_token);
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if($is_jwt_valid) {
                $data = json_decode(file_get_contents("php://input",true));
                $id = $data->id;   // id sheet_head
                $txt = $data->txt;
                $type = $data->type;
                $no = $data->no;
                update_sheet_head($id,$txt,$type,$no);
            }else{
                echo json_encode(array('error' => 'Access denied','status' => FALSE));
            }
        }else{
            echo json_encode(array('error' => 'Invalid Method'.' '.$_SERVER['REQUEST_METHOD'],'status' => FALSE)); 
        }
    });

    router::set('sheet/add_sheet_detail_choice',function(){
        require_once('./controllers/sheet.php');
        $bearer_token = get_bearer_token();
        $is_jwt_valid = is_jwt_valid($bearer_token);
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if($is_jwt_valid) {
                $data = json_decode(file_get_contents("php://input",true));
                $sheet_detail_id = $data->sheet_detail_id;
                add_sheet_detail_choice($sheet_detail_id);
            }else{
                echo json_encode(array('error' => 'Access denied','status' => FALSE));
            }
        }else{
            echo json_encode(array('error' => 'Invalid Method'.' '.$_SERVER['REQUEST_METHOD'],'status' => FALSE)); 
        }
    });

    router::set('sheet/delete_sheet_detail_choice',function(){
        require_once('./controllers/sheet.php');
        $bearer_token = get_bearer_token();
        $is_jwt_valid = is_jwt_valid($bearer_token);
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if($is_jwt_valid) {
                $data = json_decode(file_get_contents("php://input",true));
                $id = $data->id;
                delete_sheet_detail_choice($id);
            }else{
                echo json_encode(array('error' => 'Access denied','status' => FALSE));
            }
        }else{
            echo json_encode(array('error' => 'Invalid Method'.' '.$_SERVER['REQUEST_METHOD'],'status' => FALSE)); 
        }
    });

    router::set('sheet/update_sheet_detail_choice',function(){
        require_once('./controllers/sheet.php');
        $bearer_token = get_bearer_token();
        $is_jwt_valid = is_jwt_valid($bearer_token);
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if($is_jwt_valid) {
                $data = json_decode(file_get_contents("php://input",true));
                $id = $data->id;
                $txt = $data->txt;
                $score = $data->score;
                $type = $data->type;
                $no = $data->no;
                update_sheet_detail_choice($id,$txt,$score,$type,$no);
            }else{
                echo json_encode(array('error' => 'Access denied','status' => FALSE));
            }
        }else{
            echo json_encode(array('error' => 'Invalid Method'.' '.$_SERVER['REQUEST_METHOD'],'status' => FALSE)); 
        }
    });
?>
<?php

     /*  controllers/group  */
     router::set('group/get_group',function(){
        require_once('./controllers/group.php');
        $bearer_token = get_bearer_token();
        $is_jwt_valid = is_jwt_valid($bearer_token);
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if($is_jwt_valid) {
                $data = json_decode(file_get_contents("php://input",true));
                $year = $data->year;
                get_group($year);
            }else{
                echo json_encode(array('error' => 'Access denied','status' => FALSE));
            }
        }else{
            echo json_encode(array('error' => 'Invalid Method'.' '.$_SERVER['REQUEST_METHOD'],'status' => FALSE)); 
        }
    });

    router::set('group/get_group_advisor',function(){
        require_once('./controllers/group.php');
        $bearer_token = get_bearer_token();
        $is_jwt_valid = is_jwt_valid($bearer_token);
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if($is_jwt_valid) {
                $data = json_decode(file_get_contents("php://input",true));
                get_group_advisor();
            }else{
                echo json_encode(array('error' => 'Access denied','status' => FALSE));
            }
        }else{
            echo json_encode(array('error' => 'Invalid Method'.' '.$_SERVER['REQUEST_METHOD'],'status' => FALSE)); 
        }
    });

    router::set('group/get_group_student',function(){
        require_once('./controllers/group.php');
        $bearer_token = get_bearer_token();
        $is_jwt_valid = is_jwt_valid($bearer_token);
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if($is_jwt_valid) {
                $data = json_decode(file_get_contents("php://input",true));
                get_group_student();
            }else{
                echo json_encode(array('error' => 'Access denied','status' => FALSE));
            }
        }else{
            echo json_encode(array('error' => 'Invalid Method'.' '.$_SERVER['REQUEST_METHOD'],'status' => FALSE)); 
        }
    });

    router::set('group/get_in_group_student',function(){
        require_once('./controllers/group.php');
        $bearer_token = get_bearer_token();
        $is_jwt_valid = is_jwt_valid($bearer_token);
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if($is_jwt_valid) {
                $data = json_decode(file_get_contents("php://input",true));
                $grp_id = $data->grp_id;
                get_in_group_student($grp_id);
            }else{
                echo json_encode(array('error' => 'Access denied','status' => FALSE));
            }
        }else{
            echo json_encode(array('error' => 'Invalid Method'.' '.$_SERVER['REQUEST_METHOD'],'status' => FALSE)); 
        }
    });

    router::set('group/add_group_student',function(){
        require_once('./controllers/group.php');
        $bearer_token = get_bearer_token();
        $is_jwt_valid = is_jwt_valid($bearer_token);
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if($is_jwt_valid) {
                $data = json_decode(file_get_contents("php://input",true));
                $grp_id = $data->grp_id;
                $id = $data->id;
                add_group_student($grp_id,$id);
            }else{
                echo json_encode(array('error' => 'Access denied','status' => FALSE));
            }
        }else{
            echo json_encode(array('error' => 'Invalid Method'.' '.$_SERVER['REQUEST_METHOD'],'status' => FALSE)); 
        }
    });

    router::set('group/delete_group_student',function(){
        require_once('./controllers/group.php');
        $bearer_token = get_bearer_token();
        $is_jwt_valid = is_jwt_valid($bearer_token);
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if($is_jwt_valid) {
                $data = json_decode(file_get_contents("php://input",true));
                $id = $data->id;
                delete_group_student($id);
            }else{
                echo json_encode(array('error' => 'Access denied','status' => FALSE));
            }
        }else{
            echo json_encode(array('error' => 'Invalid Method'.' '.$_SERVER['REQUEST_METHOD'],'status' => FALSE)); 
        }
    });

    router::set('group/save_group',function(){
        require_once('./controllers/group.php');
        $bearer_token = get_bearer_token();
        $is_jwt_valid = is_jwt_valid($bearer_token);
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if($is_jwt_valid) {
                $data = json_decode(file_get_contents("php://input",true));
                $id = $data->id;
                $teacher1=$data->teacher1;
                $teacher2=$data->teacher2;
                $meq1=$data->meq1;
                $meq2=$data->meq2;
                save_group($id,$teacher1,$teacher2,$meq1,$meq2);
            }else{
                echo json_encode(array('error' => 'Access denied','status' => FALSE));
            }
        }else{
            echo json_encode(array('error' => 'Invalid Method'.' '.$_SERVER['REQUEST_METHOD'],'status' => FALSE)); 
        }
    });

    router::set('group/add_group',function(){
        require_once('./controllers/group.php');
        $bearer_token = get_bearer_token();
        $is_jwt_valid = is_jwt_valid($bearer_token);
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if($is_jwt_valid) {
                $data = json_decode(file_get_contents("php://input",true));
                $year = $data->year;
                add_group($year);
            }else{
                echo json_encode(array('error' => 'Access denied','status' => FALSE));
            }
        }else{
            echo json_encode(array('error' => 'Invalid Method'.' '.$_SERVER['REQUEST_METHOD'],'status' => FALSE)); 
        }
    });

    router::set('group/delete_group',function(){
        require_once('./controllers/group.php');
        $bearer_token = get_bearer_token();
        $is_jwt_valid = is_jwt_valid($bearer_token);
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if($is_jwt_valid) {
                $data = json_decode(file_get_contents("php://input",true));
                $id = $data->id;
                delete_group($id);
            }else{
                echo json_encode(array('error' => 'Access denied','status' => FALSE));
            }
        }else{
            echo json_encode(array('error' => 'Invalid Method'.' '.$_SERVER['REQUEST_METHOD'],'status' => FALSE)); 
        }
    });

    router::set('group/edit_group',function(){
        require_once('./controllers/group.php');
        $bearer_token = get_bearer_token();
        $is_jwt_valid = is_jwt_valid($bearer_token);
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if($is_jwt_valid) {
                $data = json_decode(file_get_contents("php://input",true));
                $id = $data->id;
                $name = $data->name;
                $start = $data->start;
                $stop = $data->stop;
                edit_group($id,$name,$start,$stop);
            }else{
                echo json_encode(array('error' => 'Access denied','status' => FALSE));
            }
        }else{
            echo json_encode(array('error' => 'Invalid Method'.' '.$_SERVER['REQUEST_METHOD'],'status' => FALSE)); 
        }
    });
?>
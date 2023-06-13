<?php

    /*  controllers/users  */
    router::set('user/get_users',function(){
        require_once('./controllers/users.php');
        $bearer_token = get_bearer_token();
        $is_jwt_valid = is_jwt_valid($bearer_token);
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if($is_jwt_valid) {
                get_users();
            }else{
                echo json_encode(array('error' => 'Access denied','status' => FALSE));
            }
        }else{
            echo json_encode(array('error' => 'Invalid Method'.' '.$_SERVER['REQUEST_METHOD'],'status' => FALSE)); 
        }
    });

    router::set('user/get_user',function(){
        require_once('./controllers/users.php');
        $bearer_token = get_bearer_token();
        $is_jwt_valid = is_jwt_valid($bearer_token);
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if($is_jwt_valid) {
                $data = json_decode(file_get_contents("php://input",true));
                $id = $data->id;
                get_user($id);
            }else{
                echo json_encode(array('error' => 'Access denied','status' => FALSE));
            }
        }else{
            echo json_encode(array('error' => 'Invalid Method'.' '.$_SERVER['REQUEST_METHOD'],'status' => FALSE)); 
        }
    });
    /*                                                                                                                                                                */
?>
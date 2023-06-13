<?php

/*  controllers/login  */
    router::set('login/get_login',function(){
        require_once('./controllers/login.php');
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = json_decode(file_get_contents("php://input",true));
            $username = $data->username;
            $password = $data->password;
            get_login($username,$password);
        }else{
            echo json_encode(array('error' => 'Invalid Method'.' '.$_SERVER['REQUEST_METHOD'],'status' => FALSE)); 
        }
    });
     /*                                                                                                                                                                */

?>
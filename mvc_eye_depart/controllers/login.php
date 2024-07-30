<?php 

    function get_login($username,$password){
        $sql = " SELECT * FROM user WHERE username = '".$username."' AND password = password('".$password."') LIMIT 1";
        $result = dbQuery($sql);

        if(dbNumRows($result) < 1) {
            echo json_encode(array('error' => 'Invalid User','status' => FALSE));
        } else {
            $row = dbFetchAssoc($result);
            
            $username = $row['username'];
            
            $headers = array('alg'=>'HS256','typ'=>'JWT');
            $payload = array('username'=>$username, 'exp'=>(time() + 86400));
    
            $jwt = generate_jwt($headers, $payload);
            
            echo json_encode(array('token' => $jwt,'status' => TRUE));
        }
    }
?>
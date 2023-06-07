<?php 
    
    /*  controllers/login  */
    router::set('get_login',function(){
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


    /*  controllers/users  */
    router::set('get_users',function(){
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

    router::set('get_user',function(){
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
    

    /*  controllers/student  */
    router::set('get_student',function(){
        require_once('./controllers/student.php');
        $bearer_token = get_bearer_token();
        $is_jwt_valid = is_jwt_valid($bearer_token);
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if($is_jwt_valid) {
                $data = json_decode(file_get_contents("php://input",true));
                $year = $data->year;
                get_student($year);
            }else{
                echo json_encode(array('error' => 'Access denied','status' => FALSE));
            }
        }else{
            echo json_encode(array('error' => 'Invalid Method'.' '.$_SERVER['REQUEST_METHOD'],'status' => FALSE)); 
        }
    });

    router::set('get_student_advisor',function(){
        require_once('./controllers/student.php');
        $bearer_token = get_bearer_token();
        $is_jwt_valid = is_jwt_valid($bearer_token);
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if($is_jwt_valid) {
                $data = json_decode(file_get_contents("php://input",true));
                get_student_advisor();
            }else{
                echo json_encode(array('error' => 'Access denied','status' => FALSE));
            }
        }else{
            echo json_encode(array('error' => 'Invalid Method'.' '.$_SERVER['REQUEST_METHOD'],'status' => FALSE)); 
        }
    });

    router::set('get_student_grp',function(){
        require_once('./controllers/student.php');
        $bearer_token = get_bearer_token();
        $is_jwt_valid = is_jwt_valid($bearer_token);
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if($is_jwt_valid) {
                $data = json_decode(file_get_contents("php://input",true));
                get_student_grp();
            }else{
                echo json_encode(array('error' => 'Access denied','status' => FALSE));
            }
        }else{
            echo json_encode(array('error' => 'Invalid Method'.' '.$_SERVER['REQUEST_METHOD'],'status' => FALSE)); 
        }
    });

    router::set('add_student',function(){
        require_once('./controllers/student.php');
        $bearer_token = get_bearer_token();
        $is_jwt_valid = is_jwt_valid($bearer_token);
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if($is_jwt_valid) {
                $data = json_decode(file_get_contents("php://input",true));
                $year = $data->year;
                $ttl = $data->ttl;
                $name = $data->name;
                $lname = $data->lname;
                $type = $data->type;
                $std_id = $data->std_id;
                $advisor_id = $data->advisor_id;
                $grp_id = $data->grp_id;
                $start = $data->start;
                $stop = $data->stop;
                add_student($year,$ttl,$name,$lname,$type,$std_id,$advisor_id,$grp_id,$start,$stop);
            }else{
                echo json_encode(array('error' => 'Access denied','status' => FALSE));
            }
        }else{
            echo json_encode(array('error' => 'Invalid Method'.' '.$_SERVER['REQUEST_METHOD'],'status' => FALSE)); 
        }
    });

    router::set('edit_student',function(){
        require_once('./controllers/student.php');
        $bearer_token = get_bearer_token();
        $is_jwt_valid = is_jwt_valid($bearer_token);
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if($is_jwt_valid) {
                $data = json_decode(file_get_contents("php://input",true));
                $id = $data->id;
                $year = $data->year;
                $ttl = $data->ttl;
                $name = $data->name;
                $lname = $data->lname;
                $type = $data->type;
                $std_id = $data->std_id;
                $advisor_id = $data->advisor_id;
                $grp_id = $data->grp_id;
                $start = $data->start;
                $stop = $data->stop;
                edit_student($id,$year,$ttl,$name,$lname,$type,$std_id,$advisor_id,$grp_id,$start,$stop);
            }else{
                echo json_encode(array('error' => 'Access denied','status' => FALSE));
            }
        }else{
            echo json_encode(array('error' => 'Invalid Method'.' '.$_SERVER['REQUEST_METHOD'],'status' => FALSE)); 
        }
    });

    router::set('delete_student',function(){
        require_once('./controllers/student.php');
        $bearer_token = get_bearer_token();
        $is_jwt_valid = is_jwt_valid($bearer_token);
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if($is_jwt_valid) {
                $data = json_decode(file_get_contents("php://input",true));
                $id = $data->id;
                delete_student($id);
            }else{
                echo json_encode(array('error' => 'Access denied','status' => FALSE));
            }
        }else{
            echo json_encode(array('error' => 'Invalid Method'.' '.$_SERVER['REQUEST_METHOD'],'status' => FALSE)); 
        }
    });

    router::set('add_student_score',function(){
        require_once('./controllers/student.php');
        $bearer_token = get_bearer_token();
        $is_jwt_valid = is_jwt_valid($bearer_token);
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if($is_jwt_valid) {
                $data = json_decode(file_get_contents("php://input",true));
                $id = $data->id;
                $mcq=$data->mcq;
                $osce1=$data->osce1;
                $osce2=$data->osce2;
                $meq1=$data->meq1;
                $meq2=$data->meq2;
                $book=$data->book;
                add_student_score($id,$mcq,$osce1,$osce2,$meq1,$meq2,$book);
            }else{
                echo json_encode(array('error' => 'Access denied','status' => FALSE));
            }
        }else{
            echo json_encode(array('error' => 'Invalid Method'.' '.$_SERVER['REQUEST_METHOD'],'status' => FALSE)); 
        }
    });

    /* Upload images */
    router::set('upload_image_student',function(){
        //require_once('./controllers/student.php');
        $bearer_token = get_bearer_token();
        $is_jwt_valid = is_jwt_valid($bearer_token);
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if($is_jwt_valid) {
                //$data = json_decode(file_get_contents("php://input",true));
                $std_id = $_POST['std_id'];
                $name_file = $std_id.strrchr( $_FILES['file']['name'] , '.' );
                $tmp_name =  $_FILES['file']['tmp_name'];
                $folder = substr($std_id,0,2);
                $structure = "./images/".$folder;
                $images = glob("./images/".$folder."/*.*");
                $ext = $structure."/".$std_id;
                if(!empty($std_id)){
                    if ( !!$_FILES['file']['tmp_name'] ){
                        if(is_dir($structure)){
                            for ($i = 0; $i<count($images); $i++) {
                                $img = substr($images[$i],0,strlen($images[$i]) - strlen(strrchr($images[$i],'.')));
                                if ($img === $ext) {
                                    unlink($images[$i]);
                                  break;
                                  
                                }
                              }
                                $results = move_uploaded_file($tmp_name,$structure."/".$name_file);
                                if($results) {
                                    echo json_encode(array('success' => 'You upload image student '.$structure.'/'.$name_file.' successfully','status' => TRUE));
                                } else {
                                    echo json_encode(array('error' => 'You upload image student '.$structure.'/'.$name_file.' unsuccessful','status' => FALSE));
                                }
                        }else{
                            if (!mkdir($structure, 0777, true)) {
                                echo json_encode(array('error' => 'Failed to create directories '.$structure,'status' => FALSE));
                            }else{
                                for ($i = 0; $i<count($images); $i++) {
                                    $img = substr($images[$i],0,strlen($images[$i]) - strlen(strrchr($images[$i],'.')));
                                    if ($img === $ext) {
                                        unlink($images[$i]);
                                    break;
                                    
                                    }
                                  }
                                    $results = move_uploaded_file($tmp_name,$structure."/".$name_file);
                                    if($results) {
                                        echo json_encode(array('success' => 'You upload image student '.$structure.'/'.$name_file.' successfully','status' => TRUE));
                                    } else {
                                        echo json_encode(array('error' => 'You upload image student '.$structure.'/'.$name_file.' unsuccessful','status' => FALSE));
                                    }
                            }
                        }
                    }else{
                        echo json_encode(array('error' => 'Access denied because tmp_name null','status' => FALSE));
                    }
                }else{
                    echo json_encode(array('error' => 'Access denied because std_id null','status' => FALSE));
                }
            }else{
                echo json_encode(array('error' => 'Access denied','status' => FALSE));
            }
        }else{
            echo json_encode(array('error' => 'Invalid Method'.' '.$_SERVER['REQUEST_METHOD'],'status' => FALSE)); 
        }
    });

    router::set('get_image_student',function(){
        //require_once('./controllers/student.php');
        $bearer_token = get_bearer_token();
        $is_jwt_valid = is_jwt_valid($bearer_token);
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if($is_jwt_valid) {
                $data = json_decode(file_get_contents("php://input",true));
                $std_id = $data->std_id;
                $folder = substr($std_id,0,2);
                $structure = "./images/".$folder;
                $images = glob("./images/".$folder."/*.*");
                $ext = $structure."/".$std_id;
                if(!empty($std_id)){
                    if(is_dir($structure)){
                        for ($i = 0; $i<count($images); $i++) {
                            $img = substr($images[$i],0,strlen($images[$i]) - strlen(strrchr($images[$i],'.')));
                            if ($img === $ext) {
                                echo json_encode(array('url' => $_SERVER['SERVER_NAME'].dirname($_SERVER['PHP_SELF']).substr($images[$i],1,strlen($images[$i])),'status' => TRUE));
                              break;
                            }
                          }
                    }else{
                        echo json_encode(array('error' => 'Failed to directories '.$structure,'status' => FALSE));
                    }
                }else{

                }
            }else{
                echo json_encode(array('error' => 'No Data','status' => FALSE));
            }
        }else{
            echo json_encode(array('error' => 'Invalid Method'.' '.$_SERVER['REQUEST_METHOD'],'status' => FALSE)); 
        }
    });
/*                                                                                                                                                                */
   

    /*  controllers/teacher  */
    router::set('get_teacher',function(){
        require_once('./controllers/teacher.php');
        $bearer_token = get_bearer_token();
        $is_jwt_valid = is_jwt_valid($bearer_token);
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if($is_jwt_valid) {
                //$data = json_decode(file_get_contents("php://input",true));
                get_teacher();
            }else{
                echo json_encode(array('error' => 'Access denied','status' => '0'));
            }
        }else{
            echo json_encode(array('error' => 'Invalid Method'.' '.$_SERVER['REQUEST_METHOD'],'status' => '0')); 
        }
    });

    router::set('add_teacher',function(){
        require_once('./controllers/teacher.php');
        $bearer_token = get_bearer_token();
        $is_jwt_valid = is_jwt_valid($bearer_token);
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if($is_jwt_valid) {
                $data = json_decode(file_get_contents("php://input",true));
                $ttl = $data->ttl;
                $name = $data->name;
                $lname = $data->lname;
                $sex = $data->sex;
                $pin = $data->pin;
                $adv_id = $data->adv_id;
                $start = $data->start;
                $stop = $data->stop;
                add_teacher($ttl,$name,$lname,$sex,$pin,$adv_id,$start,$stop);
            }else{
                echo json_encode(array('error' => 'Access denied','status' => '0'));
            }
        }else{
            echo json_encode(array('error' => 'Invalid Method'.' '.$_SERVER['REQUEST_METHOD'],'status' => '0')); 
        }
    });

    router::set('delete_teacher',function(){
        require_once('./controllers/teacher.php');
        $bearer_token = get_bearer_token();
        $is_jwt_valid = is_jwt_valid($bearer_token);
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if($is_jwt_valid) {
                $data = json_decode(file_get_contents("php://input",true));
                $id = $data->id;
                $stop = $data->stop;
                delete_teacher($id,$stop);
            }else{
                echo json_encode(array('error' => 'Access denied','status' => '0'));
            }
        }else{
            echo json_encode(array('error' => 'Invalid Method'.' '.$_SERVER['REQUEST_METHOD'],'status' => '0')); 
        }
    });

    router::set('edit_teacher',function(){
        require_once('./controllers/teacher.php');
        $bearer_token = get_bearer_token();
        $is_jwt_valid = is_jwt_valid($bearer_token);
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if($is_jwt_valid) {
                $data = json_decode(file_get_contents("php://input",true));
                $id = $data->id;
                $ttl = $data->ttl;
                $name = $data->name;
                $lname = $data->lname;
                $sex = $data->sex;
                $pin = $data->pin;
                $adv_id = $data->adv_id;
                $start = $data->start;
                $stop = $data->stop;
                edit_teacher($id,$ttl,$name,$lname,$sex,$pin,$adv_id,$start,$stop);
            }else{
                echo json_encode(array('error' => 'Access denied','status' => '0'));
            }
        }else{
            echo json_encode(array('error' => 'Invalid Method'.' '.$_SERVER['REQUEST_METHOD'],'status' => '0')); 
        }
    });
/*                                                                                                                                                                */

     /*  controllers/group  */
    //  router::set('get_group',function(){
    //     require_once('./controllers/group.php');
    //     $bearer_token = get_bearer_token();
    //     $is_jwt_valid = is_jwt_valid($bearer_token);
    //     if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //         if($is_jwt_valid) {
    //             $data = json_decode(file_get_contents("php://input",true));
    //             $year = $data->year;
    //             get_group($year);
    //         }else{
    //             echo json_encode(array('error' => 'Access denied','status' => '0'));
    //         }
    //     }else{
    //         echo json_encode(array('error' => 'Invalid Method'.' '.$_SERVER['REQUEST_METHOD'],'status' => '0')); 
    //     }
    // });

?>
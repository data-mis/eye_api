<?php

/*  controllers/teacher  */
router::set('teacher/get_teacher', function () {
    require_once ('./controllers/teacher.php');
    $bearer_token = get_bearer_token();
    $is_jwt_valid = is_jwt_valid($bearer_token);
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if ($is_jwt_valid) {
            //$data = json_decode(file_get_contents("php://input",true));
            get_teacher();
        } else {
            echo json_encode(array('error' => 'Access denied', 'status' => '0'));
        }
    } else {
        echo json_encode(array('error' => 'Invalid Method' . ' ' . $_SERVER['REQUEST_METHOD'], 'status' => '0'));
    }
});

router::set('teacher/add_teacher', function () {
    require_once ('./controllers/teacher.php');
    $bearer_token = get_bearer_token();
    $is_jwt_valid = is_jwt_valid($bearer_token);
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if ($is_jwt_valid) {
            $data = json_decode(file_get_contents("php://input", true));
            $ttl = $data->ttl;
            $name = $data->name;
            $lname = $data->lname;
            $sex = $data->sex;
            $pin = $data->pin;
            $adv_id = $data->adv_id;
            $start = $data->start;
            $stop = $data->stop;
            //เพิ่มรายการ email และ password
            $email = $data->email;
            $password = $data->password;
            $grpline = $data->linegrp;
            add_teacher($ttl, $name, $lname, $sex, $pin, $adv_id, $start, $stop, $email, $password, $grpline);
        } else {
            echo json_encode(array('error' => 'Access denied', 'status' => '0'));
        }
    } else {
        echo json_encode(array('error' => 'Invalid Method' . ' ' . $_SERVER['REQUEST_METHOD'], 'status' => '0'));
    }
});

router::set('teacher/delete_teacher', function () {
    require_once ('./controllers/teacher.php');
    $bearer_token = get_bearer_token();
    $is_jwt_valid = is_jwt_valid($bearer_token);
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if ($is_jwt_valid) {
            $data = json_decode(file_get_contents("php://input", true));
            $id = $data->id;
            $stop = $data->stop;
            delete_teacher($id, $stop);
        } else {
            echo json_encode(array('error' => 'Access denied', 'status' => '0'));
        }
    } else {
        echo json_encode(array('error' => 'Invalid Method' . ' ' . $_SERVER['REQUEST_METHOD'], 'status' => '0'));
    }
});

router::set('teacher/edit_teacher', function () {
    require_once ('./controllers/teacher.php');
    $bearer_token = get_bearer_token();
    $is_jwt_valid = is_jwt_valid($bearer_token);
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if ($is_jwt_valid) {
            $data = json_decode(file_get_contents("php://input", true));
            $id = $data->id;
            $ttl = $data->ttl;
            $name = $data->name;
            $lname = $data->lname;
            $sex = $data->sex;
            $pin = $data->pin;
            $adv_id = $data->adv_id;
            $start = $data->start;
            $stop = $data->stop;
            $email = $data->email;
            $password = $data->password;
            $grpline = $data->linegrp;
            edit_teacher($id, $ttl, $name, $lname, $sex, $pin, $adv_id, $start, $stop, $email, $password,$grpline);
        } else {
            echo json_encode(array('error' => 'Access denied', 'status' => '0'));
        }
    } else {
        echo json_encode(array('error' => 'Invalid Method' . ' ' . $_SERVER['REQUEST_METHOD'], 'status' => '0'));
    }
});
/*                                                                                                                                                                */
?>
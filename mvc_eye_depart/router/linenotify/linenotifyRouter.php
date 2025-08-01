<?php
router::set('messageOA/addworkNotify', function () {
    require_once('./controllers/linenotify.php');
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $data = json_decode(file_get_contents("php://input", true));
        if (!empty($data)) {
            if (empty($data->tokenline)) {
                echo json_decode(array('message' => "empty tokenline !!!", 'status' => FALSE));
            } else if (empty($data->messageline)) {
                echo json_decode(array('message' => "empty messageline !!!", 'status' => FALSE));
            } else if (empty($data->userIdline)) {
                echo json_decode(array('message' => "empty userIdline !!!", 'status' => FALSE));
            } else {
                $tokenlineis = $data->tokenline;
                $messageobjis = $data->messageline;
                $userIdlineis = $data->userIdline;

                // echo $tokenlineis . "และ" . $userIdlineis . "\n";
                // print_r($messageobjis);
                // echo $messageobjis->casemsg;

                LineOAmessageNotify($tokenlineis,$userIdlineis,$messageobjis);
            }
        } else {
            echo json_decode(array('message' => "empty data send use !!!", 'status' => FALSE));
        }
    } else {
        echo json_encode(array('error' => 'Invalid Method' . ' ' . $_SERVER['REQUEST_METHOD'], 'status' => FALSE));
    }
});
?>
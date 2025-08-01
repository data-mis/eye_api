<?php
// date_default_timezone_set("Asia/Bangkok");
/*  controllers/work  */
router::set('work/get_sheet', function () {
    require_once ('./controllers/work.php');
    $bearer_token = get_bearer_token();
    $is_jwt_valid = is_jwt_valid($bearer_token);
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if ($is_jwt_valid) {
            $data = json_decode(file_get_contents("php://input", true));
            get_sheet();
        } else {
            echo json_encode(array ('error' => 'Access denied', 'status' => FALSE));
        }
    } else {
        echo json_encode(array ('error' => 'Invalid Method' . ' ' . $_SERVER['REQUEST_METHOD'], 'status' => FALSE));
    }
});

router::set('work/get_work_sheet', function () {
    require_once ('./controllers/work.php');
    $bearer_token = get_bearer_token();
    $is_jwt_valid = is_jwt_valid($bearer_token);
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if ($is_jwt_valid) {
            $data = json_decode(file_get_contents("php://input", true));
            $advisor_id = $data->advisor_id;
            get_work_sheet($advisor_id);
        } else {
            echo json_encode(array ('error' => 'Access denied', 'status' => FALSE));
        }
    } else {
        echo json_encode(array ('error' => 'Invalid Method' . ' ' . $_SERVER['REQUEST_METHOD'], 'status' => FALSE));
    }
});

router::set('work/get_work', function () {
    require_once ('./controllers/work.php');
    $bearer_token = get_bearer_token();
    $is_jwt_valid = is_jwt_valid($bearer_token);
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if ($is_jwt_valid) {
            $data = json_decode(file_get_contents("php://input", true));
            $beg = $data->beg;
            $end = $data->end;
            $sheet_id = $data->sheet_id;
            $complete = $data->complete;
            get_work($beg, $end, $sheet_id, $complete);
        } else {
            echo json_encode(array ('error' => 'Access denied', 'status' => FALSE));
        }
    } else {
        echo json_encode(array ('error' => 'Invalid Method' . ' ' . $_SERVER['REQUEST_METHOD'], 'status' => FALSE));
    }
});

router::set('work/get_work_adv', function () {
    require_once ('./controllers/work.php');
    $bearer_token = get_bearer_token();
    $is_jwt_valid = is_jwt_valid($bearer_token);
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if ($is_jwt_valid) {
            $data = json_decode(file_get_contents("php://input", true));
            get_work_adv();
        } else {
            echo json_encode(array ('error' => 'Access denied', 'status' => FALSE));
        }
    } else {
        echo json_encode(array ('error' => 'Invalid Method' . ' ' . $_SERVER['REQUEST_METHOD'], 'status' => FALSE));
    }
});

router::set('work/add_work', function () {
    require_once ('./controllers/work.php');
    $bearer_token = get_bearer_token();
    $is_jwt_valid = is_jwt_valid($bearer_token);
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if ($is_jwt_valid) {
            $data = json_decode(file_get_contents("php://input", true));
            $sheet_code = $data->sheet_code;
            switch ($sheet_code) {
                case "01": // ประเมินรายงาน
                    $sheet_id = $data->sheet_id;
                    $advisor_id = $data->advisor_id;
                    $student_id = $data->student_id;
                    $date = $data->date;
                    $time_begin = $data->time_begin;
                    $time_end = $data->time_end;
                    $caption = $data->caption;   /* container1.label4.Caption */
                    $txt = $data->txt;   /* container1.optiongroup1.Value */
                    $txt1 = $data->txt1;   /* container1.label1.Caption */
                    $txt_val1 = $data->txt_val1;   /* container1.text1.Value */
                    $txt2 = $data->txt2; /*   container1.label2.Caption */
                    $txt_val2 = $data->txt_val2;   /* container1.text2.Value */
                    $txt3 = $data->txt3;   /* container1.label3.Caption */
                    $txt_val3 = $data->txt_val3;   /* container1.text3.Value */
                    $txt5 = $data->txt5;   /* container1.label5.Caption */
                    $txt_val5 = $data->txt_val5;   /* container1.dbx1.txtentry.Value */
                    $txt6 = $data->txt6; /* container1.label6.Caption */
                    $txt_val6 = $data->txt_val6;   /* container1.dbx2.txtentry.Value */
                    $txt7 = $data->txt7;   /* container1.label7.Caption */
                    $txt_val7 = $data->txt_val7;   /* container1.dbx3.txtentry.Value */
                    $txt_val6_1 = $data->txt_val6_1;   /* container1.dbx2.txtdate.Value */
                    $txt_val7_1 = $data->txt_val7_1;   /* container1.dbx3.txtdate.Value */
                    add_work_01($sheet_id, $advisor_id, $student_id, $date, $time_begin, $time_end, $caption, $txt, $txt1, $txt_val1, $txt2, $txt_val2, $txt3, $txt_val3, $txt5, $txt_val5, $txt6, $txt_val6, $txt7, $txt_val7, $txt_val6_1, $txt_val7_1);
                    break;
                case "02": // แบบฟอร์ม progress note
                    $sheet_id = $data->sheet_id;
                    $advisor_id = $data->advisor_id;
                    $student_id = $data->student_id;
                    $date = $data->date;
                    $time_begin = $data->time_begin;
                    $time_end = $data->time_end;
                    add_work_02($sheet_id, $advisor_id, $student_id, $date, $time_begin, $time_end);
                    break;
                case "03": // OPD teaching
                    $sheet_id = $data->sheet_id;
                    $advisor_id = $data->advisor_id;
                    $grp_id = $data->grp_id;
                    $date = $data->date;
                    $time_begin = $data->time_begin;
                    $time_end = $data->time_end;
                    add_work_03($sheet_id, $advisor_id, $grp_id, $date, $time_begin, $time_end);
                    break;
                case "04": // Ward round
                    $sheet_id = $data->sheet_id;
                    $advisor_id = $data->advisor_id;
                    $grp_id = $data->grp_id;
                    $date = $data->date;
                    $time_begin = $data->time_begin;
                    $time_end = $data->time_end;
                    add_work_04($sheet_id, $advisor_id, $grp_id, $date, $time_begin, $time_end);
                    break;
                case "05": // Case & Topic ผู้นำเสนอ
                    $sheet_id = $data->sheet_id;
                    $advisor_id = $data->advisor_id;
                    $grp_id = $data->grp_id;
                    $date = $data->date;
                    $time_begin = $data->time_begin;
                    $time_end = $data->time_end;
                    $txt_val = $data->txt_val;
                    add_work_05($sheet_id, $advisor_id, $grp_id, $date, $time_begin, $time_end, $txt_val);
                    break;
                case "06": // Case & Topic ผู้ร่วม
                    $sheet_id = $data->sheet_id;
                    $advisor_id = $data->advisor_id;
                    $grp_id = $data->grp_id;
                    $date = $data->date;
                    $time_begin = $data->time_begin;
                    $time_end = $data->time_end;
                    $txt_val = $data->txt_val;
                    add_work_06($sheet_id, $advisor_id, $grp_id, $date, $time_begin, $time_end, $txt_val);
                    break;
                case "07": // Flipped classroom
                    $sheet_id = $data->sheet_id;
                    $advisor_id = $data->advisor_id;
                    $grp_id = $data->grp_id;
                    $date = $data->date;
                    $time_begin = $data->time_begin;
                    $time_end = $data->time_end;
                    add_work_07($sheet_id, $advisor_id, $grp_id, $date, $time_begin, $time_end);
                    break;
            }
        } else {
            echo json_encode(array ('error' => 'Access denied', 'status' => FALSE));
        }
    } else {
        echo json_encode(array ('error' => 'Invalid Method' . ' ' . $_SERVER['REQUEST_METHOD'], 'status' => FALSE));
    }
});

router::set('work/edit_work', function () {
    require_once ('./controllers/work.php');
    $bearer_token = get_bearer_token();
    $is_jwt_valid = is_jwt_valid($bearer_token);
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if ($is_jwt_valid) {
            $data = json_decode(file_get_contents("php://input", true));
            $sheet_code = $data->sheet_code;
            switch ($sheet_code) {
                case "01": // ประเมินรายงาน
                    $work_id = $data->work_id;
                    $sheet_id = $data->sheet_id;
                    $advisor_id = $data->advisor_id;
                    $student_id = $data->student_id;
                    $date = $data->date;
                    $time_begin = $data->time_begin;
                    $time_end = $data->time_end;
                    $caption = $data->caption;   /* container1.label4.Caption */
                    $txt = $data->txt;   /* container1.optiongroup1.Value */
                    $txt1 = $data->txt1;   /* container1.label1.Caption */
                    $txt_val1 = $data->txt_val1;   /* container1.text1.Value */
                    $txt2 = $data->txt2; /*   container1.label2.Caption */
                    $txt_val2 = $data->txt_val2;   /* container1.text2.Value */
                    $txt3 = $data->txt3;   /* container1.label3.Caption */
                    $txt_val3 = $data->txt_val3;   /* container1.text3.Value */
                    $txt5 = $data->txt5;   /* container1.label5.Caption */
                    $txt_val5 = $data->txt_val5;   /* container1.dbx1.txtentry.Value */
                    $txt6 = $data->txt6; /* container1.label6.Caption */
                    $txt_val6 = $data->txt_val6;   /* container1.dbx2.txtentry.Value */
                    $txt7 = $data->txt7;   /* container1.label7.Caption */
                    $txt_val7 = $data->txt_val7;   /* container1.dbx3.txtentry.Value */
                    $txt_val6_1 = $data->txt_val6_1;   /* container1.dbx2.txtdate.Value */
                    $txt_val7_1 = $data->txt_val7_1;   /* container1.dbx3.txtdate.Value */
                    edit_work_01($work_id, $sheet_id, $advisor_id, $student_id, $date, $time_begin, $time_end, $caption, $txt, $txt1, $txt_val1, $txt2, $txt_val2, $txt3, $txt_val3, $txt5, $txt_val5, $txt6, $txt_val6, $txt7, $txt_val7, $txt_val6_1, $txt_val7_1);
                    break;
                case "02": // แบบฟอร์ม progress note
                    $work_id = $data->work_id;
                    $sheet_id = $data->sheet_id;
                    $advisor_id = $data->advisor_id;
                    $student_id = $data->student_id;
                    $date = $data->date;
                    $time_begin = $data->time_begin;
                    $time_end = $data->time_end;
                    edit_work_02($work_id, $sheet_id, $advisor_id, $student_id, $date, $time_begin, $time_end);
                    break;
                case "03": // OPD teaching
                    $work_id = $data->work_id;
                    $sheet_id = $data->sheet_id;
                    $advisor_id = $data->advisor_id;
                    $grp_id = $data->grp_id;
                    $date = $data->date;
                    $time_begin = $data->time_begin;
                    $time_end = $data->time_end;
                    edit_work_03($work_id, $sheet_id, $advisor_id, $grp_id, $date, $time_begin, $time_end);
                    break;
                case "04": // Ward round
                    $work_id = $data->work_id;
                    $sheet_id = $data->sheet_id;
                    $advisor_id = $data->advisor_id;
                    $grp_id = $data->grp_id;
                    $date = $data->date;
                    $time_begin = $data->time_begin;
                    $time_end = $data->time_end;
                    edit_work_04($work_id, $sheet_id, $advisor_id, $grp_id, $date, $time_begin, $time_end);
                    break;
                case "05": // Case & Topic ผู้นำเสนอ
                    $work_id = $data->work_id;
                    $sheet_id = $data->sheet_id;
                    $advisor_id = $data->advisor_id;
                    $grp_id = $data->grp_id;
                    $date = $data->date;
                    $time_begin = $data->time_begin;
                    $time_end = $data->time_end;
                    $txt_val = $data->txt_val;
                    edit_work_05($work_id, $sheet_id, $advisor_id, $grp_id, $date, $time_begin, $time_end, $txt_val);
                    break;
                case "06": // Case & Topic ผู้ร่วม
                    $work_id = $data->work_id;
                    $sheet_id = $data->sheet_id;
                    $advisor_id = $data->advisor_id;
                    $grp_id = $data->grp_id;
                    $date = $data->date;
                    $time_begin = $data->time_begin;
                    $time_end = $data->time_end;
                    $txt_val = $data->txt_val;
                    edit_work_06($work_id, $sheet_id, $advisor_id, $grp_id, $date, $time_begin, $time_end, $txt_val);
                    break;
                case "07": // Flipped classroom
                    $work_id = $data->work_id;
                    $sheet_id = $data->sheet_id;
                    $advisor_id = $data->advisor_id;
                    $grp_id = $data->grp_id;
                    $date = $data->date;
                    $time_begin = $data->time_begin;
                    $time_end = $data->time_end;
                    edit_work_07($work_id, $sheet_id, $advisor_id, $grp_id, $date, $time_begin, $time_end);
                    break;
            }
        } else {
            echo json_encode(array ('error' => 'Access denied', 'status' => FALSE));
        }
    } else {
        echo json_encode(array ('error' => 'Invalid Method' . ' ' . $_SERVER['REQUEST_METHOD'], 'status' => FALSE));
    }
});

router::set('work/get_work_head', function () {
    require_once ('./controllers/work.php');
    $bearer_token = get_bearer_token();
    $is_jwt_valid = is_jwt_valid($bearer_token);
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if ($is_jwt_valid) {
            $data = json_decode(file_get_contents("php://input", true));
            $work_id = $data->work_id;
            get_work_head($work_id);
        } else {
            echo json_encode(array ('error' => 'Access denied', 'status' => FALSE));
        }
    } else {
        echo json_encode(array ('error' => 'Invalid Method' . ' ' . $_SERVER['REQUEST_METHOD'], 'status' => FALSE));
    }
});

router::set('work/get_work_student', function () {
    require_once ('./controllers/work.php');
    $bearer_token = get_bearer_token();
    $is_jwt_valid = is_jwt_valid($bearer_token);
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if ($is_jwt_valid) {
            $data = json_decode(file_get_contents("php://input", true));
            get_work_student();
        } else {
            echo json_encode(array ('error' => 'Access denied', 'status' => FALSE));
        }
    } else {
        echo json_encode(array ('error' => 'Invalid Method' . ' ' . $_SERVER['REQUEST_METHOD'], 'status' => FALSE));
    }
});

router::set('work/get_work_tbllu', function () {
    require_once ('./controllers/work.php');
    $bearer_token = get_bearer_token();
    $is_jwt_valid = is_jwt_valid($bearer_token);
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if ($is_jwt_valid) {
            $data = json_decode(file_get_contents("php://input", true));
            $title = $data->title;
            get_work_tbllu($title);
        } else {
            echo json_encode(array ('error' => 'Access denied', 'status' => FALSE));
        }
    } else {
        echo json_encode(array ('error' => 'Invalid Method' . ' ' . $_SERVER['REQUEST_METHOD'], 'status' => FALSE));
    }
});

router::set('work/ck_get_work', function () {
    require_once ('./controllers/work.php');
    $bearer_token = get_bearer_token();
    $is_jwt_valid = is_jwt_valid($bearer_token);
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if ($is_jwt_valid) {
            $data = json_decode(file_get_contents("php://input", true));
            $work_id = $data->work_id;
            ck_get_work($work_id);
        } else {
            echo json_encode(array ('error' => 'Access denied', 'status' => FALSE));
        }
    } else {
        echo json_encode(array ('error' => 'Invalid Method' . ' ' . $_SERVER['REQUEST_METHOD'], 'status' => FALSE));
    }
});

router::set('work/delete_work', function () {
    require_once ('./controllers/work.php');
    $bearer_token = get_bearer_token();
    $is_jwt_valid = is_jwt_valid($bearer_token);
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if ($is_jwt_valid) {
            $data = json_decode(file_get_contents("php://input", true));
            $work_id = $data->work_id;
            delete_work($work_id);
        } else {
            echo json_encode(array ('error' => 'Access denied', 'status' => FALSE));
        }
    } else {
        echo json_encode(array ('error' => 'Invalid Method' . ' ' . $_SERVER['REQUEST_METHOD'], 'status' => FALSE));
    }
});

/* load images file */
router::set('work/get_image_student_file', function () {
    //require_once('./controllers/work.php');
    $bearer_token = get_bearer_token();
    $is_jwt_valid = is_jwt_valid($bearer_token);
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if ($is_jwt_valid) {
            $data = json_decode(file_get_contents("php://input", true));
            $work_id = $data->work_id;
            $work_date = $data->work_date;
            $file_name = $data->file_name;
            $folder = substr($work_date, 0, 4);
            $structure = "./images/" . $folder . "/" . $work_id;
            $images = glob("./images/" . $folder . "/" . $work_id . "/*.*");
            $ext = "./images/" . $folder . "/" . $work_id . "/" . $file_name;
            //$image_user = "/images/user.png";
            if (!empty ($work_id)) {
                if (is_dir($structure)) {
                    for ($i = 0; $i < count($images); $i++) {
                        $img = $images[$i];
                        if ($img === $ext) {
                            echo json_encode(array ('url' => $_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']) . substr($images[$i], 1, strlen($images[$i])), 'status' => TRUE));
                            break;
                        }
                    }
                } else {
                    echo json_encode(array ('error' => 'Failed to directories ' . $structure, 'status' => FALSE));
                    // echo json_encode(array('url' => $_SERVER['SERVER_NAME'].dirname($_SERVER['PHP_SELF']).$image_user,'status' => FALSE));
                }
            } else {
                echo json_encode(array ('error' => 'No Data', 'status' => FALSE));
            }
        } else {
            echo json_encode(array ('error' => 'No Data', 'status' => FALSE));
        }
    } else {
        echo json_encode(array ('error' => 'Invalid Method' . ' ' . $_SERVER['REQUEST_METHOD'], 'status' => FALSE));
    }
});

/* Upload images file */
router::set('work/upload_image_student_file', function () {
    //require_once('./controllers/work.php');
    $bearer_token = get_bearer_token();
    $is_jwt_valid = is_jwt_valid($bearer_token);
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if ($is_jwt_valid) {
            //$data = json_decode(file_get_contents("php://input",true));
            $work_id = $_POST['work_id'];
            $work_date = $_POST['work_date'];
            $student_id = $_POST['student_id'];
            $grp_id = $_POST['grp_id'];
            $file_real = $_FILES['file']['name'];
            $file_name = $work_id . "_" . date('Ymd') . date('H_i_s') . strrchr($_FILES['file']['name'], '.');
            $tmp_name = $_FILES['file']['tmp_name'];
            $folder = substr($work_date, 0, 4) . "/" . $work_id;
            $structure = "./images/" . $folder;
            if (!empty ($work_id)) {
                if (!!$_FILES['file']['tmp_name']) {
                    if (is_dir($structure)) {
                        $results = move_uploaded_file($tmp_name, $structure . "/" . $file_name);
                        if ($results) {
                            $sql1 = "INSERT INTO student_file SET student_id='" . $student_id . "',grp_id='" . $grp_id . "',work_id='" . $work_id . "',date=curdate(),file_name='" . $file_name . "',file_real='" . $file_real . "' ";
                            $result1 = dbQuery($sql1);
                            if ($result1) {
                                echo json_encode(array ('success' => 'You upload image student file ' . $structure . '/' . $file_name . ' successfully', 'status' => TRUE));
                            } else {
                                echo json_encode(array ('error' => 'You INSERT INTO student_file  unsuccessful', 'status' => FALSE));
                            }
                        } else {
                            echo json_encode(array ('error' => 'You upload image student file ' . $structure . '/' . $file_name . ' unsuccessful', 'status' => FALSE));
                        }
                    } else {
                        if (!mkdir($structure, 0777, true)) {
                            echo json_encode(array ('error' => 'Failed to create directories ' . $structure, 'status' => FALSE));
                        } else {
                            $results = move_uploaded_file($tmp_name, $structure . "/" . $file_name);
                            if ($results) {
                                $sql1 = "INSERT INTO student_file SET student_id='" . $student_id . "',grp_id='" . $grp_id . "',work_id='" . $work_id . "',date=curdate(),file_name='" . $file_name . "',file_real='" . $file_real . "' ";
                                $result1 = dbQuery($sql1);
                                if ($result1) {
                                    echo json_encode(array ('success' => 'You upload image student file ' . $structure . '/' . $file_name . ' successfully', 'status' => TRUE));
                                } else {
                                    echo json_encode(array ('error' => 'You INSERT INTO student_file  unsuccessful', 'status' => FALSE));
                                }
                            } else {
                                echo json_encode(array ('error' => 'You upload image student ' . $structure . '/' . $file_name . ' unsuccessful', 'status' => FALSE));
                            }
                        }
                    }
                } else {
                    echo json_encode(array ('error' => 'Access denied because tmp_name null', 'status' => FALSE));
                }
            } else {
                echo json_encode(array ('error' => 'Access denied because std_id null', 'status' => FALSE, 'work_id' => $work_id, 'work_date' => $work_date, "student_id" => $student_id));
            }
        } else {
            echo json_encode(array ('error' => 'Access denied', 'status' => FALSE));
        }
    } else {
        echo json_encode(array ('error' => 'Invalid Method' . ' ' . $_SERVER['REQUEST_METHOD'], 'status' => FALSE));
    }
});

router::set('work/delete_student_file', function () {
    require_once ('./controllers/work.php');
    $bearer_token = get_bearer_token();
    $is_jwt_valid = is_jwt_valid($bearer_token);
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if ($is_jwt_valid) {
            $data = json_decode(file_get_contents("php://input", true));
            $id = $data->id;
            delete_student_file($id);
        } else {
            echo json_encode(array ('error' => 'Access denied', 'status' => FALSE));
        }
    } else {
        echo json_encode(array ('error' => 'Invalid Method' . ' ' . $_SERVER['REQUEST_METHOD'], 'status' => FALSE));
    }
});

router::set('work/get_student_file', function () {
    require_once ('./controllers/work.php');
    $bearer_token = get_bearer_token();
    $is_jwt_valid = is_jwt_valid($bearer_token);
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if ($is_jwt_valid) {
            $data = json_decode(file_get_contents("php://input", true));
            $work_id = $data->work_id;
            get_student_file($work_id);
        } else {
            echo json_encode(array ('error' => 'Access denied', 'status' => FALSE));
        }
    } else {
        echo json_encode(array ('error' => 'Invalid Method' . ' ' . $_SERVER['REQUEST_METHOD'], 'status' => FALSE));
    }
});

router::set("work/get_test_from", function () {
    $ftp_server = "163.44.197.219";
    $ftp_username = "soft";
    $ftp_password = "Soft1219!";

    $conn_id = ftp_connect($ftp_server);

    $login_result = ftp_login($conn_id, $ftp_username, $ftp_password);

    if ((!$conn_id) || (!$login_result)) {
        echo "FTP connection has failed!";
        exit;
    } else {
        echo "Connected to $ftp_server, for user $ftp_username \n";
        function convertToBytes($value)
        {
            $value = trim($value);
            $last = strtolower($value[strlen($value) - 1]);
            $value = (int) $value;
            switch ($last) {
                case 'g':
                    $value *= 1024;
                case 'm':
                    $value *= 1024;
                case 'k':
                    $value *= 1024;
            }
            return $value;
        }
        $maxFileSize = convertToBytes(ini_get('upload_max_filesize'));
        $postMaxSize = convertToBytes(ini_get('post_max_size'));
        if($_SERVER['REQUEST_METHOD'] === "POST"){
            $uploaded_file = $_FILES['fileForUpload']['tmp_name'];
            $file_name = $_FILES['fileForUpload']['name'];
            $work_id = isset ($_POST['work_id']) ? $_POST['work_id'] : null;
            $work_date = isset ($_POST['work_date']) ? $_POST['work_date'] : null;
            $student_id = isset ($_POST['student_id']) ? $_POST['student_id'] : null;
            $grp_id = isset ($_POST['grp_id']) ? $_POST['grp_id'] : null;
        }
        echo "upload_max_filesize : $maxFileSize\n";
        echo "post_max_size : $postMaxSize\n";
        echo "uploaded_file : $uploaded_file\n";
        echo "file_name : $file_name\n";
        echo "work_id : $work_id\n";
        echo "work_date : $work_date\n";
        echo "student_id : $student_id\n";
        echo "grp_id : $grp_id";

        ftp_close($conn_id);
    }
});

/*                                                                                                                                                                */
?>
<?php

    /*  controllers/work  */
    router::set('work/get_sheet',function(){
        require_once('./controllers/work.php');
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

    router::set('work/get_work_sheet',function(){
        require_once('./controllers/work.php');
        $bearer_token = get_bearer_token();
        $is_jwt_valid = is_jwt_valid($bearer_token);
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if($is_jwt_valid) {
                $data = json_decode(file_get_contents("php://input",true));
                $advisor_id = $data->advisor_id;
                get_work_sheet($advisor_id);
            }else{
                echo json_encode(array('error' => 'Access denied','status' => FALSE));
            }
        }else{
            echo json_encode(array('error' => 'Invalid Method'.' '.$_SERVER['REQUEST_METHOD'],'status' => FALSE)); 
        }
    });

    router::set('work/get_work',function(){
        require_once('./controllers/work.php');
        $bearer_token = get_bearer_token();
        $is_jwt_valid = is_jwt_valid($bearer_token);
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if($is_jwt_valid) {
                $data = json_decode(file_get_contents("php://input",true));
                $beg = $data->beg;
                $end = $data->end;
                $sheet_id = $data->sheet_id;
                $complete = $data->complete;
                get_work($beg,$end,$sheet_id,$complete);
            }else{
                echo json_encode(array('error' => 'Access denied','status' => FALSE));
            }
        }else{
            echo json_encode(array('error' => 'Invalid Method'.' '.$_SERVER['REQUEST_METHOD'],'status' => FALSE)); 
        }
    });

    router::set('work/get_work_adv',function(){
        require_once('./controllers/work.php');
        $bearer_token = get_bearer_token();
        $is_jwt_valid = is_jwt_valid($bearer_token);
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if($is_jwt_valid) {
                $data = json_decode(file_get_contents("php://input",true));
                get_work_adv();
            }else{
                echo json_encode(array('error' => 'Access denied','status' => FALSE));
            }
        }else{
            echo json_encode(array('error' => 'Invalid Method'.' '.$_SERVER['REQUEST_METHOD'],'status' => FALSE)); 
        }
    });

    router::set('work/add_work',function(){
        require_once('./controllers/work.php');
        $bearer_token = get_bearer_token();
        $is_jwt_valid = is_jwt_valid($bearer_token);
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if($is_jwt_valid) {
                $data = json_decode(file_get_contents("php://input",true));
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
                            add_work_01($sheet_id,$advisor_id,$student_id,$date,$time_begin,$time_end,$caption,$txt,$txt1,$txt_val1,$txt2,$txt_val2,$txt3,$txt_val3,$txt5,$txt_val5,$txt6,$txt_val6,$txt7,$txt_val7,$txt_val6_1,$txt_val7_1);
                            break;
                        case "02": // แบบฟอร์ม progress note
                            $sheet_id = $data->sheet_id;
                            $advisor_id = $data->advisor_id;
                            $student_id = $data->student_id;
                            $date = $data->date;
                            $time_begin = $data->time_begin;
                            $time_end = $data->time_end;
                            add_work_02($sheet_id,$advisor_id,$student_id,$date,$time_begin,$time_end);
                            break;
                        case "03": // OPD teaching
                            $sheet_id = $data->sheet_id;
                            $advisor_id = $data->advisor_id;
                            $grp_id = $data->grp_id;
                            $date = $data->date;
                            $time_begin = $data->time_begin;
                            $time_end = $data->time_end;
                            add_work_03($sheet_id,$advisor_id,$grp_id,$date,$time_begin,$time_end);
                            break;
                        case "04": // Ward round
                            $sheet_id = $data->sheet_id;
                            $advisor_id = $data->advisor_id;
                            $grp_id = $data->grp_id;
                            $date = $data->date;
                            $time_begin = $data->time_begin;
                            $time_end = $data->time_end;
                            add_work_04($sheet_id,$advisor_id,$grp_id,$date,$time_begin,$time_end);
                            break;
                        case "05": // Case & Topic ผู้นำเสนอ
                            $sheet_id = $data->sheet_id;
                            $advisor_id = $data->advisor_id;
                            $grp_id = $data->grp_id;
                            $date = $data->date;
                            $time_begin = $data->time_begin;
                            $time_end = $data->time_end;
                            $txt_val = $data->txt_val;
                            add_work_05($sheet_id,$advisor_id,$grp_id,$date,$time_begin,$time_end,$txt_val);
                            break;
                        case "06": // Case & Topic ผู้ร่วม
                            $sheet_id = $data->sheet_id;
                            $advisor_id = $data->advisor_id;
                            $grp_id = $data->grp_id;
                            $date = $data->date;
                            $time_begin = $data->time_begin;
                            $time_end = $data->time_end;
                            $txt_val = $data->txt_val;
                            add_work_06($sheet_id,$advisor_id,$grp_id,$date,$time_begin,$time_end,$txt_val);
                            break; 
                        case "07": // Flipped classroom
                            $sheet_id = $data->sheet_id;
                            $advisor_id = $data->advisor_id;
                            $grp_id = $data->grp_id;
                            $date = $data->date;
                            $time_begin = $data->time_begin;
                            $time_end = $data->time_end;
                            add_work_07($sheet_id,$advisor_id,$grp_id,$date,$time_begin,$time_end);
                            break;             
                    }
            }else{
                echo json_encode(array('error' => 'Access denied','status' => FALSE));
            }
        }else{
            echo json_encode(array('error' => 'Invalid Method'.' '.$_SERVER['REQUEST_METHOD'],'status' => FALSE)); 
        }
    });

    router::set('work/edit_work',function(){
        require_once('./controllers/work.php');
        $bearer_token = get_bearer_token();
        $is_jwt_valid = is_jwt_valid($bearer_token);
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if($is_jwt_valid) {
                $data = json_decode(file_get_contents("php://input",true));
                $sheet_code = $data->sheet_code;
                    switch ($sheet_code) {
                        case "01": // ประเมินรายงาน
                            $word_id = $data->word_id;
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
                            edit_work_01($word_id,$sheet_id,$advisor_id,$student_id,$date,$time_begin,$time_end,$caption,$txt,$txt1,$txt_val1,$txt2,$txt_val2,$txt3,$txt_val3,$txt5,$txt_val5,$txt6,$txt_val6,$txt7,$txt_val7,$txt_val6_1,$txt_val7_1);
                            break;
                        case "02": // แบบฟอร์ม progress note
                            $word_id = $data->word_id;
                            $sheet_id = $data->sheet_id;
                            $advisor_id = $data->advisor_id;
                            $student_id = $data->student_id;
                            $date = $data->date;
                            $time_begin = $data->time_begin;
                            $time_end = $data->time_end;
                            edit_work_02($word_id,$sheet_id,$advisor_id,$student_id,$date,$time_begin,$time_end);
                            break;
                        case "03": // OPD teaching
                            $word_id = $data->word_id;
                            $sheet_id = $data->sheet_id;
                            $advisor_id = $data->advisor_id;
                            $grp_id = $data->grp_id;
                            $date = $data->date;
                            $time_begin = $data->time_begin;
                            $time_end = $data->time_end;
                            edit_work_03($word_id,$sheet_id,$advisor_id,$grp_id,$date,$time_begin,$time_end);
                            break;
                        case "04": // Ward round
                            $word_id = $data->word_id;
                            $sheet_id = $data->sheet_id;
                            $advisor_id = $data->advisor_id;
                            $grp_id = $data->grp_id;
                            $date = $data->date;
                            $time_begin = $data->time_begin;
                            $time_end = $data->time_end;
                            edit_work_04($word_id,$sheet_id,$advisor_id,$grp_id,$date,$time_begin,$time_end);
                            break;
                        case "05": // Case & Topic ผู้นำเสนอ
                            $word_id = $data->word_id;
                            $sheet_id = $data->sheet_id;
                            $advisor_id = $data->advisor_id;
                            $grp_id = $data->grp_id;
                            $date = $data->date;
                            $time_begin = $data->time_begin;
                            $time_end = $data->time_end;
                            $txt_val = $data->txt_val;
                            edit_work_05($word_id,$sheet_id,$advisor_id,$grp_id,$date,$time_begin,$time_end,$txt_val);
                            break;
                        case "06": // Case & Topic ผู้ร่วม
                            $word_id = $data->word_id;
                            $sheet_id = $data->sheet_id;
                            $advisor_id = $data->advisor_id;
                            $grp_id = $data->grp_id;
                            $date = $data->date;
                            $time_begin = $data->time_begin;
                            $time_end = $data->time_end;
                            $txt_val = $data->txt_val;
                            edit_work_06($word_id,$sheet_id,$advisor_id,$grp_id,$date,$time_begin,$time_end,$txt_val);
                            break; 
                        case "07": // Flipped classroom
                            $word_id = $data->word_id;
                            $sheet_id = $data->sheet_id;
                            $advisor_id = $data->advisor_id;
                            $grp_id = $data->grp_id;
                            $date = $data->date;
                            $time_begin = $data->time_begin;
                            $time_end = $data->time_end;
                            edit_work_07($word_id,$sheet_id,$advisor_id,$grp_id,$date,$time_begin,$time_end);
                            break;             
                    }
            }else{
                echo json_encode(array('error' => 'Access denied','status' => FALSE));
            }
        }else{
            echo json_encode(array('error' => 'Invalid Method'.' '.$_SERVER['REQUEST_METHOD'],'status' => FALSE)); 
        }
    });
?>
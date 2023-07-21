<?php

    function get_sheet(){
        
        $sql = "SELECT * FROM sheet WHERE (stop='00000000' or stop>=curdate()) ORDER BY type,name ";

        $results = dbQuery($sql);

        $rows = array();

        while($row = dbFetchAssoc($results)) {
            $rows[] = $row;
        }
        echo json_encode($rows);
    }

    function get_work_sheet($advisor_id){
        
        // $sql = "SELECT id,sheet_name,sum(num) as num FROM (
        //         select t3.id,concat(trim(t2.ttl),trim(t2.name),' ',trim(t2.lname)) as advisor_name,t3.name as sheet_name,0 as num
        //         FROM work as t1
        //         LEFT JOIN advisor as t2 on t1.advisor_id=t2.id
        //         LEFT JOIN sheet as t3 on t1.sheet_id=t3.id
        //         LEFT JOIN student as t5 on t1.student_id=t5.id
	    //         LIMIT 0 
        //         UNION ALL
        //         SELECT id,convert(' ' using tis620) as advisor_name,name as sheet_name,0 as num
        //         FROM sheet ) as s1 group by id order by id ";
        
        $sql = "SELECT id,sheet_name,sum(num) as num FROM (
            select t3.id,concat(trim(t2.ttl),trim(t2.name),' ',trim(t2.lname)) as advisor_name,t3.name as sheet_name,count(*) as num
            FROM work as t1
            LEFT JOIN advisor as t2 on t1.advisor_id=t2.id
            LEFT JOIN sheet as t3 on t1.sheet_id=t3.id
            WHERE t1.advisor_id='".$advisor_id."' AND (t1.stop='00000000' or t1.stop>=curdate())
            GROUP BY t1.sheet_id
            UNION ALL
            SELECT id,convert(' ' using tis620) as advisor_name,name as sheet_name,0 as num
            FROM sheet ) as s1 group by id order by id ";

        $results = dbQuery($sql);

        $rows = array();

        while($row = dbFetchAssoc($results)) {
            $rows[] = $row;
        }
        echo json_encode($rows);
    }

    function get_work($beg,$end,$sheet_id,$complete){
        
        switch ($complete){
            case 2:
                $comp = " AND (t7.complete=0 or isnull(t7.complete))" ;
                break;
            case 3:
                $comp = "AND (t7.complete=1 and !isnull(t7.complete))";
                break;
            default:
                $comp = "";
        }
        
        $sql = "SELECT t1.*,t2.name,concat(trim(t3.ttl),trim(t3.name)) as advisor_name,t4.name as sheet_name
                ,concat(trim(t5.ttl),trim(t5.name),' ',trim(t5.lname)) as student_name,t6.file_name,t4.type as sheet_type,t7.complete
                FROM work as t1
                LEFT JOIN grp as t2 on t1.grp_id=t2.id
		        LEFT JOIN advisor as t3 on t1.advisor_id=t3.id
		        LEFT JOIN sheet as t4 on t1.sheet_id=t4.id
		        LEFT JOIN student as t5 on t1.student_id=t5.id
		        LEFT JOIN student_file as t6 on t1.id=t6.work_id
		        LEFT JOIN work_detail as t7 on t1.id=t7.work_id and t7.complete=1
	            WHERE t1.date>='".$beg."' AND t1.date<='".$end."' 
                AND t1.sheet_id='".$sheet_id."' $comp
                GROUP BY t1.id
	            ORDER BY t1.id ";

        $results = dbQuery($sql);

        $rows = array();

        while($row = dbFetchAssoc($results)) {
            $rows[] = $row;
        }
        echo json_encode($rows);
    }

    function get_work_adv(){
        
        $sql = "SELECT id,advisor_name,sum(num) as num FROM (
                SELECT t2.id,concat(trim(t2.ttl),trim(t2.name),' ',trim(t2.lname)) as advisor_name,count(*) as num
                FROM work as t1
                LEFT JOIN advisor as t2 on t1.advisor_id=t2.id
	            WHERE (t1.stop='00000000' or t1.stop>=curdate())
                GROUP BY t1.advisor_id
                UNION ALL
	            SELECT id,concat(trim(ttl),trim(name),' ',trim(lname)) as advisor_name,0 as num 
                FROM advisor ) as s1 GROUP BY id ORDER BY id";

        $results = dbQuery($sql);

        $rows = array();

        while($row = dbFetchAssoc($results)) {
            $rows[] = $row;
        }
        echo json_encode($rows);
    }
                         
    function add_work_01($sheet_id,$advisor_id,$student_id,$date,$time_begin,$time_end,$caption,$txt,$txt1,$txt_val1,$txt2,$txt_val2,$txt3,$txt_val3,$txt5,$txt_val5,$txt6,$txt_val6,$txt7,$txt_val7,$txt_val6_1,$txt_val7_1){
        
        $sql = "INSERT INTO work SET sheet_id='".$sheet_id."',advisor_id='".$advisor_id."',date='".$date."'
                ,time_begin='".$time_begin."',time_end='".$time_end."',student_id='".$student_id."' ";

        $results = dbQuery($sql);

        $sql1 = "SELECT last_insert_id() as last_ ";
        $results1 = dbQuery($sql1);
        $row = dbFetchAssoc($results1);
        $work_id = $row['last_'];

        switch ($txt) {
            case 1:
                $txt_val = 'จักษุ(ช)';
                break;
            case 2:
                $txt_val = 'จักษุ(ญ)';
                break;
            case 3:
                $txt_val = 'พิเศษ';
                break;
            default:
                $txt_val = '';
                break;
        }

        $sql3 = "INSERT INTO work_head SET work_id='".$work_id."',txt='".$caption."',txt_val='".$txt_val."' ";
        $results3 = dbQuery($sql3);

        $sql4 = "INSERT INTO work_head SET work_id='".$work_id."',txt='".$txt1."',txt_val='".$txt_val1."' ";
        $results4 = dbQuery($sql4);

        $sql5 = "INSERT INTO work_head SET work_id='".$work_id."',txt='".$txt2."',txt_val='".$txt_val2."' ";
        $results5 = dbQuery($sql5);

        $sql6 = "INSERT INTO work_head SET work_id='".$work_id."',txt='".$txt3."',txt_val='".$txt_val3."' ";
        $results6 = dbQuery($sql6);

        // $sql7 = "INSERT INTO work_head SET work_id='".$work_id."',txt='".$txt4."',txt_val='".$txt_val4."' ";
        // $results7 = dbQuery($sql7);

        $sql8 = "INSERT INTO work_head SET work_id='".$work_id."',txt='".$txt5."',txt_val='".$txt_val5."' ";
        $results8 = dbQuery($sql8);

        $sql9 = "INSERT INTO work_head SET work_id='".$work_id."',txt='".$txt6."',txt_val='".$txt_val6."' ";
        $results9 = dbQuery($sql9);

        $sql10 = "INSERT INTO work_head SET work_id='".$work_id."',txt='".$txt7."',txt_val='".$txt_val7."' ";
        $results10 = dbQuery($sql10);

        /* check 72 hour */
        $sql11 = "SELECT id FROM work_detail WHERE work_id='".$work_id."' AND student_id='".$student_id."' ";
        $results11 = dbQuery($sql11);
        $row = dbFetchAssoc($results11);
        $rows = dbNumRows($results11);
        if ($rows > 0) {
            $work_detail_id = $row['id'];
        }else{
            $sql12 = "INSERT INTO work_detail SET work_id='".$work_id."',student_id='".$student_id."',d_update=curdate() ";
            $results12 = dbQuery($sql12);
            $sql13 = "SELECT last_insert_id() as last_ ";
            $results13 = dbQuery($sql13);
            $row13 = dbFetchAssoc($results13);
            $work_detail_id = $row13['last_'];
        }
        
        /*  เกิน 3 วันไม่ได้คะแนน  */ 
        if(date('Y-M-d',strtotime($txt_val7_1))-date('Y-M-d',strtotime($txt_val6_1)) > 3) {
            $sql14 = "INSERT INTO work_score SET work_detail_id='".$work_detail_id."',score=0 ";
            $results14 = dbQuery($sql12);
        } else {
            $sql15 = "INSERT INTO work_score SET work_detail_id='".$work_detail_id."',score=1 ";
            $results15 = dbQuery($sql15);
        }
         
    }

    function add_work_02($sheet_id,$advisor_id,$student_id,$date,$time_begin,$time_end){
        $sql = "INSERT INTO work SET sheet_id='".$sheet_id."',advisor_id='".$advisor_id."',student_id='".$student_id."',date='".$date."'
                ,time_begin='".$time_begin."',time_end='".$time_end."' ";

        $results = dbQuery($sql);
        
    }

    function add_work_03($sheet_id,$advisor_id,$grp_id,$date,$time_begin,$time_end){
        $sql = "INSERT INTO work SET sheet_id='".$sheet_id."',advisor_id='".$advisor_id."',grp_id='".$grp_id."',date='".$date."'
                ,time_begin='".$time_begin."',time_end='".$time_end."' ";

        $results = dbQuery($sql);
        
    }
    
    function add_work_04($sheet_id,$advisor_id,$grp_id,$date,$time_begin,$time_end){
        $sql = "INSERT INTO work SET sheet_id='".$sheet_id."',advisor_id='".$advisor_id."',grp_id='".$grp_id."',date='".$date."'
                ,time_begin='".$time_begin."',time_end='".$time_end."' ";

        $results = dbQuery($sql);
        
    }

    function add_work_05($sheet_id,$advisor_id,$grp_id,$date,$time_begin,$time_end,$txt_val){
        $sql = "INSERT INTO work SET sheet_id='".$sheet_id."',advisor_id='".$advisor_id."',grp_id='".$grp_id."',date='".$date."'
                ,time_begin='".$time_begin."',time_end='".$time_end."' ";

        $results = dbQuery($sql);
        
        $sql1 = "SELECT last_insert_id() as last_ ";
        $results1 = dbQuery($sql1);
        $row = dbFetchAssoc($results1);
        $work_id = $row['last_'];

        $sql3 = "INSERT INTO work_head SET work_id='".$work_id."',txt='หัวข้อเรื่อง',txt_val='".$txt_val."' ";
        $results3 = dbQuery($sql3);
        
    }

    function add_work_06($sheet_id,$advisor_id,$grp_id,$date,$time_begin,$time_end,$txt_val){
        $sql = "INSERT INTO work SET sheet_id='".$sheet_id."',advisor_id='".$advisor_id."',grp_id='".$grp_id."',date='".$date."'
                ,time_begin='".$time_begin."',time_end='".$time_end."' ";

        $results = dbQuery($sql);
        
        $sql1 = "SELECT last_insert_id() as last_ ";
        $results1 = dbQuery($sql1);
        $row = dbFetchAssoc($results1);
        $work_id = $row['last_'];
        
        $sql3 = "INSERT INTO work_head SET work_id='".$work_id."',txt='หัวข้อเรื่อง',txt_val='".$txt_val."' ";
        $results3 = dbQuery($sql3);
        
    }

    function add_work_07($sheet_id,$advisor_id,$grp_id,$date,$time_begin,$time_end){
        $sql = "INSERT INTO work SET sheet_id='".$sheet_id."',advisor_id='".$advisor_id."',grp_id='".$grp_id."',date='".$date."'
                ,time_begin='".$time_begin."',time_end='".$time_end."' ";

        $results = dbQuery($sql);
        
    }
                
    function edit_work_01($work_id,$sheet_id,$advisor_id,$student_id,$date,$time_begin,$time_end,$caption,$txt,$txt1,$txt_val1,$txt2,$txt_val2,$txt3,$txt_val3,$txt5,$txt_val5,$txt6,$txt_val6,$txt7,$txt_val7,$txt_val6_1,$txt_val7_1){
        $sql = "UPDATE work SET sheet_id='".$sheet_id."',advisor_id='".$advisor_id."',date='".$date."'
                ,time_begin='".$time_begin."',time_end='".$time_end."',student_id='".$student_id."' WHERE id='".$work_id."' ";

        $results = dbQuery($sql);

        $sql1 = "DELETE FROM work_head WHERE work_id='".$work_id."' ";
        $results1 = dbQuery($sql1);

        switch ($txt) {
            case 1:
                $txt_val = 'จักษุ(ช)';
                break;
            case 2:
                $txt_val = 'จักษุ(ญ)';
                break;
            case 3:
                $txt_val = 'พิเศษ';
                break;
            default:
                $txt_val = '';
                break;
        }

        $sql3 = "INSERT INTO work_head SET work_id='".$work_id."',txt='".$caption."',txt_val='".$txt_val."' ";
        $results3 = dbQuery($sql3);

        $sql4 = "INSERT INTO work_head SET work_id='".$work_id."',txt='".$txt1."',txt_val='".$txt_val1."' ";
        $results4 = dbQuery($sql4);

        $sql5 = "INSERT INTO work_head SET work_id='".$work_id."',txt='".$txt2."',txt_val='".$txt_val2."' ";
        $results5 = dbQuery($sql5);

        $sql6 = "INSERT INTO work_head SET work_id='".$work_id."',txt='".$txt3."',txt_val='".$txt_val3."' ";
        $results6 = dbQuery($sql6);

        $sql7 = "INSERT INTO work_head SET work_id='".$work_id."',txt='".$txt4."',txt_val='".$txt_val4."' ";
        $results7 = dbQuery($sql7);

        $sql8 = "INSERT INTO work_head SET work_id='".$work_id."',txt='".$txt5."',txt_val='".$txt_val5."' ";
        $results8 = dbQuery($sql8);

        $sql9 = "INSERT INTO work_head SET work_id='".$work_id."',txt='".$txt6."',txt_val='".$txt_val6."' ";
        $results9 = dbQuery($sql9);

        $sql10 = "INSERT INTO work_head SET work_id='".$work_id."',txt='".$txt7."',txt_val='".$txt_val7."' ";
        $results10 = dbQuery($sql10);

        /* check 72 hour */
        $sql11 = "SELECT id FROM work_detail WHERE work_id='".$work_id."' AND student_id='".$student_id."' ";
        $results11 = dbQuery($sql11);
        $row = dbFetchAssoc($results11);
        $rows = dbNumRows($results11);
        if ($rows > 0) {
            $work_detail_id = $row['id'];
        }else{
            $sql12 = "INSERT INTO work_detail SET work_id='".$work_id."',student_id='".$student_id."',d_update=curdate() ";
            $results12 = dbQuery($sql12);
            $sql13 = "SELECT last_insert_id() as last_ ";
            $results13 = dbQuery($sql13);
            $row13 = dbFetchAssoc($results13);
            $work_detail_id = $row13['last_'];
        }
        
        /*  เกิน 3 วันไม่ได้คะแนน  */ 
        if(date('Y-M-d',strtotime($txt_val7_1))-date('Y-M-d',strtotime($txt_val6_1)) > 3) {
            $sql14 = "UPDATE work_score SET score=0 WHERE work_detail_id='".$work_detail_id."' AND sheet_detail_id=0 ";
            $results14 = dbQuery($sql12);
        } else {
            $sql15 = "UPDATE work_score SET score=1 WHERE work_detail_id='".$work_detail_id."' AND sheet_detail_id=0 ";
            $results15 = dbQuery($sql15);
        }
         
    }

    function edit_work_02($work_id,$sheet_id,$advisor_id,$student_id,$date,$time_begin,$time_end){
        $sql = "UPDATE work SET sheet_id='".$sheet_id."',advisor_id='".$advisor_id."',student_id='".$student_id."',date='".$date."'
                ,time_begin='".$time_begin."',time_end='".$time_end."' WHERE id='".$work_id."' ";

        $results = dbQuery($sql);

        $sql1 = "DELETE FROM work_head WHERE work_id='".$work_id."' ";
        $results1 = dbQuery($sql1);
        
    }

    function edit_work_03($work_id,$sheet_id,$advisor_id,$grp_id,$date,$time_begin,$time_end){
        $sql = "UPDATE work SET sheet_id='".$sheet_id."',advisor_id='".$advisor_id."',grp_id='".$grp_id."',date='".$date."'
                ,time_begin='".$time_begin."',time_end='".$time_end."' WHERE id='".$work_id."' ";

        $results = dbQuery($sql);

        $sql1 = "DELETE FROM work_head WHERE work_id='".$work_id."' ";
        $results1 = dbQuery($sql1);
        
    }
    
    function edit_work_04($work_id,$sheet_id,$advisor_id,$grp_id,$date,$time_begin,$time_end){
        $sql = "UPDATE work SET sheet_id='".$sheet_id."',advisor_id='".$advisor_id."',grp_id='".$grp_id."',date='".$date."'
                ,time_begin='".$time_begin."',time_end='".$time_end."' WHERE id='".$work_id."' ";

        $results = dbQuery($sql);

        $sql1 = "DELETE FROM work_head WHERE work_id='".$work_id."' ";
        $results1 = dbQuery($sql1);
        
    }

    function edit_work_05($work_id,$sheet_id,$advisor_id,$grp_id,$date,$time_begin,$time_end,$txt_val){
        $sql = "UPDATE work SET sheet_id='".$sheet_id."',advisor_id='".$advisor_id."',grp_id='".$grp_id."',date='".$date."'
                ,time_begin='".$time_begin."',time_end='".$time_end."' WHERE id='".$work_id."' ";

        $results = dbQuery($sql);

        $sql1 = "DELETE FROM work_head WHERE work_id='".$work_id."' ";
        $results1 = dbQuery($sql1);

        $sql2 = "INSERT INTO work_head SET work_id='".$work_id."',txt='หัวข้อเรื่อง',txt_val='".$txt_val."' ";
        $results2 = dbQuery($sql2);
        
    }

    function edit_work_06($work_id,$sheet_id,$advisor_id,$grp_id,$date,$time_begin,$time_end,$txt_val){
        $sql = "UPDATE work SET sheet_id='".$sheet_id."',advisor_id='".$advisor_id."',grp_id='".$grp_id."',date='".$date."'
                ,time_begin='".$time_begin."',time_end='".$time_end."' WHERE id='".$work_id."' ";

        $results = dbQuery($sql);
        
        $sql1 = "DELETE FROM work_head WHERE work_id='".$work_id."' ";
        $results1 = dbQuery($sql1);
        
        $sql2 = "INSERT INTO work_head SET work_id='".$work_id."',txt='หัวข้อเรื่อง',txt_val='".$txt_val."' ";
        $results2 = dbQuery($sql2);
        
    }

    function edit_work_07($work_id,$sheet_id,$advisor_id,$grp_id,$date,$time_begin,$time_end){
        $sql = "UPDATE work SET sheet_id='".$sheet_id."',advisor_id='".$advisor_id."',grp_id='".$grp_id."',date='".$date."'
                ,time_begin='".$time_begin."',time_end='".$time_end."' WHERE id='".$work_id."' ";

        $results = dbQuery($sql);
        
    }

    function get_work_head($work_id){
        
        $sql = "SELECT * FROM work_head WHERE work_id='".$work_id."' ";

        $results = dbQuery($sql);

        $rows = array();

        while($row = dbFetchAssoc($results)) {
            $rows[] = $row;
        }
        echo json_encode($rows);
    }

    function get_work_student(){
        
        $sql = "SELECT id,ttl,name,lname FROM student WHERE stop!='0000-00-00' ";

        $results = dbQuery($sql);

        $rows = array();

        while($row = dbFetchAssoc($results)) {
            $rows[] = $row;
        }
        echo json_encode($rows);
    }

    function get_work_tbllu($title){
        
        $sql = "SELECT * FROM tbllu WHERE title='".$title."' ";

        $results = dbQuery($sql);

        $rows = array();

        while($row = dbFetchAssoc($results)) {
            $rows[] = $row;
        }
        echo json_encode($rows);
    }

    function ck_get_work($work_id){
        
        $sql = "SELECT t1.id,t2.id as work_detail_id,t3.id as work_score_id FROM work as t1
                LEFT JOIN work_detail as t2 on t1.id=t2.work_id
                LEFT JOIN work_score as t3 on t2.id=t3.work_detail_id
                 WHERE t1.id='".$work_id."' ";

        $results = dbQuery($sql);
        $row = dbFetchAssoc($results);
        //echo $row['work_detail_id'];
        // $rows = array();

        // while($row = dbFetchAssoc($results)) {
        //     $rows[] = $row;
        // }
        if (!is_null($row['work_detail_id'])) {
            echo json_encode(array('work_id' => $work_id,'status' => 1));
        }else{
            echo json_encode(array('work_id' => $work_id,'status' => 0));
        }
        
    }

    function delete_work($work_id){
        
        $sql = "SELECT t1.id,t2.id as work_detail_id,t3.id as work_score_id FROM work as t1
                LEFT JOIN work_detail as t2 on t1.id=t2.work_id
                LEFT JOIN work_score as t3 on t2.id=t3.work_detail_id
                 WHERE t1.id='".$work_id."' ";

        $results = dbQuery($sql);

        while($row = dbFetchAssoc($results)) {
            if (!is_null($row['work_score_id'])) {
                $sql2 = "DELETE FROM work_score WHERE id='".$row['work_score_id']."'";
                $results2 = dbQuery($sql2);
            }
            if (!is_null($row['work_detail_id'])) {
                $sql3 = "DELETE FROM work_detail  WHERE id='".$row['work_detail_id']."'";
                $results3 = dbQuery($sql3);
            }
            $sql4 = "DELETE FROM work_head WHERE work_id='".$row['id']."'";
                $results4 = dbQuery($sql4);
            $sql5 = "DELETE FROM work WHERE id='".$row['id']."'";
                $results5 = dbQuery($sql5);
        }
        
    }

    function delete_student_file($id){
        
        $sql = "DELETE FROM student_file WHERE id='".$id."'";

        $results = dbQuery($sql);

        if (!$results) {
            echo json_encode(array('success' => 'You delete student_file successfully','status' => TRUE));
        }else{
            echo json_encode(array('error' => 'You delete student_file successfully','status' => FALSE));
        }
        
    }

    function get_student_file($work_id){
        
        $sql = "SELECT t1.*,t2.date as work_date FROM student_file as t1
                LEFT JOIN work as t2 on t1.work_id=t2.id
                WHERE t1.work_id='".$work_id."' ";

        $results = dbQuery($sql);

        $rows = array();

        while($row = dbFetchAssoc($results)) {
            $rows[] = $row;
        }
        echo json_encode($rows);
        
    }

    


?>
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

    function work_sheet(){
        
        $sql = "SELECT id,sheet_name,sum(num) as num FROM (
                select t3.id,concat(trim(t2.ttl),trim(t2.name),' ',trim(t2.lname)) as advisor_name,t3.name as sheet_name,0 as num
                FROM work as t1
                LEFT JOIN advisor as t2 on t1.advisor_id=t2.id
                LEFT JOIN sheet as t3 on t1.sheet_id=t3.id
                LEFT JOIN student as t5 on t1.student_id=t5.id
	            LIMIT 0 
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

    function work($beg,$end,$sheet_id,$complete){
        
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

    function work_adv(){
        
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

    function get_worksheet($advisor_id){
        
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

    function del_work($work_id){
        
        $sql = "SELECT t1.id,t2.id as work_detail_id,t3.id as work_score_id
                FROM work as t1
                LEFT JOIN work_detail as t2 on t1.id=t2.work_id
                LEFT JOIN work_score as t3 on t2.id=t3.work_detail_id
                WHERE t1.id='".$work_id."' ";

        $results = dbQuery($sql);

        $row = dbFetchAssoc($results);

        if(!is_null($row['work_detail_id'])){
            echo json_encode(array('status' => 'Not null work_detail_id'));
        }else{

            while($rows = dbFetchAssoc($results)) {
                $work_score_id = $rows['work_score_id'];
                $work_detail_id = $rows['work_detail_id'];
                $work_id = $rows['id'];
                if(!is_null($work_score_id)){
                    $sql1 = "DELETE FROM work_score WHERE id='".$work_score_id."'";
                    $results1 = dbQuery($sql1);
                }
                if(!is_null($work_score_id)){
                    $sql2 = "DELETE FROM work_detail WHERE id='".$work_detail_id."'";
                    $results2 = dbQuery($sql2);
                }
                    $sql3 = "DELETE FROM work_head WHERE work_id='".$work_id."'";
                    $results3 = dbQuery($sql3);
                    $sql4 = "DELETE FROM work WHERE id='".$work_id."'";
                    $results4 = dbQuery($sql4);
            }
            
        }
    }

    // function add_work($sheet_id,$advisor_id,$grp_id,$date,$time_begin,$time_end,$student_id){

    //     $sql = "INSERT INTO work SET sheet_id='".$sheet_id."',advisor_id='".$advisor_id."',grp_id='".$grp_id."',date='".$date."'
    //             ,time_begin='".$time_begin."',time_end='".$time_end."',student_id='".$student_id."' ";

    //     $results = dbQuery($sql);

    //     $sql2 = "SELECT last_insert_id() as last_";
    //     $results2 = dbQuery($sql2);

    //     $work_id = dbFetchAssoc($results2);



    // }

?>
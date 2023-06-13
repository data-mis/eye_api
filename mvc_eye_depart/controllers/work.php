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


?>
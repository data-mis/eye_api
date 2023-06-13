
#---------------------------------------------------   function [ student/get_student ]   ---------------------------------------------------# 
เป็น function ขอข้อมูลนักศึกษา (student) 

********  รูปแบบการส่งขอข้อมูลนักศึกษา  ส่งเป็นไฟล์ json **********
ตัวอย่าง การส่งไฟล์ json  (ต้องส่งเลข token มาด้วย)
    {
        "year" : "2023"
    }

    ** Bearer Token **
    eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VybmFtZSI6Inp6IiwiZXhwIjoxNjg2NjIxNjA5fQ.WDqmDqUD1If6PCkLucp_0oJDQ21Nc5te3EngU_o0OtI

*--------- results ---------*
    "[
        {
            "Id": "1",
            "ttl": "นาย",
            "name": "กฤติน",
            "lname": "สถิรลีลา",
            "sex": "1",
            "std_id": "610710001",
            "advisor_id": "2",
            "grp_id": "1",
            "year_": "2023",
            "start": "2023-01-01",
            "stop": "0000-00-00",
            "type": "นศพ.",
            "mcq": "75.00",
            "osce1": "85.00",
            "osce2": "95.00",
            "meq1": "15.00",
            "meq2": "14.00",
            "book": "0.50",
            "rep_k": "4.36",
            "rep_s": "1.52",
            "pg_note": "4.61",
            "opd": "5.56",
            "ward": "4.45",
            "case_p": "10.75",
            "case_l": "4.92",
            "advisor_name": "ผศ.พญ.อัจฉรียา วิวัฒน์วงศ์วนา",
            "grp_name": "ฌ2   "
        }
    ]"
#--------------------------------------------------------------------------------------------------------------------------------------------------#

#--------------------------------------------------   function [ student/get_student_advisor ]   --------------------------------------------------# 
เป็น function ขอข้อมูลอาจารย์ (teacher) 

********  รูปแบบการส่งขอข้อมูลนักศึกษา  **********
ตัวอย่าง ต้องส่งเลข token 
    
    ** Bearer Token **
    eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VybmFtZSI6Inp6IiwiZXhwIjoxNjg2NjIxNjA5fQ.WDqmDqUD1If6PCkLucp_0oJDQ21Nc5te3EngU_o0OtI

*--------- results ---------*
    "[
        {
            "name": "รศ.นพ.วินัย ชัยดรุณ",
            "id": "16"
        },
        {
            "name": "รศ.พญ.ประภัสสร ผาติกุลศิลา",
            "id": "4"
        },
        {
            "name": "รศ.นพ.ดิเรก ผาติกุลศิลา",
            "id": "13"
        }
    ]"
#--------------------------------------------------------------------------------------------------------------------------------------------------#

#----------------------------------------------------   function [ student/get_student_grp ]   ----------------------------------------------------# 
เป็น function ขอข้อมูลอาจารย์ (teacher) 

********  รูปแบบการส่งขอข้อมูลอาจารย์  **********
ตัวอย่าง ต้องส่งเลข token 
    
    ** Bearer Token **
    eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VybmFtZSI6Inp6IiwiZXhwIjoxNjg2NjIxNjA5fQ.WDqmDqUD1If6PCkLucp_0oJDQ21Nc5te3EngU_o0OtI

*--------- results ---------*
    "[
        {
            "name": "รศ.นพ.วินัย ชัยดรุณ",
            "id": "16"
        },
        {
            "name": "รศ.พญ.ประภัสสร ผาติกุลศิลา",
            "id": "4"
        },
        {
            "name": "รศ.นพ.ดิเรก ผาติกุลศิลา",
            "id": "13"
        }
    ]"
#--------------------------------------------------------------------------------------------------------------------------------------------------#

#----------------------------------------------------   function [ student/get_student_grp ]   ----------------------------------------------------# 
เป็น function ขอข้อมูลกลุ่ม (grp) 

********  รูปแบบการส่งขอข้อมูลกลุ่ม  **********
ตัวอย่าง ต้องส่งเลข token 
    
    ** Bearer Token **
    eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VybmFtZSI6Inp6IiwiZXhwIjoxNjg2NjIxNjA5fQ.WDqmDqUD1If6PCkLucp_0oJDQ21Nc5te3EngU_o0OtI

*--------- results ---------*
    "[
        {
            "name": "ก1   ",
            "id": "2",
            "start": "2022-04-01",
            "stop": "2022-04-22"
        },
        {
            "name": "ก2   ",
            "id": "16",
            "start": "2022-04-23",
            "stop": "2022-05-14"
        }
    ]"
#--------------------------------------------------------------------------------------------------------------------------------------------------#

#---------------------------------------------------   function [ student/add_student ]   ---------------------------------------------------# 
เป็น function เพิ่มข้อมูลนักศึกษา (student) 

********  รูปแบบการส่งเพิ่มข้อมูลนักศึกษา  ส่งเป็นไฟล์ json **********
ตัวอย่าง การส่งไฟล์ json  (ต้องส่งเลข token มาด้วย)
    {
        "year" : "2023",
        "ttl" : "นาย",
        "name" : "กฤติน",
        "lname" : "สถิรลีลา",
        "type" : "นศพ.",
        "std_id" : "610710001",
        "advisor_id" : "2",
        "grp_id" : "1",
        "start" : "0000-00-00",
        "stop" : "0000-00-00",
    }

    ** Bearer Token **
    eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VybmFtZSI6Inp6IiwiZXhwIjoxNjg2NjIxNjA5fQ.WDqmDqUD1If6PCkLucp_0oJDQ21Nc5te3EngU_o0OtI

*--------- results ---------*
    {
    "success": "You add student successfully",
    "status": true
    }
#--------------------------------------------------------------------------------------------------------------------------------------------------#

#---------------------------------------------------   function [ student/edit_student ]   ---------------------------------------------------# 
เป็น function แก้ไขข้อมูลนักศึกษา (student) 

********  รูปแบบการส่งแก้ไขข้อมูลนักศึกษา  ส่งเป็นไฟล์ json **********
ตัวอย่าง การส่งไฟล์ json  (ต้องส่งเลข token มาด้วย)
    {
        "id" : "1",
        "year" : "2023",
        "ttl" : "นาย",
        "name" : "กฤติน",
        "lname" : "สถิรลีลา",
        "type" : "นศพ.",
        "std_id" : "610710001",
        "advisor_id" : "2",
        "grp_id" : "1",
        "start" : "0000-00-00",
        "stop" : "0000-00-00",
    }

    ** Bearer Token **
    eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VybmFtZSI6Inp6IiwiZXhwIjoxNjg2NjIxNjA5fQ.WDqmDqUD1If6PCkLucp_0oJDQ21Nc5te3EngU_o0OtI

*--------- results ---------*
    {
    "success": "You edit student successfully",
    "status": true
    }
#--------------------------------------------------------------------------------------------------------------------------------------------------#

#---------------------------------------------------   function [ student/delete_student ]   ---------------------------------------------------# 
เป็น function ลบข้อมูลนักศึกษา (student) 

********  รูปแบบการส่งลบข้อมูลนักศึกษา  ส่งเป็นไฟล์ json **********
ตัวอย่าง การส่งไฟล์ json  (ต้องส่งเลข token มาด้วย)
    {
        "id" : "1"
    }

    ** Bearer Token **
    eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VybmFtZSI6Inp6IiwiZXhwIjoxNjg2NjIxNjA5fQ.WDqmDqUD1If6PCkLucp_0oJDQ21Nc5te3EngU_o0OtI

*--------- results ---------*
    {
    "success": "You delete student successfully",
    "status": true
    }
#--------------------------------------------------------------------------------------------------------------------------------------------------#

#---------------------------------------------------   function [ student/upload_image_student ]   ---------------------------------------------------# 
เป็น function อัพโหลดรูปนักศึกษา (images/student) 

********  รูปแบบการส่งอัพโหลดรูปนักศึกษา  **********
ตัวอย่าง การส่งไฟล์ POST เข้ามาใน  From  (ต้องส่งเลข token มาด้วย)
    
    <form action="#.php" method="post" enctype="multipart/form-data">
        <input type="file" name="file">
        <input type="hidden" name="std_id" value='610710001'>
    </form>
    
    ** Bearer Token **
    eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VybmFtZSI6Inp6IiwiZXhwIjoxNjg2NjIxNjA5fQ.WDqmDqUD1If6PCkLucp_0oJDQ21Nc5te3EngU_o0OtI

*--------- results ---------*
    {
    "success": "You upload image student ./images/student/66/610710001.jpg successfully",
    "status": true
    }
#--------------------------------------------------------------------------------------------------------------------------------------------------#

#---------------------------------------------------   function [ student/get_image_student ]   ---------------------------------------------------# 
เป็น function ค้นหารูปนักศึกษา (images/student) 

********  รูปแบบการส่งค้นหารูปนักศึกษา  **********
ตัวอย่าง การส่งไฟล์ json  (ต้องส่งเลข token มาด้วย)
    {
        "std_id" : "610710001"
    }
    
    ** Bearer Token **
    eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VybmFtZSI6Inp6IiwiZXhwIjoxNjg2NjIxNjA5fQ.WDqmDqUD1If6PCkLucp_0oJDQ21Nc5te3EngU_o0OtI

*--------- results ---------*
    {
    "url": "11.0.0.106/pro_web/eye_api/mvc_eye_depart/images/student/66/610710001.jpg",
    "status": true
    }
#--------------------------------------------------------------------------------------------------------------------------------------------------#

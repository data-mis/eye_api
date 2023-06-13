#-------------------------------------------------------   function [ teacher/get_teacher ]   -------------------------------------------------------# 
เป็น function ขอดึงข้อมูลอาจารย์ (teacher)

********  รูปแบบการส่งขอข้อมูลนักศึกษา  **********
ตัวอย่าง ต้องส่งเลข token 
    
    ** Bearer Token **
    eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VybmFtZSI6Inp6IiwiZXhwIjoxNjg2NjIxNjA5fQ.WDqmDqUD1If6PCkLucp_0oJDQ21Nc5te3EngU_o0OtI

*--------- results ---------*
    [
        {
            "Id": "9",
            "ttl": "ผศ.พญ.",
            "name": "จุฬาลักษณ์",
            "lname": "ตั้งมั่นคงวรกูล",
            "sex": "2",
            "adv_id": "34143",
            "pin": "561654",
            "start": "0000-00-00",
            "stop": "0000-00-00",
            "email": "",
            "line_id": ""
        },
        {
            "Id": "6",
            "ttl": "ผศ.นพ.",
            "name": "ณวัฒน์",
            "lname": "วัฒนชัย",
            "sex": "1",
            "adv_id": "21947",
            "pin": "840465",
            "start": "0000-00-00",
            "stop": "0000-00-00",
            "email": "",
            "line_id": ""
        }
    ]
#--------------------------------------------------------------------------------------------------------------------------------------------------# 

#---------------------------------------------------   function [ teacher/add_teacher ]   ---------------------------------------------------# 
เป็น function เพิ่มข้อมูลอาจารย์ (teacher) 

********  รูปแบบการส่งเพิ่มข้อมูลอาจารย์  ส่งเป็นไฟล์ json **********
ตัวอย่าง การส่งไฟล์ json  (ต้องส่งเลข token มาด้วย)
    {
        "ttl" : "ผศ.นพ.",
        "name" : "ณวัฒน์",
        "lname" : "วัฒนชัย",
        "sex" : "1.",
        "pin" : "840465",
        "adv_id" : "21947",
        "start" : "0000-00-00",
        "stop" : "0000-00-00",
    }

    ** Bearer Token **
    eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VybmFtZSI6Inp6IiwiZXhwIjoxNjg2NjIxNjA5fQ.WDqmDqUD1If6PCkLucp_0oJDQ21Nc5te3EngU_o0OtI

*--------- results ---------*
    {
    "success": "You insert teacher successfully",
    "status": true
    }
#--------------------------------------------------------------------------------------------------------------------------------------------------#

#---------------------------------------------------   function [ teacher/delete_teacher ]   ---------------------------------------------------# 
เป็น function ลบข้อมูลอาจารย์ (teacher อัพเดทวันที่ stop เพื่อหยุดใช้งาน) 

********  รูปแบบการส่งลบข้อมูลอาจารย์  ส่งเป็นไฟล์ json **********
ตัวอย่าง การส่งไฟล์ json  (ต้องส่งเลข token มาด้วย)
    {
        "id" : "1",
        "stop" : "2023-06-12"
    }

    ** Bearer Token **
    eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VybmFtZSI6Inp6IiwiZXhwIjoxNjg2NjIxNjA5fQ.WDqmDqUD1If6PCkLucp_0oJDQ21Nc5te3EngU_o0OtI

*--------- results ---------*
    {
    "success": "You delete teacher successfully",
    "status": true
    }
#--------------------------------------------------------------------------------------------------------------------------------------------------#

#---------------------------------------------------   function [ teacher/edit_teacher ]   ---------------------------------------------------# 
เป็น function แก้ไขข้อมูลอาจารย์ (teacher) 

********  รูปแบบการส่งแก้ไขข้อมูลอาจารย์  ส่งเป็นไฟล์ json **********
ตัวอย่าง การส่งไฟล์ json  (ต้องส่งเลข token มาด้วย)
    {
        "id" : "6",
        "ttl" : "ผศ.นพ.",
        "name" : "ณวัฒน์",
        "lname" : "วัฒนชัย",
        "sex" : "1.",
        "pin" : "840465",
        "adv_id" : "21947",
        "start" : "0000-00-00",
        "stop" : "0000-00-00",
    }

    ** Bearer Token **
    eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VybmFtZSI6Inp6IiwiZXhwIjoxNjg2NjIxNjA5fQ.WDqmDqUD1If6PCkLucp_0oJDQ21Nc5te3EngU_o0OtI

*--------- results ---------*
    {
    "success": "You edit teacher successfully",
    "status": true
    }
#--------------------------------------------------------------------------------------------------------------------------------------------------#
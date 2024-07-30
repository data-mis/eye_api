
#---------------------------------------------------   function [ group/get_group ]   ---------------------------------------------------# 
เป็น function ขอข้อมูลกลุ่ม (group) 

********  รูปแบบการส่งขอข้อมูลกลุ่มตามปี  ส่งเป็นไฟล์ json **********
ตัวอย่าง การส่งไฟล์ json  (ต้องส่งเลข token มาด้วย)
    {
        "year" : "2023"
    }

    ** Bearer Token **
    eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VybmFtZSI6Inp6IiwiZXhwIjoxNjg2NjIxNjA5fQ.WDqmDqUD1If6PCkLucp_0oJDQ21Nc5te3EngU_o0OtI

*--------- results ---------*
    "[
        {
            "Id": "2",
            "year_": "2023",
            "name": "ก1   ",
            "start": "2022-04-01",
            "stop": "2022-04-22",
            "meq1": "0",
            "meq2": "0",
            "teacher1": "0",
            "teacher2": "0"
        },
        {
            "Id": "16",
            "year_": "2023",
            "name": "ก2   ",
            "start": "2022-04-23",
            "stop": "2022-05-14",
            "meq1": "0",
            "meq2": "0",
            "teacher1": "0",
            "teacher2": "0"
        }
    ]"
#--------------------------------------------------------------------------------------------------------------------------------------------------#

#---------------------------------------------------   function [ group/get_group_advisor ]   ---------------------------------------------------# 
เป็น function ขอข้อมูล ชื่อและรหัส ว.แพทย์(adv_id)  อาจารย์ (advisor) 

********  รูปแบบการส่งขอข้อมูล ชื่อและรหัส ว.แพทย์(adv_id)  **********
ตัวอย่าง ส่งเลข token 

    ** Bearer Token **
    eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VybmFtZSI6Inp6IiwiZXhwIjoxNjg2NjIxNjA5fQ.WDqmDqUD1If6PCkLucp_0oJDQ21Nc5te3EngU_o0OtI

*--------- results ---------*
    [
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
        },
        {
            "name": "รศ.พญ.นภาพร ตนานุวัฒน์",
            "id": "14"
        }
    ]
#--------------------------------------------------------------------------------------------------------------------------------------------------#

#---------------------------------------------------   function [ group/get_group_student ]   ---------------------------------------------------# 
เป็น function ขอข้อมูลนักศึกษา WHERE grp_id=0   

********  รูปแบบการส่งขอข้อมูลนักศึกษา WHERE grp_id=0  **********
ตัวอย่าง ส่งเลข token 

    ** Bearer Token **
    eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VybmFtZSI6Inp6IiwiZXhwIjoxNjg2NjIxNjA5fQ.WDqmDqUD1If6PCkLucp_0oJDQ21Nc5te3EngU_o0OtI

*--------- results ---------*
    [
        {
        "id": "33",
        "std_id": "661111111",
        "name": "นพ.ทดลอง สดใหม่"
        }
    ]
#--------------------------------------------------------------------------------------------------------------------------------------------------#

#---------------------------------------------------   function [ group/get_in_group_student ]   ---------------------------------------------------# 
เป็น function ขอข้อมูลนักศึกษาตามกลุ่ม WHERE grp_id='".$grp_id."'

********  รูปแบบการส่งขอข้อมูลนักศึกษาตามกลุ่ม WHERE grp_id='".$grp_id."'  ส่งเป็นไฟล์ json **********
ตัวอย่าง การส่งไฟล์ json  (ต้องส่งเลข token มาด้วย)
    {
        "grp_id" : "9"
    }

    ** Bearer Token **
    eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VybmFtZSI6Inp6IiwiZXhwIjoxNjg2NjIxNjA5fQ.WDqmDqUD1If6PCkLucp_0oJDQ21Nc5te3EngU_o0OtI

*--------- results ---------*
    [
        {
            "id": "33",
            "std_id": "661111111",
            "name": "นพ.ทดลอง สดใหม่"
        }
    ]
#--------------------------------------------------------------------------------------------------------------------------------------------------#

#---------------------------------------------------   function [ group/add_group_student ]   ---------------------------------------------------# 
เป็น function เพิ่มข้อมูลกลุ่มนักศึกษา 

********  รูปแบบการส่งเพิ่มข้อมูลกลุ่มนักศึกษา  ส่งเป็นไฟล์ json **********
ตัวอย่าง การส่งไฟล์ json  (ต้องส่งเลข token มาด้วย)
    {
        "id" : "31",
        "grp_id" : "15"
    }

    ** Bearer Token **
    eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VybmFtZSI6Inp6IiwiZXhwIjoxNjg2NjIxNjA5fQ.WDqmDqUD1If6PCkLucp_0oJDQ21Nc5te3EngU_o0OtI

*--------- results ---------*
    {
    "success": "You update grp_id student successfully",
    "status": true
    }
#--------------------------------------------------------------------------------------------------------------------------------------------------#

#---------------------------------------------------   function [ group/delete_group_student ]   ---------------------------------------------------# 
เป็น function ลบข้อมูลกลุ่มนักศึกษา 

********  รูปแบบการส่งลบข้อมูลกลุ่มนักศึกษา  ส่งเป็นไฟล์ json **********
ตัวอย่าง การส่งไฟล์ json  (ต้องส่งเลข token มาด้วย)
    {
        "id" : "31"
    }

    ** Bearer Token **
    eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VybmFtZSI6Inp6IiwiZXhwIjoxNjg2NjIxNjA5fQ.WDqmDqUD1If6PCkLucp_0oJDQ21Nc5te3EngU_o0OtI

*--------- results ---------*
    {
    "success": "You update grp_id=0 student successfully",
    "status": true
    }
#--------------------------------------------------------------------------------------------------------------------------------------------------#

#---------------------------------------------------   function [ group/save_group ]   ---------------------------------------------------# 
เป็น function บันทึกข้อมูลกลุ่ม 

********  รูปแบบการส่งบันทึกข้อมูลกลุ่ม  ส่งเป็นไฟล์ json **********
ตัวอย่าง การส่งไฟล์ json  (ต้องส่งเลข token มาด้วย)
    {
        "id" : "13",
        "teacher1" : "18",
        "teacher2" : "17",
        "meq1" : "10",
        "meq2" : "12"
    }

    ** Bearer Token **
    eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VybmFtZSI6Inp6IiwiZXhwIjoxNjg2NjIxNjA5fQ.WDqmDqUD1If6PCkLucp_0oJDQ21Nc5te3EngU_o0OtI

*--------- results ---------*
    {
    "success": "You save group successfully",
    "status": true
    }
#--------------------------------------------------------------------------------------------------------------------------------------------------#

#---------------------------------------------------   function [ group/add_group ]   ---------------------------------------------------# 
เป็น function เพิ่มข้อมูลกลุ่ม 

********  รูปแบบการส่งเพิ่มข้อมูลกลุ่ม  ส่งเป็นไฟล์ json **********
ตัวอย่าง การส่งไฟล์ json  (ต้องส่งเลข token มาด้วย)
    {
        "year" : "2023"
    }

    ** Bearer Token **
    eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VybmFtZSI6Inp6IiwiZXhwIjoxNjg2NjIxNjA5fQ.WDqmDqUD1If6PCkLucp_0oJDQ21Nc5te3EngU_o0OtI

*--------- results ---------*
    {
    "success": "You save group successfully",
    "status": true
    }
#--------------------------------------------------------------------------------------------------------------------------------------------------#

#---------------------------------------------------   function [ group/delete_group ]   ---------------------------------------------------# 
เป็น function ลบข้อมูลกลุ่ม 

********  รูปแบบการส่งลบข้อมูลกลุ่ม  ส่งเป็นไฟล์ json **********
ตัวอย่าง การส่งไฟล์ json  (ต้องส่งเลข token มาด้วย)
    {
        "id" : "146"
    }

    ** Bearer Token **
    eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VybmFtZSI6Inp6IiwiZXhwIjoxNjg2NjIxNjA5fQ.WDqmDqUD1If6PCkLucp_0oJDQ21Nc5te3EngU_o0OtI

*--------- results ---------*
    {
    "success": "You delete group successfully",
    "status": true
    }
#--------------------------------------------------------------------------------------------------------------------------------------------------#

#---------------------------------------------------   function [ group/edit_group ]   ---------------------------------------------------# 
เป็น function แก้ไขข้อมูลกลุ่ม 

********  รูปแบบการส่งแก้ไขข้อมูลกลุ่ม  ส่งเป็นไฟล์ json **********
ตัวอย่าง การส่งไฟล์ json  (ต้องส่งเลข token มาด้วย)
    {
        "id" : "100",
        "name" : "ก2",
        "start" : "0000-00-00",
        "stop" : "0000-00-00"
    }

    ** Bearer Token **
    eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VybmFtZSI6Inp6IiwiZXhwIjoxNjg2NjIxNjA5fQ.WDqmDqUD1If6PCkLucp_0oJDQ21Nc5te3EngU_o0OtI

*--------- results ---------*
    {
    "success": "You edit group successfully",
    "status": true
    }
#--------------------------------------------------------------------------------------------------------------------------------------------------#
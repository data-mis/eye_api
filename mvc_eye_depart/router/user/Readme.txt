#---------------------------------------------------   function [ user/get_users ]   ---------------------------------------------------# 
เป็น function ขอข้อมูลผู้ใช้งานทั้งหมด (user) 

********  รูปแบบการส่งขอข้อมูลผู้ใช้งานทั้งหมด  ส่งเป็นไฟล์ json **********
ตัวอย่าง ต้องส่งเลข token 

    ** Bearer Token **
    eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VybmFtZSI6Inp6IiwiZXhwIjoxNjg2NjIxNjA5fQ.WDqmDqUD1If6PCkLucp_0oJDQ21Nc5te3EngU_o0OtI

*--------- results ---------*
    [
        {
            "Id": "1",
            "username": "zz",
            "name": "datasoft",
            "lname": "ทดสอบ",
            "password": "*2C10167CD4853066DAB500F8C7EB8F485DE795A6"
        }
    ]
#--------------------------------------------------------------------------------------------------------------------------------------------------#

#---------------------------------------------------   function [ user/get_user ]   ---------------------------------------------------# 
เป็น function ขอข้อมูลผู้ใช้งานตาม id (user)  

********  รูปแบบการส่งขอข้อมูลผู้ใช้งานตาม id  ส่งเป็นไฟล์ json **********
ตัวอย่าง การส่งไฟล์ json  (ต้องส่งเลข token มาด้วย)
    {
        "id" : "1"
    }

    ** Bearer Token **
    eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VybmFtZSI6Inp6IiwiZXhwIjoxNjg2NjIxNjA5fQ.WDqmDqUD1If6PCkLucp_0oJDQ21Nc5te3EngU_o0OtI

*--------- results ---------*
    [
        {
            "Id": "1",
            "username": "zz",
            "name": "datasoft",
            "lname": "ทดสอบ",
            "password": "*2C10167CD4853066DAB500F8C7EB8F485DE795A6"
        }
    ]
#--------------------------------------------------------------------------------------------------------------------------------------------------#
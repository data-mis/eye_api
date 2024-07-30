
#-------------------------------------------------------   function [ login/get_login ]   -------------------------------------------------------# 
เป็น function ตรวจสอบ username และ password  เพื่อขอเลข token 

********  รูปแบบการส่งขอเลข token  ส่งเป็นไฟล์ json **********
ตัวอย่าง การส่งไฟล์ json 
    {
        "username" : "zz",
        "password" : "41"
    }

*--------- results ---------*
    {
    "token": "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VybmFtZSI6Inp6IiwiZXhwIjoxNjg2NjIyNjIwfQ.BsdymvxXP8c2FVvSNeQDDoi8J6FPOmYWF51WEyNIJcE",
    "status": true
    }
#--------------------------------------------------------------------------------------------------------------------------------------------------#    
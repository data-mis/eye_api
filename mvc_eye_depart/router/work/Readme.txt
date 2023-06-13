
#---------------------------------------------------   function [ work/get_sheet ]   ---------------------------------------------------# 
เป็น function ดึงข้อมูลงานประเมิน WHERE (stop='00000000' or stop>=curdate())

********  รูปแบบการส่งดึงข้อมูลงานประเมิน  **********
ตัวอย่าง ส่งเลข token 

    ** Bearer Token **
    eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VybmFtZSI6Inp6IiwiZXhwIjoxNjg2NjIxNjA5fQ.WDqmDqUD1If6PCkLucp_0oJDQ21Nc5te3EngU_o0OtI

*--------- results ---------*
    "[
        {
            "Id": "3",
            "code": "05",
            "name": "Case&Topic ผู้นำเสนอ",
            "start": "2023-01-01",
            "stop": "0000-00-00",
            "note": "",
            "type": "1",
            "head": ""
        },
        {
            "Id": "2",
            "code": "06",
            "name": "Case&Topic ผู้ร่วม",
            "start": "2023-01-01",
            "stop": "0000-00-00",
            "note": "",
            "type": "1",
            "head": ""
        }
    ]"
#--------------------------------------------------------------------------------------------------------------------------------------------------#

#---------------------------------------------------   function [ work/get_work_sheet ]   ---------------------------------------------------# 
เป็น function ดึงข้อมูลงานประเมินสะสม 

********  รูปแบบการส่งดึงข้อมูลงานประเมินสะสม  **********
ตัวอย่าง การส่งไฟล์ json  (ต้องส่งเลข token มาด้วย)   
    {
        "advisor_id" : "69"
    }

    ** Bearer Token **
    eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VybmFtZSI6Inp6IiwiZXhwIjoxNjg2NjIxNjA5fQ.WDqmDqUD1If6PCkLucp_0oJDQ21Nc5te3EngU_o0OtI

*--------- results ---------*
    "[
        {
            "id": "1",
            "sheet_name": "Ward round",
            "num": "0"
        },
        {
            "id": "2",
            "sheet_name": "Case&Topic ผู้ร่วม",
            "num": "0"
        },
        {
            "id": "3",
            "sheet_name": "Case&Topic ผู้นำเสนอ",
            "num": "0"
        }
    ]"
#--------------------------------------------------------------------------------------------------------------------------------------------------#

#---------------------------------------------------   function [ work/get_work ]   ---------------------------------------------------# 
เป็น function ดึงข้อมูลงานตามงานประเมินและสถานะการประเมิน 

********  รูปแบบการดึงข้อมูลงานตามงานประเมินและสถานะการประเมิน  ส่งเป็นไฟล์ json **********
ตัวอย่าง การส่งไฟล์ json  (ต้องส่งเลข token มาด้วย)   
    {
        "beg" : "2023-05-01",
        "end" : "2023-05-30",
        "sheet_id" : "3",
        "complete" : "1"    // 1=ทั้งหมด,2=ค้าง,3=ประเมินแล้ว
    }

    ** Bearer Token **
    eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VybmFtZSI6Inp6IiwiZXhwIjoxNjg2NjIxNjA5fQ.WDqmDqUD1If6PCkLucp_0oJDQ21Nc5te3EngU_o0OtI

*--------- results ---------*
    [
        {
            "Id": "69",
            "date": "2023-05-08",
            "time_begin": "08:00",
            "time_end": "09:30",
            "start": "0000-00-00",
            "stop": "0000-00-00",
            "grp_id": "13",
            "advisor_id": "1",
            "sheet_id": "3",
            "student_id": "0",
            "type": "0",
            "name": "ช1   ",
            "advisor_name": "อ.นพ.รุ่งเกียรติ",
            "sheet_name": "Case&Topic ผู้นำเสนอ",
            "student_name": null,
            "file_name": null,
            "sheet_type": "1",
            "complete": null
        },
        {
            "Id": "72",
            "date": "2023-05-02",
            "time_begin": "08:00",
            "time_end": "09:30",
            "start": "0000-00-00",
            "stop": "0000-00-00",
            "grp_id": "13",
            "advisor_id": "5",
            "sheet_id": "3",
            "student_id": "0",
            "type": "0",
            "name": "ช1   ",
            "advisor_name": "ผศ.พญ.ธิดารัตน์",
            "sheet_name": "Case&Topic ผู้นำเสนอ",
            "student_name": null,
            "file_name": null,
            "sheet_type": "1",
            "complete": null
        }
    ] 
#--------------------------------------------------------------------------------------------------------------------------------------------------#

#---------------------------------------------------   function [ work/get_work_adv ]   ---------------------------------------------------# 
เป็น function ดึงข้อมูลจำนวนงานของอาจารย์

********  รูปแบบการส่งดึงข้อมูลจำนวนงานของอาจารย์  **********
ตัวอย่าง ส่งเลข token 

    ** Bearer Token **
    eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VybmFtZSI6Inp6IiwiZXhwIjoxNjg2NjIxNjA5fQ.WDqmDqUD1If6PCkLucp_0oJDQ21Nc5te3EngU_o0OtI

*--------- results ---------*
    "[
        {
            "id": "1",
            "advisor_name": "อ.นพ.รุ่งเกียรติ จางไววิทย์",
            "num": "4"
        },
        {
            "id": "2",
            "advisor_name": "ผศ.พญ.อัจฉรียา วิวัฒน์วงศ์วนา",
            "num": "3"
        },
        {
            "id": "3",
            "advisor_name": "ผศ.นพ.ดำรงค์ วิวัฒน์วงศ์วนา",
            "num": "5"
        }
    ]"
#--------------------------------------------------------------------------------------------------------------------------------------------------#
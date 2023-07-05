
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

#---------------------------------------------------   function [ work/add_work ]   ---------------------------------------------------# 

เป็น function เพิ่มข้อมูลงาน (add_work_01) ประเมินรายงาน

********  รูปแบบการส่งข้อมูลเพิ่มข้อมูลงาน  **********
ตัวอย่าง ส่งเลข token 

    {
        "sheet_id" : "3",  แบบประเมิน
        "sheet_code : "02", รหัสแบบประเมิน Ward round
        "advisor_id" : "1",    ผู้ประเมิน
        "student_id" : "34",   นศพ.
        "date" : "2023-06-29",    วันที่
        "time_begin" : "09:00", เวลา
        "caption" : "ห้อผู้ป่วย",  
        "txt" : "1",
        "txt1" : "การวินิจฉัย",   Caption
        "txt_val1" : "ทดสอบการวินิจฉัย",
        "txt2" : "ชื่อผู้ป่วย",    Caption ชื่อผู้ป่วย
        "txt_val2" : "ทดสอบชื่อผู้ป่วย",
        "txt3" : "เลขที่โรงพยาบาล",    Caption เลขที่โรงพยาบาล
        "txt_val3" : "6600001",  เลขที่โรงพยาบาล
        "txt5" : "วันที่ผู้ป่วย Admit",   Caption วันที่ผู้ป่วย Admit
        "txt_val5" : "01-07-2566",  วันที่ผู้ป่วย Admit  ส่งมาเป็น พ.ศ.
        "txt6" : "วันที่จ่าย/รับผู้ป่วย",  Caption วันที่จ่าย/รับผู้ป่วย
        "txt_val6" : "20-07-2566",  วันที่จ่าย/รับผู้ป่วย ส่งมาเป็น พ.ศ.
        "txt7" : "วันที่ส่งรายงานผู้ป่วย",  Caption วันที่ส่งรายงานผู้ป่วย
        "txt_val7" : "20-07-2566",  วันที่ส่งรายงานผู้ป่วย ส่งมาเป็น พ.ศ.
        "txt_val6_1" : "2023-07-20",  วันที่จ่าย/รับผู้ป่วย ส่งมาเป็น ค.ศ.
        "txt_val7_1" : "2023-07-20",  วันที่ส่งรายงานผู้ป่วย ส่งมาเป็น ค.ศ.
    }
    ** Bearer Token **
    eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VybmFtZSI6Inp6IiwiZXhwIjoxNjg2NjIxNjA5fQ.WDqmDqUD1If6PCkLucp_0oJDQ21Nc5te3EngU_o0OtI

เป็น function เพิ่มข้อมูลงาน (add_work_02) Ward round

********  รูปแบบการส่งข้อมูลเพิ่มข้อมูลงาน  **********
ตัวอย่าง ส่งเลข token 

    {
        "sheet_id" : "3",  แบบประเมิน
        "sheet_code : "02", รหัสแบบประเมิน Ward round
        "advisor_id" : "1",    ผู้ประเมิน
        "student_id" : "34 ",   นศพ.
        "date" : "2023-06-29",    วันที่
        "time_begin" : "09:00", เวลา
        "time_end" : "10:00" ถึง 
        
    }
    ** Bearer Token **
    eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VybmFtZSI6Inp6IiwiZXhwIjoxNjg2NjIxNjA5fQ.WDqmDqUD1If6PCkLucp_0oJDQ21Nc5te3EngU_o0OtI

เป็น function เพิ่มข้อมูลงาน (add_work_03) Ward round

********  รูปแบบการส่งข้อมูลเพิ่มข้อมูลงาน  **********
ตัวอย่าง ส่งเลข token 

    {
        "sheet_id" : "3", id แบบประเมิน
        "sheet_code : "03", รหัสแบบประเมิน Ward round
        "advisor_id" : "1",    ผู้ประเมิน
        "grp_id" : "16",       กลุ่ม
        "date" : "2023-06-29",    วันที่
        "time_begin" : "09:00", เวลา
        "time_end" : "10:00" ถึง 
    }
    ** Bearer Token **
    eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VybmFtZSI6Inp6IiwiZXhwIjoxNjg2NjIxNjA5fQ.WDqmDqUD1If6PCkLucp_0oJDQ21Nc5te3EngU_o0OtI

เป็น function เพิ่มข้อมูลงาน (add_work_04) Ward round

********  รูปแบบการส่งข้อมูลเพิ่มข้อมูลงาน  **********
ตัวอย่าง ส่งเลข token 

    {
        "sheet_id" : "3", id แบบประเมิน
        "sheet_code : "04", รหัสแบบประเมิน Ward round
        "advisor_id" : "1",    ผู้ประเมิน
        "grp_id" : "16",       กลุ่ม
        "date" : "2023-06-29",    วันที่
        "time_begin" : "09:00", เวลา
        "time_end" : "10:00", ถึง 
    }
    ** Bearer Token **
    eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VybmFtZSI6Inp6IiwiZXhwIjoxNjg2NjIxNjA5fQ.WDqmDqUD1If6PCkLucp_0oJDQ21Nc5te3EngU_o0OtI

เป็น function เพิ่มข้อมูลงาน (add_work_05) Case & Topic ผู้นำเสนอ

********  รูปแบบการส่งข้อมูลเพิ่มข้อมูลงาน  **********
ตัวอย่าง ส่งเลข token 

    {
        "sheet_id" : "3",  id แบบประเมิน
        "sheet_code : "05", รหัสแบบประเมิน Case & Topic ผู้นำเสนอ
        "advisor_id" : "1",    ผู้ประเมิน
        "grp_id" : "16",       กลุ่ม
        "date" : "2023-06-29",    วันที่
        "time_begin" : "09:00", เวลา
        "time_end" : "10:00", ถึง 
        "txt_val" : "Glaucoma"   /*ใช้ชื่อ case_topic */
    }
    ** Bearer Token **
    eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VybmFtZSI6Inp6IiwiZXhwIjoxNjg2NjIxNjA5fQ.WDqmDqUD1If6PCkLucp_0oJDQ21Nc5te3EngU_o0OtI

เป็น function เพิ่มข้อมูลงาน (add_work_06) Case & Topic ผู้ร่วม

********  รูปแบบการส่งข้อมูลเพิ่มข้อมูลงาน  **********
ตัวอย่าง ส่งเลข token 

    {
        "sheet_id" : "3",   id แบบประเมิน
        "sheet_code : "06", รหัสแบบประเมิน Case & Topic ผู้ร่วม
        "advisor_id" : "1",    ผู้ประเมิน
        "grp_id" : "16",       กลุ่ม
        "date" : "2023-06-29",    วันที่
        "time_begin" : "09:00", เวลา
        "time_end" : "10:00", ถึง 
        "txt_val" : "Glaucoma"   /*ใช้ชื่อ case_topic */
    }
    ** Bearer Token **
    eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VybmFtZSI6Inp6IiwiZXhwIjoxNjg2NjIxNjA5fQ.WDqmDqUD1If6PCkLucp_0oJDQ21Nc5te3EngU_o0OtI

    เป็น function เพิ่มข้อมูลงาน (add_work_07) Flipped classroom

********  รูปแบบการส่งข้อมูลเพิ่มข้อมูลงาน  **********
ตัวอย่าง ส่งเลข token 

    {
        "sheet_id" : "3",   id แบบประเมิน
        "sheet_code : "07", รหัสแบบประเมิน Flipped classroom
        "advisor_id" : "1",    ผู้ประเมิน
        "grp_id" : "16",       กลุ่ม
        "date" : "2023-06-29",    วันที่
        "time_begin" : "09:00", เวลา
        "time_end" : "10:00", ถึง 
        "txt_val" : "Glaucoma"   /*ใช้ชื่อ case_topic */
    }
    ** Bearer Token **
    eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VybmFtZSI6Inp6IiwiZXhwIjoxNjg2NjIxNjA5fQ.WDqmDqUD1If6PCkLucp_0oJDQ21Nc5te3EngU_o0OtI


#--------------------------------------------------------------------------------------------------------------------------------------------------#

#---------------------------------------------------   function [ work/edit_work ]   ---------------------------------------------------# 

เป็น function เพิ่มข้อมูลงาน (edit_work_01) ประเมินรายงาน

********  รูปแบบการส่งข้อมูลเพิ่มข้อมูลงาน  **********
ตัวอย่าง ส่งเลข token 

    {
        "work_id" : "105",  
        "sheet_id" : "3",  แบบประเมิน
        "sheet_code : "02", รหัสแบบประเมิน Ward round
        "advisor_id" : "1",    ผู้ประเมิน
        "student_id" : "34",   นศพ.
        "date" : "2023-06-29",    วันที่
        "time_begin" : "09:00", เวลา
        "caption" : "ห้อผู้ป่วย",  
        "txt" : "1",
        "txt1" : "การวินิจฉัย",   Caption
        "txt_val1" : "ทดสอบการวินิจฉัย",
        "txt2" : "ชื่อผู้ป่วย",    Caption ชื่อผู้ป่วย
        "txt_val2" : "ทดสอบชื่อผู้ป่วย",
        "txt3" : "เลขที่โรงพยาบาล",    Caption เลขที่โรงพยาบาล
        "txt_val3" : "6600001",  เลขที่โรงพยาบาล
        "txt5" : "วันที่ผู้ป่วย Admit",   Caption วันที่ผู้ป่วย Admit
        "txt_val5" : "01-07-2566",  วันที่ผู้ป่วย Admit  ส่งมาเป็น พ.ศ.
        "txt6" : "วันที่จ่าย/รับผู้ป่วย",  Caption วันที่จ่าย/รับผู้ป่วย
        "txt_val6" : "20-07-2566",  วันที่จ่าย/รับผู้ป่วย ส่งมาเป็น พ.ศ.
        "txt7" : "วันที่ส่งรายงานผู้ป่วย",  Caption วันที่ส่งรายงานผู้ป่วย
        "txt_val7" : "20-07-2566",  วันที่ส่งรายงานผู้ป่วย ส่งมาเป็น พ.ศ.
        "txt_val6_1" : "2023-07-20",  วันที่จ่าย/รับผู้ป่วย ส่งมาเป็น ค.ศ.
        "txt_val7_1" : "2023-07-20",  วันที่ส่งรายงานผู้ป่วย ส่งมาเป็น ค.ศ.
    }
    ** Bearer Token **
    eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VybmFtZSI6Inp6IiwiZXhwIjoxNjg2NjIxNjA5fQ.WDqmDqUD1If6PCkLucp_0oJDQ21Nc5te3EngU_o0OtI

เป็น function เพิ่มข้อมูลงาน (edit_work_02) Ward round

********  รูปแบบการส่งข้อมูลเพิ่มข้อมูลงาน  **********
ตัวอย่าง ส่งเลข token 

    {
        "work_id" : "105",
        "sheet_id" : "3",  แบบประเมิน
        "sheet_code : "02", รหัสแบบประเมิน Ward round
        "advisor_id" : "1",    ผู้ประเมิน
        "student_id" : "34 ",   นศพ.
        "date" : "2023-06-29",    วันที่
        "time_begin" : "09:00", เวลา
        "time_end" : "10:00" ถึง 
        
    }
    ** Bearer Token **
    eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VybmFtZSI6Inp6IiwiZXhwIjoxNjg2NjIxNjA5fQ.WDqmDqUD1If6PCkLucp_0oJDQ21Nc5te3EngU_o0OtI

เป็น function เพิ่มข้อมูลงาน (edit_work_03) Ward round

********  รูปแบบการส่งข้อมูลเพิ่มข้อมูลงาน  **********
ตัวอย่าง ส่งเลข token 

    {
        "work_id" : "105",
        "sheet_id" : "3", id แบบประเมิน
        "sheet_code : "03", รหัสแบบประเมิน Ward round
        "advisor_id" : "1",    ผู้ประเมิน
        "grp_id" : "16",       กลุ่ม
        "date" : "2023-06-29",    วันที่
        "time_begin" : "09:00", เวลา
        "time_end" : "10:00" ถึง 
    }
    ** Bearer Token **
    eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VybmFtZSI6Inp6IiwiZXhwIjoxNjg2NjIxNjA5fQ.WDqmDqUD1If6PCkLucp_0oJDQ21Nc5te3EngU_o0OtI

เป็น function เพิ่มข้อมูลงาน (edit_work_04) Ward round

********  รูปแบบการส่งข้อมูลเพิ่มข้อมูลงาน  **********
ตัวอย่าง ส่งเลข token 

    {
        "work_id" : "105",
        "sheet_id" : "3", id แบบประเมิน
        "sheet_code : "04", รหัสแบบประเมิน Ward round
        "advisor_id" : "1",    ผู้ประเมิน
        "grp_id" : "16",       กลุ่ม
        "date" : "2023-06-29",    วันที่
        "time_begin" : "09:00", เวลา
        "time_end" : "10:00", ถึง 
    }
    ** Bearer Token **
    eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VybmFtZSI6Inp6IiwiZXhwIjoxNjg2NjIxNjA5fQ.WDqmDqUD1If6PCkLucp_0oJDQ21Nc5te3EngU_o0OtI

เป็น function เพิ่มข้อมูลงาน (edit_work_05) Case & Topic ผู้นำเสนอ

********  รูปแบบการส่งข้อมูลเพิ่มข้อมูลงาน  **********
ตัวอย่าง ส่งเลข token 

    {
        "work_id" : "105",
        "sheet_id" : "3",  id แบบประเมิน
        "sheet_code : "05", รหัสแบบประเมิน Case & Topic ผู้นำเสนอ
        "advisor_id" : "1",    ผู้ประเมิน
        "grp_id" : "16",       กลุ่ม
        "date" : "2023-06-29",    วันที่
        "time_begin" : "09:00", เวลา
        "time_end" : "10:00", ถึง 
        "txt_val" : "Glaucoma"   /*ใช้ชื่อ case_topic */
    }
    ** Bearer Token **
    eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VybmFtZSI6Inp6IiwiZXhwIjoxNjg2NjIxNjA5fQ.WDqmDqUD1If6PCkLucp_0oJDQ21Nc5te3EngU_o0OtI

เป็น function เพิ่มข้อมูลงาน (edit_work_06) Case & Topic ผู้ร่วม

********  รูปแบบการส่งข้อมูลเพิ่มข้อมูลงาน  **********
ตัวอย่าง ส่งเลข token 

    {
        "work_id" : "105",
        "sheet_id" : "3",   id แบบประเมิน
        "sheet_code : "06", รหัสแบบประเมิน Case & Topic ผู้ร่วม
        "advisor_id" : "1",    ผู้ประเมิน
        "grp_id" : "16",       กลุ่ม
        "date" : "2023-06-29",    วันที่
        "time_begin" : "09:00", เวลา
        "time_end" : "10:00", ถึง 
        "txt_val" : "Glaucoma"   /*ใช้ชื่อ case_topic */
    }
    ** Bearer Token **
    eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VybmFtZSI6Inp6IiwiZXhwIjoxNjg2NjIxNjA5fQ.WDqmDqUD1If6PCkLucp_0oJDQ21Nc5te3EngU_o0OtI

    เป็น function เพิ่มข้อมูลงาน (edit_work_07) Flipped classroom

********  รูปแบบการส่งข้อมูลเพิ่มข้อมูลงาน  **********
ตัวอย่าง ส่งเลข token 

    {
        "work_id" : "105",
        "sheet_id" : "3",   id แบบประเมิน
        "sheet_code : "07", รหัสแบบประเมิน Flipped classroom
        "advisor_id" : "1",    ผู้ประเมิน
        "grp_id" : "16",       กลุ่ม
        "date" : "2023-06-29",    วันที่
        "time_begin" : "09:00", เวลา
        "time_end" : "10:00", ถึง 
        "txt_val" : "Glaucoma"   /*ใช้ชื่อ case_topic */
    }
    ** Bearer Token **
    eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VybmFtZSI6Inp6IiwiZXhwIjoxNjg2NjIxNjA5fQ.WDqmDqUD1If6PCkLucp_0oJDQ21Nc5te3EngU_o0OtI


#--------------------------------------------------------------------------------------------------------------------------------------------------#

#---------------------------------------------------   function [ work/get_work_head ]   ---------------------------------------------------# 
เป็น function ดึงข้อมูล work_head

********  รูปแบบการส่งดึงข้อมูล  work_head  **********
ตัวอย่าง ส่งเลข token 
    {
        "work_id" : "91"
    }
    ** Bearer Token **
    eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VybmFtZSI6Inp6IiwiZXhwIjoxNjg2NjIxNjA5fQ.WDqmDqUD1If6PCkLucp_0oJDQ21Nc5te3EngU_o0OtI

*--------- results ---------*
    "[
        {
            "Id": "184",
            "work_id": "91",
            "txt": "หอผู้ป่วย",
            "txt_val": "จักษุ(ช)"
        },
        {
            "Id": "185",
            "work_id": "91",
            "txt": "การวินิจฉัย",
            "txt_val": "เป็นตาแดง"
        },
        {
            "Id": "186",
            "work_id": "91",
            "txt": "ชื่อผู้ป่วย",
            "txt_val": "นาย สมมุติ ขึ้นมาเอง"
        }
    ]"
#--------------------------------------------------------------------------------------------------------------------------------------------------#

#---------------------------------------------------   function [ work/get_work_student ]   ---------------------------------------------------# 
เป็น function ดึงข้อมูล work_head

********  รูปแบบการส่งดึงข้อมูล  นักศึกษา stop != '00000000'  **********
ตัวอย่าง ส่งเลข token 
    {
        "work_id" : "91"
    }
    ** Bearer Token **
    eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VybmFtZSI6Inp6IiwiZXhwIjoxNjg2NjIxNjA5fQ.WDqmDqUD1If6PCkLucp_0oJDQ21Nc5te3EngU_o0OtI

*--------- results ---------*
    "[
        {
            "id": "13",
            "ttl": "นาย",
            "name": "สิรภพ",
            "lname": "หล้านันตา"
        },
        {
            "id": "14",
            "ttl": "นางสาว",
            "name": "ชลลฎา",
            "lname": "อรุณรัตนากร"
        },
        {
            "id": "15",
            "ttl": "นางสาว",
            "name": "ชลิดา",
            "lname": "นนทสูติ"
        }
    ]"
#--------------------------------------------------------------------------------------------------------------------------------------------------#

#---------------------------------------------------   function [ work/get_work_tbllu ]   ---------------------------------------------------# 
เป็น function ดึงข้อมูล tbllu

********  รูปแบบการส่งดึงข้อมูล  นักศึกษา stop != '00000000'  **********
ตัวอย่าง ส่งเลข token 
    {
        "work_id" : "91"
    }
    ** Bearer Token **
    eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VybmFtZSI6Inp6IiwiZXhwIjoxNjg2NjIxNjA5fQ.WDqmDqUD1If6PCkLucp_0oJDQ21Nc5te3EngU_o0OtI

*--------- results ---------*
    "[
        {
            "Id": "9",
            "title": "case_topic",
            "code": "1",
            "name": "Red eye (infectious keratitis)"
        },
        {
            "Id": "10",
            "title": "case_topic",
            "code": "2",
            "name": "Glaucoma"
        },
        {
            "Id": "11",
            "title": "case_topic",
            "code": "3",
            "name": "Refractive error"
        }
    ]"
#--------------------------------------------------------------------------------------------------------------------------------------------------#
#---------------------------------------------------   function [ sheet/get_sheet ]   ---------------------------------------------------# 
เป็น function ดึงหัวข้อมูลเอกสาร
********  รูปแบบการเป็น function ดึงหัวข้อมูลเอกสาร **********
ตัวอย่าง การส่งไฟล์ json  (ต้องส่งเลข token มาด้วย)

    ** Bearer Token **
    eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VybmFtZSI6Inp6IiwiZXhwIjoxNjg2NjIxNjA5fQ.WDqmDqUD1If6PCkLucp_0oJDQ21Nc5te3EngU_o0OtI

*--------- results ---------*
    {
        "Id": "3",
        "code": "05",
        "name": "Case&Topic ผู้นำเสนอ                                                                                                                                                                                                                                          ",
        "start": "2023-01-01",
        "stop": "0000-00-00",
        "note": "",
        "type": "1",
        "head": ""
    },
    {
        "Id": "2",
        "code": "06",
        "name": "Case&Topic ผู้ร่วม                                                                                                                                                                                                                                            ",
        "start": "2023-01-01",
        "stop": "0000-00-00",
        "note": "",
        "type": "1",
        "head": ""
    }
#--------------------------------------------------------------------------------------------------------------------------------------------------#

#---------------------------------------------------   function [ sheet/get_sheet_head ]   ---------------------------------------------------# 
เป็น function ดึง Header
********  รูปแบบการส่งดึง Header  **********
ตัวอย่าง การส่งไฟล์ json  (ต้องส่งเลข token มาด้วย)
    {
        "sheet_id" : "6"
    }
    
    ** Bearer Token **
    eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VybmFtZSI6Inp6IiwiZXhwIjoxNjg2NjIxNjA5fQ.WDqmDqUD1If6PCkLucp_0oJDQ21Nc5te3EngU_o0OtI

*--------- results ---------*
    {
        "Id": "5",
        "sheet_id": "6",
        "txt": "การวินิจฉัย                                                                                                                                                                                                                                                   ",
        "type": "1",
        "no": "1"
    },
    {
        "Id": "4",
        "sheet_id": "6",
        "txt": "หอผู้ป่วย@จักษุ1(ช);จักษุ2(ญ);พิเศษ                                                                                                                                                                                                                           ",
        "type": "2",
        "no": "2"
    }
#--------------------------------------------------------------------------------------------------------------------------------------------------#

#---------------------------------------------------   function [ sheet/get_sheet_detail ]   ---------------------------------------------------# 
เป็น function ดึงรายละเอียดหัวข้อแบบประเมิน
********  รูปแบบการส่งดึงรายละเอียดหัวข้อแบบประเมิน  **********
ตัวอย่าง การส่งไฟล์ json  (ต้องส่งเลข token มาด้วย)
    {
        "sheet_id" : "6"
    }
    
    ** Bearer Token **
    eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VybmFtZSI6Inp6IiwiZXhwIjoxNjg2NjIxNjA5fQ.WDqmDqUD1If6PCkLucp_0oJDQ21Nc5te3EngU_o0OtI

*--------- results ---------*
     {
        "Id": "24",
        "sheet_id": "6",
        "txt": "ประวัติและ systemic review",
        "score": "2.00",
        "real_score": "0.00",
        "score_type": "S"
    },
    {
        "Id": "25",
        "sheet_id": "6",
        "txt": "ตรวจร่างกาย",
        "score": "2.00",
        "real_score": "0.00",
        "score_type": "S"
    },
    {
        "Id": "26",
        "sheet_id": "6",
        "txt": "การสืบค้นและแปลผล",
        "score": "1.00",
        "real_score": "0.00",
        "score_type": "S"
    }
#--------------------------------------------------------------------------------------------------------------------------------------------------#

#---------------------------------------------------   function [ sheet/get_sheet_detail_choice ]   ---------------------------------------------------# 
เป็น function ดึงรายละเอียดตัวเลือกคะแนน
********  รูปแบบการส่งเป็น function ดึงรายละเอียดตัวเลือก **********
ตัวอย่าง การส่งไฟล์ json  (ต้องส่งเลข token มาด้วย)
    {
        "sheet_detail_id" : "25"
    }
    
    ** Bearer Token **
    eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VybmFtZSI6Inp6IiwiZXhwIjoxNjg2NjIxNjA5fQ.WDqmDqUD1If6PCkLucp_0oJDQ21Nc5te3EngU_o0OtI

*--------- results ---------*
     {
        "Id": "24",
        "sheet_id": "6",
        "txt": "ประวัติและ systemic review",
        "score": "2.00",
        "real_score": "0.00",
        "score_type": "S"
    },
    {
        "Id": "25",
        "sheet_id": "6",
        "txt": "ตรวจร่างกาย",
        "score": "2.00",
        "real_score": "0.00",
        "score_type": "S"
    },
    {
        "Id": "26",
        "sheet_id": "6",
        "txt": "การสืบค้นและแปลผล",
        "score": "1.00",
        "real_score": "0.00",
        "score_type": "S"
    }
#--------------------------------------------------------------------------------------------------------------------------------------------------#

#---------------------------------------------------   function [ sheet/add_sheet ]   ---------------------------------------------------# 
เป็น function เพิ่มหัวข้อแบบประเมิน
********  รูปแบบการส่งเป็น function เพิ่มหัวข้อแบบประเมิน **********
ตัวอย่าง การส่งไฟล์ json  (ต้องส่งเลข token มาด้วย)
    {
        "name" : "ทดสอบ",
        "start" : "2023-07-06",
        "stop" : "0000-00-00"
    }
    
    ** Bearer Token **
    eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VybmFtZSI6Inp6IiwiZXhwIjoxNjg2NjIxNjA5fQ.WDqmDqUD1If6PCkLucp_0oJDQ21Nc5te3EngU_o0OtI

#--------------------------------------------------------------------------------------------------------------------------------------------------#

#---------------------------------------------------   function [ sheet/edit_sheet ]   ---------------------------------------------------# 
เป็น function แก้ไขเพิ่มหัวข้อแบบประเมิน
********  รูปแบบการส่งเป็น function แก้ไขเพิ่มหัวข้อแบบประเมิน **********
ตัวอย่าง การส่งไฟล์ json  (ต้องส่งเลข token มาด้วย)
    {
        "id" : "1",
        "name" : "ทดสอบ",
        "start" : "2023-07-06",
        "stop" : "0000-00-00"
    }
    
    ** Bearer Token **
    eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VybmFtZSI6Inp6IiwiZXhwIjoxNjg2NjIxNjA5fQ.WDqmDqUD1If6PCkLucp_0oJDQ21Nc5te3EngU_o0OtI

#--------------------------------------------------------------------------------------------------------------------------------------------------#

#---------------------------------------------------   function [ sheet/add_sheet_head ]   ---------------------------------------------------# 
เป็น function เพิ่ม Header
********  รูปแบบการส่งเป็น function เพิ่ม Header **********
ตัวอย่าง การส่งไฟล์ json  (ต้องส่งเลข token มาด้วย)
    {
        "sheet_id" : "2"
    }
    
    ** Bearer Token **
    eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VybmFtZSI6Inp6IiwiZXhwIjoxNjg2NjIxNjA5fQ.WDqmDqUD1If6PCkLucp_0oJDQ21Nc5te3EngU_o0OtI

#--------------------------------------------------------------------------------------------------------------------------------------------------#

#---------------------------------------------------   function [ sheet/delete_sheet_head ]   ---------------------------------------------------# 
เป็น function ลบ Header
********  รูปแบบการส่งเป็น function ลบ Header **********
ตัวอย่าง การส่งไฟล์ json  (ต้องส่งเลข token มาด้วย)
    {
        "id" : "2"
    }
    
    ** Bearer Token **
    eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VybmFtZSI6Inp6IiwiZXhwIjoxNjg2NjIxNjA5fQ.WDqmDqUD1If6PCkLucp_0oJDQ21Nc5te3EngU_o0OtI

#--------------------------------------------------------------------------------------------------------------------------------------------------#

#---------------------------------------------------   function [ sheet/add_sheet_detail ]   ---------------------------------------------------# 
เป็น function เพิ่มรายละเอียด
********  รูปแบบการส่งเป็น function เพิ่มรายละเอียด **********
ตัวอย่าง การส่งไฟล์ json  (ต้องส่งเลข token มาด้วย)
    {
        "sheet_id" : "2"
    }
    
    ** Bearer Token **
    eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VybmFtZSI6Inp6IiwiZXhwIjoxNjg2NjIxNjA5fQ.WDqmDqUD1If6PCkLucp_0oJDQ21Nc5te3EngU_o0OtI

#--------------------------------------------------------------------------------------------------------------------------------------------------#

#---------------------------------------------------   function [ sheet/delete_sheet_detail ]   ---------------------------------------------------# 
เป็น function ลบรายละเอียด
********  รูปแบบการส่งเป็น function ลบรายละเอียด **********
ตัวอย่าง การส่งไฟล์ json  (ต้องส่งเลข token มาด้วย)
    {
        "id" : "2"
    }
    
    ** Bearer Token **
    eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VybmFtZSI6Inp6IiwiZXhwIjoxNjg2NjIxNjA5fQ.WDqmDqUD1If6PCkLucp_0oJDQ21Nc5te3EngU_o0OtI

#--------------------------------------------------------------------------------------------------------------------------------------------------#

#---------------------------------------------------   function [ sheet/update_sheet_detail ]   ---------------------------------------------------# 
เป็น function แก้ไขรายละเอียด
********  รูปแบบการส่งเป็น function แก้ไขรายละเอียด **********
ตัวอย่าง การส่งไฟล์ json  (ต้องส่งเลข token มาด้วย)
    {
        "id" : "2",                        // id ของ sheet_detail
        "txt" : "ทดสอบแก้ไขรายละเอียด",     //รายละเอียด
        "score" : "2",                    //score
        "real_score" : "2",               //R.Score
        "score_type" : "R",               //type
    }
    
    ** Bearer Token **
    eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VybmFtZSI6Inp6IiwiZXhwIjoxNjg2NjIxNjA5fQ.WDqmDqUD1If6PCkLucp_0oJDQ21Nc5te3EngU_o0OtI

#--------------------------------------------------------------------------------------------------------------------------------------------------#

#---------------------------------------------------   function [ sheet/update_sheet ]   ---------------------------------------------------# 
เป็น function แก้ไขหมายเหตุรายละเอียด
********  รูปแบบการส่งเป็น function แก้ไขหมายเหตุรายละเอียด **********
ตัวอย่าง การส่งไฟล์ json  (ต้องส่งเลข token มาด้วย)
    {
        "id" : "2",                             // id ของ sheet
        "note" : "ทดสอบแก้ไขหมายเหตุ"           //  หมายเหตุ
    }
    
    ** Bearer Token **
    eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VybmFtZSI6Inp6IiwiZXhwIjoxNjg2NjIxNjA5fQ.WDqmDqUD1If6PCkLucp_0oJDQ21Nc5te3EngU_o0OtI

#--------------------------------------------------------------------------------------------------------------------------------------------------#

#---------------------------------------------------   function [ sheet/update_sheet_head ]   ---------------------------------------------------# 
เป็น function แก้ไข Header
********  รูปแบบการส่งเป็น function แก้ไข Header **********
ตัวอย่าง การส่งไฟล์ json  (ต้องส่งเลข token มาด้วย)
    {
        "id" : "2",                             // id ของ sheet
        "txt" : "ทดสอบแก้ไขหมายเหตุ",           //  ชื่อ 
        "type" : "1",                          //  ชนิด 
        "no" : "1"                             //  ลำดับ 

    }
    
    ** Bearer Token **
    eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VybmFtZSI6Inp6IiwiZXhwIjoxNjg2NjIxNjA5fQ.WDqmDqUD1If6PCkLucp_0oJDQ21Nc5te3EngU_o0OtI

#--------------------------------------------------------------------------------------------------------------------------------------------------#

#---------------------------------------------------   function [ sheet/add_sheet_detail_choice ]   ---------------------------------------------------# 
เป็น function เพิ่มตัวเลือก
********  รูปแบบการส่งเป็น function เพิ่มตัวเลือก **********
ตัวอย่าง การส่งไฟล์ json  (ต้องส่งเลข token มาด้วย)
    {
        "sheet_detail_id" : "2"                            // id ของ sheet_detail

    }
    
    ** Bearer Token **
    eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VybmFtZSI6Inp6IiwiZXhwIjoxNjg2NjIxNjA5fQ.WDqmDqUD1If6PCkLucp_0oJDQ21Nc5te3EngU_o0OtI

#--------------------------------------------------------------------------------------------------------------------------------------------------#

#---------------------------------------------------   function [ sheet/delete_sheet_detail_choice ]   ---------------------------------------------------# 
เป็น function ลบตัวเลือก
********  รูปแบบการส่งเป็น function ลบตัวเลือก **********
ตัวอย่าง การส่งไฟล์ json  (ต้องส่งเลข token มาด้วย)
    {
        "id" : "2"                            // id ของ sheet_detail_choice
    }
    
    ** Bearer Token **
    eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VybmFtZSI6Inp6IiwiZXhwIjoxNjg2NjIxNjA5fQ.WDqmDqUD1If6PCkLucp_0oJDQ21Nc5te3EngU_o0OtI

#--------------------------------------------------------------------------------------------------------------------------------------------------#

#---------------------------------------------------   function [ sheet/update_sheet_detail_choice ]   ---------------------------------------------------# 
เป็น function แก้ไขตัวเลือก
********  รูปแบบการส่งเป็น function แก้ไขตัวเลือก **********
ตัวอย่าง การส่งไฟล์ json  (ต้องส่งเลข token มาด้วย)
    {
        "id" : "2",                            // id ของ sheet_detail_choice
        "txt" : "2",                            // ตัวเลือก
        "score" : "2",                         // คะแนน
        "type" : "2",                           //  type
        "no" : "2"                             // ลำดับ
    }
    
    ** Bearer Token **
    eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VybmFtZSI6Inp6IiwiZXhwIjoxNjg2NjIxNjA5fQ.WDqmDqUD1If6PCkLucp_0oJDQ21Nc5te3EngU_o0OtI

#--------------------------------------------------------------------------------------------------------------------------------------------------#
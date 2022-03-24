<?php require_once("menuTop.php") ?>
<title>สถานประกอบการ</title>
<style>
    .content {
        width: 100%;
        background-color: #FFCFCF;
        border-radius: 20px;
        padding: 20px;
    }
    .content-title{
    padding: 10px 20px 10px 30px;
    list-style-type: none;
}
.content-title li{
    padding: 20px 0px 20px 0px;
    font-size: 20px;
    text-decoration: none;
}
</style>

<body>
    <h3><?php echo"$company->name";?></h3>
    <hr style="width:100%;text-align:left;margin-left:0;">

    <br><br>
    <div>
        <div class="content"> 
        <label style="font-size: 25px; margin-left: 100px;">ข้อมูลทั่วไปของสถานประกอบการ</label>
        <br>
            <ul class="content-title">
                <li>
                    <label style="font-size: 20px; ">ชื่อสถานประกอบการ: </label>
                    <label style="font-size: 20px; "><?php echo"$company->name";?></label>
                </li>
                <li>
                    <label style="font-size: 20px; ">ประเภทธุรกิจ: </label>
                    <label style="font-size: 20px; "><?php echo"$company->type";?></label>
                </li>
                <li>
                    <label style="font-size: 20px; ">ที่อยู่ของสถานประกอบการ: </label>
                    <label style="font-size: 20px; "><?php echo"$company->address";?></label>
                </li>
                <li>
                    <label style="font-size: 20px; ">เบอร์โทรศัพท์ของสถานประกอบการ: </label>
                    <label style="font-size: 20px; "><?php echo"$company->phoneNumber";?></label>
                </li>
                <li>
                    <label style="font-size: 20px; ">เบอร์โทรสารของสถานประกอบการ: </label>
                    <label style="font-size: 20px; "><?php echo"$company->faxNumber";?></label>
                </li>
                <li>
                    <label style="font-size: 20px; ">สวัสดิการที่พัก: </label>
                    <label style="font-size: 20px; "><?php echo"$company->department";?>ที่พักให้</label>
                </li>
                <li>
                    <label style="font-size: 20px; ">ค่าตอบแทนรายวัน: </label>
                    <label style="font-size: 20px; "><?php echo"$company->payPerDay";?></label>
                </li>
            </ul>
        </div>
        <hr style="width:100%;text-align:left;margin-left:0;">
        <label style="font-size: 25px; margin-left: 100px;">ข้อมูลผู้ติดต่อของสถานประกอบการ</label>
            <ul class="content-title">
                <li>
                    <label style="font-size: 20px; ">ชื่อหัวหน้างาน/ผู้อนุมัติการฝึกงาน: </label>
                    <label style="font-size: 20px; "><?php echo"$company->agentName";?></label>
                </li>
                <li>
                    <label style="font-size: 20px; ">ตำแหน่งของหัวหน้างาน/ผู้อนุมัติการฝึกงาน: </label>
                    <label style="font-size: 20px; "><?php echo"$company->agentPosition";?></label>
                </li>
                <li>
                    <label style="font-size: 20px; ">ชื่อผู้ประสานงานของสถานประกอบการ/หน่วยงาน: </label>
                    <label style="font-size: 20px; "><?php echo"$company->HR_Name";?></label>
                </li>
                <li>
                    <label style="font-size: 20px; ">ตำแหน่งของผู้ประสานงาน: </label>
                    <label style="font-size: 20px; "><?php echo"$company->HR_Position";?></label>
                </li>
                <li>
                    <label style="font-size: 20px; ">เบอร์โทรศัพท์ของผู้ประสานงาน: </label>
                    <label style="font-size: 20px; "><?php echo"$company->HR_PhoneNamber";?></label>
                </li>
                <hr style="width:100%;text-align:left;margin-left:0;">
                <br>
                
                <label style="font-size: 25px; margin-left: 100px;">ตำแหน่งงานที่ต้องการรับนิสิตฝึกงาน</label>
                <li>
                    <label style="font-size: 20px; ">ตำแหน่งงานที่ต้องการรับ: </label>
                    <label style="font-size: 20px; "><?php echo"$company->requestPosition";?></label>
                </li>
                <li>
                    <label style="font-size: 20px; ">ลักษณะงานที่นิสิตต้องปฏิบัติ (Job Description): </label>
                    <label style="font-size: 20px; "><?php echo"$company->jobDescription";?></label>
                </li>
                <li>
                    <label style="font-size: 20px; ">จำนวน (คน): </label>
                    <label style="font-size: 20px; "><?php echo"$company->amountPerson";?></label>
                </li>
                <li>
                    <label style="font-size: 20px; ">ความสามารถทางวิชาการหรือทักษะที่นิสิตควรมี: </label>
                    <label style="font-size: 20px; "><?php echo"$company->requiredSkill";?></label>
                </li>
                <li>
                    <label style="font-size: 20px; ">ระยะเวลาที่ต้องการให้นิสิตไปปฏิบัติงาน: </label>
                    <label style="font-size: 20px; "><?php echo"$company->startDate";?> ถึง <?php echo"$company->endDate";?></label>
                </li>
            </ul>
            <hr style="width:100%;text-align:left;margin-left:0;">


    </div>
</body>
<?php require_once("menuDown.php") ?>
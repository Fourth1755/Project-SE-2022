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
    <br>
    <div>
        <div class="content"> 
        <label style="font-size: 25px; margin-left: 100px;">ข้อมูลทั่วไปของสถานประกอบการ</label>
        <br>
        <table class="table" id="table-header">
        <tr>
            <td><label style="font-size: 20px; ">ชื่อสถานประกอบการ: </label></td>
            <td><label style="font-size: 20px; font-weight: 900;"><?php echo"$company->name";?></label></td>
        </tr>
        <tr>
            <td><label style="font-size: 20px; ">ประเภทธุรกิจ: </label></td>
            <td><label style="font-size: 20px; font-weight: 900;"><?php echo"$company->type";?></label></td>
        </tr>
        <tr>
            <td><label style="font-size: 20px; ">ที่อยู่ของสถานประกอบการ: </label></td>
            <td><label style="font-size: 20px; font-weight: 900;"><?php echo"$company->address";?></label></td>
        </tr>
        <tr>
            <td><label style="font-size: 20px; ">เบอร์โทรศัพท์ของสถานประกอบการ: </label></td>
            <td><label style="font-size: 20px; font-weight: 900;"><?php echo"$company->phoneNumber";?></label></td>
        </tr>
        <tr>
            <td><label style="font-size: 20px; ">เบอร์โทรสารของสถานประกอบการ: </label></td>
            <td><label style="font-size: 20px; font-weight: 900;"><?php echo"$company->faxNumber";?></label></td>
        </tr>
        <tr>
            <td><label style="font-size: 20px; ">สวัสดิการที่พัก: </label></td>
            <td><label style="font-size: 20px; font-weight: 900;"><?php echo"$company->department";?>ที่พักให้</label></td>
        </tr>
        <tr>
            <td><label style="font-size: 20px; ">ค่าตอบแทนรายวัน: </label></td>
            <td><label style="font-size: 20px; font-weight: 900;"><?php echo"$company->payPerDay";?></label></td>
        </tr>
        </table>
        </div>
        <hr style="width:100%;text-align:left;margin-left:0;">
        <label style="font-size: 25px; margin-left: 100px;">ข้อมูลผู้ติดต่อของสถานประกอบการ</label>
        <table class="table" id="table-header">
        <tr>
            <td><label style="font-size: 20px; ">ชื่อหัวหน้างาน/ผู้อนุมัติการฝึกงาน: </label></td>
            <td><label style="font-size: 20px; font-weight: 900;"><?php echo"$company->agentName";?></label></td>
        </tr>
        <tr>
            <td><label style="font-size: 20px; ">ตำแหน่งของหัวหน้างาน/ผู้อนุมัติการฝึกงาน: </label></td>
            <td><label style="font-size: 20px; font-weight: 900;"><?php echo"$company->agentPosition";?></label></td>
        </tr>
        <tr>
            <td><label style="font-size: 20px; ">ชื่อผู้ประสานงานของสถานประกอบการ/หน่วยงาน: </label></td>
            <td><label style="font-size: 20px; font-weight: 900;"><?php echo"$company->HR_Name";?></label></td>
        </tr>
        <tr>
            <td><label style="font-size: 20px; ">ตำแหน่งของผู้ประสานงาน: </label></td>
            <td><label style="font-size: 20px; font-weight: 900;"><?php echo"$company->HR_Position";?></label></td>
        </tr>
        <tr>
            <td><label style="font-size: 20px; ">เบอร์โทรศัพท์ของผู้ประสานงาน: </label></td>
            <td><label style="font-size: 20px; font-weight: 900;"><?php echo"$company->HR_PhoneNamber";?></label></td>
        </tr>        
        </table>
        <br>
        <label style="font-size: 25px; margin-left: 100px;">ตำแหน่งงานที่ต้องการรับนิสิตฝึกงาน</label>
        <table class="table" id="table-header">
        <tr>
            <td><label style="font-size: 20px; ">ตำแหน่งงานที่ต้องการรับ: </label></td>
            <td><label style="font-size: 20px; font-weight: 900;"><?php echo"$company->requestPosition";?></label></td>
        </tr>
        <tr>
            <td><label style="font-size: 20px; ">ลักษณะงานที่นิสิตต้องปฏิบัติ (Job Description): </label></td>
            <td><label style="font-size: 20px; font-weight: 900;"><?php echo"$company->jobDescription";?></label></td>
        </tr>
        <tr>
            <td><label style="font-size: 20px; ">จำนวน (คน): </label></td>
            <td><label style="font-size: 20px; font-weight: 900;"><?php echo"$company->amountPerson";?></label></td>
        </tr>
        <tr>
            <td><label style="font-size: 20px; ">ความสามารถทางวิชาการหรือทักษะที่นิสิตควรมี: </label></td>
            <td><label style="font-size: 20px; font-weight: 900;"><?php echo"$company->requiredSkill";?></label></td>
        </tr>
        <tr>
            <td><label style="font-size: 20px; ">ระยะเวลาที่ต้องการให้นิสิตไปปฏิบัติงาน: </label></td>
            <td><label style="font-size: 20px; font-weight: 900;"><?php echo"$company->startDate";?> ถึง <?php echo"$company->endDate";?></label></td>
        </tr>
        </table>


    </div>
</body>
<?php require_once("menuDown.php") ?>
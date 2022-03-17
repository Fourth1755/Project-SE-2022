<style>
    .content {
        width: 100%;
        background-color: #FFCFCF;
        border-radius: 20px;
        height: 790px;
        padding: 20px;
    }
</style>

<?php require_once("menuTop.php") ?>
<div>
    <h3>แก้ไขสถานประกอบการ</h3>
    <hr style="width:100%;text-align:left;margin-left:0;">

    <br><br>
    <div class="content">
        <div style=" margin-left: 500px;"> 
            <br>
            <label style="font-size: 25px; margin-left: 100px;">ข้อมูลทั่วไปของหัวหน้างาน/ผู้ประสานงาน</label><br><br>
            <label style="font-size: 20px; ">ชื่อของหัวหน้างาน/ผู้อนุมัติฝึกงาน</label><br>
            <input class="form-control"  type="tel" style="font-size: 20px; width: 500px; margin-top: 10px;" value="นายลูลูช วี บริทาเนีย"/><br>
            <label style="font-size: 20px; ">ตำแหน่งของหัวหน้างาน/ผู้อนุมัติฝึกงาน</label><br>
            <input class="form-control"  type="tel" style="font-size: 20px; width: 500px; margin-top: 10px;" value="หัวหน้าแผนก"/><br>
            <label style="font-size: 20px; ">ชื่อผู้ประสานงานของสถานประกอบการ/หน่วยงาน</label><br>
            <input class="form-control"  type="tel" style="font-size: 20px; width: 500px; margin-top: 10px;" value="นายมังกี้ ดี ลูฟี่"/><br>
            <label style="font-size: 20px; ">ตำแหน่งของผู้ประสานงาน</label><br>
            <input class="form-control"  type="tel" style="font-size: 20px; width: 500px; margin-top: 10px;" value="ฝ่ายบุคคล"/><br>
            <label style="font-size: 20px; ">เบอร์โทรศัพท์ของผู้ประสานงาน</label><br>
            <input class="form-control"  type="tel" style="font-size: 20px; width: 500px; margin-top: 10px;" value="09x-xxx-xxx"/><br>
            <a href="?controller=company&action=updatecompanyDetailPage3" type="button" class="btn" style="margin-left: 170px; background-color: #171738; border-radius: 35px; color: #FFFFFF; width:150px; font-size:20px;" >ถัดไป</a> 
        </div>


    </div>
</div>
<?php require_once("menuDown.php") ?>
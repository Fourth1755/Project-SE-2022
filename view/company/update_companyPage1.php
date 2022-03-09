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
            <label style="font-size: 25px; margin-left: 100px;">ข้อมูลทั่วไปของสถานประกอบการ</label><br><br>
            <label style="font-size: 20px; ">ชื่อสถานประกอบการ</label><br>
            <input class="form-control"  type="tel" style="font-size: 20px; width: 500px; margin-top: 10px;" value="Drone Academy Thailand"/><br>
            <label style="font-size: 20px; ">ประเภทธุรกิจ</label><br>
            <input class="form-control"  type="tel" style="font-size: 20px; width: 500px; margin-top: 10px;" value="บริษัทจำกัด"/><br>
            <label style="font-size: 20px; ">ที่อยู่ของสถานประกอบการ</label><br>
            <input class="form-control"  type="tel" style="font-size: 20px; width: 500px; margin-top: 10px;" value="ที่อยู่: 58/64 Muangthong Thani, Klong Klue, Pakkred, Nonnthaburi, 11120, Thailand."/><br>
            <label style="font-size: 20px; ">เบอร์โทรศัพท์ของสถานประกอบการ</label><br>
            <input class="form-control"  type="tel" style="font-size: 20px; width: 500px; margin-top: 10px;" value="02 000 0199"/><br>
            <label style="font-size: 20px; ">เบอร์โทรสารของสถานประกอบการ</label><br>
            <input class="form-control"  type="tel" style="font-size: 20px; width: 500px; margin-top: 10px;" value="02 000 0199"/><br>
            <a href="?controller=company&action=updatecompanyDetailPage2" type="button" class="btn" style="margin-left: 170px; background-color: #171738; border-radius: 35px; color: #FFFFFF; width:150px; font-size:20px;" >ถัดไป</a> 
        </div>


    </div>
</div>
<?php require_once("menuDown.php") ?>
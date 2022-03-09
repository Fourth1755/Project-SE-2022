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
            <label style="font-size: 25px; margin-left: 100px;">ตำแหน่งงานที่ต้องการรับนิสิตฝึกงาน</label><br><br>
            <label style="font-size: 20px; ">ตำแหน่งงานที่ต้องการรับนิสิตฝึกงาน</label><br>
            <input class="form-control"  type="tel" style="font-size: 20px; width: 280px; margin-top: 10px;" value="Computer Programmer"/><br>
            
            <div style="display: flex;">
                <input class="form-control"  type="tel" style="font-size: 20px; width: 280px; margin-top: 0px;" value="Internet of Things"/>
                <a type="button" class="btn" style=" margin-left: 50px; background-color: #171738; border-radius: 10px; color: #FFF; font-size: 20px;" href="?controller=announce&action=addAnnounce"> <i class="fa fa-plus"></i> เพิ่มตำแหน่งงาน</a>
            </div>
            <br>
            <label style="font-size: 20px; ">ลักษณะงานที่นิสิตต้องปฏิบัติ (Job Description)</label><br>
            <input class="form-control"  type="tel" style="font-size: 20px; width: 500px; margin-top: 10px;" value="พัฒนาเว็บไซต์ตามที่ได้รับมอบหมาย"/><br>
            <label style="font-size: 20px; ">จำนวน (คน)</label><br>
            <input class="form-control"  type="tel" style="font-size: 20px; width: 500px; margin-top: 10px;" value="5"/><br>
            <label style="font-size: 20px; ">ความสามารถทางวิชาการหรือทักษะที่นิสิตควรมี</label><br>
            <input class="form-control"  type="tel" style="font-size: 20px; width: 500px; margin-top: 10px;" value="Python, C/C++, PHP, Golang"/><br>
            <label style="font-size: 20px; ">ระยะเวลาที่ต้องการให้นิสิตไปปฏิบัติงาน</label><br>
            <input class="form-control"  type="tel" style="font-size: 20px; width: 500px; margin-top: 10px;" value="18 เมษายน - 10 มิถุนายน 2565 "/><br>
            <a href="?controller=company&action=index" type="button" class="btn" style="margin-left: 170px; background-color: #171738; border-radius: 35px; color: #FFFFFF; width:150px; font-size:20px;" >บันทึก</a> 
        </div>


    </div>
</div>
<?php require_once("menuDown.php") ?>
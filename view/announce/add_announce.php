<style>
    .content {
        width: 100%;
        background-color: #FFCFCF;
        border-radius: 20px;
        height: 700px;
        padding: 20px;
    }
</style>
<?php require_once("menuTop.php") ?>
<div>
    <h3>เพิ่มประกาศ</h3>
    <hr style="width:100%;text-align:left;margin-left:0">
    <div class="content">
        <form>
            <br>
            <span style="font-size:25px; margin-left: 60px;">ชื่อประกาศ:</span>
            <input placeholder="กรอกชื่อประกาศ" type="text" style="margin-left: 95px;" /><br><br>
            <span style="font-size:25px; margin-left: 60px;">เนื้อหาประกาศ:</span><br>
            <div class="mb-3">
                <textarea placeholder="กรอกเนื้อหาประกาศ" name="Condition" type="text" rows="3" style="width: 1000px; height: 238px; margin-left: 275px;"></textarea>
            </div><br><br>
            <span style="font-size:25px; margin-left: 60px;">แนบเอกสาร:</span>
            <a type="button" class="btn" style="margin-left: 80px; background-color: black; border-radius: 35px; color: #FFFFFF;" >เลือกไฟล์</a><br><br>
            <a type="button" class="btn" style="margin-left: 700px; background-color: black; border-radius: 35px; color: #FFFFFF;" >อัพโหลด</a>

        </form>
    </div>
</div>
<?php require_once("menuDown.php") ?>
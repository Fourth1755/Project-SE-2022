<style>
    .content {
        width: 100%;
        background-color: #FFCFCF;
        border-radius: 20px;
        height: 700px;
        padding: 40px;
    }
</style>
<?php require_once("menuTop.php") ?>
<div>
    <h3>เพิ่มประกาศ</h3>
    <hr style="width:100%;text-align:left;margin-left:0">
    <div class="content">
        <form>
            <br>
            <div class="form-group pb-4 col-md-4">
            <label style="font-size:25px;">ชื่อประกาศ:<input class="form-control"  placeholder="กรอกชื่อประกาศ" type="text"/></label>
            <br><br>
            </div>

            <label style="font-size:25px;">เนื้อหาประกาศ:</label><br>
            <div class="mb-3">
                <textarea class="form-control" placeholder="กรอกเนื้อหาประกาศ" name="Condition" type="tel" rows="3" style="width: 100%; height: 238px;"></textarea>
            </div><br><br>
            <label style="font-size:25px; margin-left: 60px;">แนบเอกสาร:</label>
            <a type="button" class="btn" style="margin-left: 80px; background-color: #171738; border-radius: 35px; color: #FFFFFF;  width:130px; font-size:20px;" >เลือกไฟล์</a><br><br>
            <a type="button" class="btn" style="margin-left: 700px; background-color: #171738; border-radius: 35px; color: #FFFFFF; width:150px; font-size:20px;" >อัพโหลด</a>

        </form>
    </div>
</div>
<?php require_once("menuDown.php") ?>
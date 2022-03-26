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
    <h3>อัพโหลดเอกสารการฝึกงาน</h3>
    <hr style="width:100%;text-align:left;margin-left:0;">

    <br><br>
    <div class="content">
        <form>
            <br><br>
            <div style="display: flex;">
                <label style="font-size:25px; margin-left: 100px;">ชื่อเอกสาร:</label>
                <input type="tel" class="form-control" style="margin-left: 60px; font-size:20px; width: 500px;" placeholder="กรอกชื่อเอกสาร"></input>
            </div>
            <br><br>
            <div style="display: flex;">
                <label style="font-size:25px; margin-left: 100px;">ประเภท:</label>
                <div  style="margin-left: 90px; ">
                    <select style=" color: #000; height: 40px;">
                        <option >หนังสือขอความอนุเคราะห์</option>
                        <option >อื่นๆ</option>
                
                    </select>

                </div>
            </div>
            <br><br><br><br>
            <div>
                <label style="font-size:25px; margin-left: 100px;">แนบเอกสาร:</label>
                <a type="button" class="btn" style="margin-left: 40px; background-color: #171738; border-radius: 35px; color: #FFFFFF;  width:130px; font-size:20px;">เลือกไฟล์</a><br><br><br><br><br><br>
                <a type="button" class="btn" style="margin-left: 500px; background-color: #171738; border-radius: 35px; color: #FFFFFF; width:150px; font-size:20px;">อัพโหลด</a>
            </div>



        </form>


    </div>
</div>
<?php require_once("menuDown.php") ?>
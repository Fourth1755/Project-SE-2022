<title>อนุมัติคำร้องการฝึกงาน</title>
<style>
.profilecontent{
    background-color: #FFCFCF;
    padding-right: 50px;
    border-radius: 20px;
    display: flex;
}
.image-big{
    width: 320px;
    height: 360px;
    padding: 30px 30px 0px 50px;
}
.image-big img{
    width: 100%;
    height: 100%;
    
    border-radius: 20px;
    transform: scale(1);
    transition: .3s ease-in-out;
    box-shadow: 2px 2px 6px 0px rgba(0,0,0,0.3);
}
.image-big img:hover{
    transform: scale(1.08);
    box-shadow: 2px 2px 6px 0px rgba(0,0,0,0.3);
}
.content{
    padding: 20px 20px 0px 20px;

}
.content-title{
    padding: 10px 20px 10px 30px;
    list-style-type: none;
}
.content-title li{
    padding: 15px 0px 15px 0px;
    font-size: 20px;
    text-decoration: none;
}
.content-detail{
    padding: 20px 40px 20px 40px;
}
</style>
<?php require_once("menuTop.php") ?>
      <h3>อนุมัติคำร้องการฝึกงาน</h3>
      <hr style="width:100%;text-align:left;margin-left:0">
      
      <div class="profilecontent">
            <div class="image-big">
                <img src="<?php echo "$requestform->imagePath";?>"/>
            </div>
            <div class="content">
                <h4>คำร้องฝึกงาน</h4>
                <ul class="content-title">
                    
                    <li>
                        ชื่อ <?php echo "$requestform->firstName";?> <?php echo "$requestform->lastName";?>
                    </li>
                    <li>
                        รหัสนิสิต:  <?php echo "$requestform->requestID";?>
                    </li>
                    <li>
                        เบอร์โทรศัพท์: <?php echo "$requestform->phoneNumber";?>
                    </li>
                    <li>
                        ตำแหน่งที่ไปฝึกงาน: <?php echo "$requestform->positionRequest";?>
                    </li>
                    <li>
                        สถานที่ไปฝึกงาน: <?php echo "$requestform->requestID";?>
                    </li>
                    <li>
                        ระยะเวลาการฝึกงาน: <?php echo "$requestform->startDate";?> ถึง <?php echo "$requestform->endDate";?>
                    </li>
                </ul>
                    
            </div>
      </div>
      <hr style="width:100%;text-align:left;margin-left:0">
      <h3>การอนุมัติคำร้อง</h3>
<form method="get" action="">
<input type="hidden" name="requestID" value="<?php echo "$requestform->requestID";?>"/>
<input type="text" name="approverID" value="<?php echo $_SESSION['username'];?>"/>
<input type="hidden" name="ID" value="<?php echo "$requestform->id";?>"/>
<input type="hidden" name="controller" value="petition" class="form-control">
<div class="form-group pb-4 col-md-4">
    <label>เหตุผล</label>
    <input type="tel" class="form-control" name="reasonReject" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="กรอกเหตุผลสำหรับการไม่อนุมัติ" required>
</div>
<button type="submit" class="btn btn-danger" value="approveReject" name="action">Reject</button>

     </form>
     <a href="?requestID=<?php echo "$requestform->requestID";?>&approverID=T9043000001&ID=<?php echo "$requestform->id";?>&controller=petition&action=approveApprove" class="btn btn-success">Approve</a>
     <hr style="width:100%;text-align:left;margin-left:0">
      <h3>รายละเอียด</h3>
      <div class="content-detail">
      <table class="table">
    <tbody>
    <tr>
      <th scope="row">สถานประกอบการ:</th>
      <td><?php echo "$requestform->companyName";?></td>
    </tr>
    <tr>
      <th scope="row">ชื่อหัวหน้างาน/หัวหน้าโปรเจกต:์</th>
      <td><?php echo "$requestform->agentName";?></td>
    </tr>
    <tr>
      <th scope="row">ตำแหน่งหัวหน้างาน/หัวหน้าโปรเจกต:์</th>
      <td><?php echo "$requestform->agentPosition";?></td>
    </tr>
    <tr>
      <th scope="row">ชื่อผู้ประสานงาน:</th>
      <td><?php echo "$requestform->HR_Name";?></td>
    </tr>
    <tr>
      <th scope="row">เบอร์โทรศัทพ์ผู้ประสานงาน:</th>
      <td><?php echo "$requestform->HR_PhoneNamber";?></td>
    </tr>
    <tr>
      <th scope="row">อีเมลผู้ประสานงาน:</th>
      <td><?php echo "$requestform->HR_Email";?></td>
    </tr>
  </tbody>
</table>
</div>
<a href="?controller=petition&action=approvePetition" class="btn btn-outline-dark">Back</a>
<?php require_once("menuDown.php") ?>
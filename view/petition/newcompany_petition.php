<?php require_once("menuTop.php") ?>
<style>
.content{
      width:100%;
      background-color: #FFCFCF;
      border-radius: 20px;
      padding: 60px;
}     
</style>
<body>
    <div>
      <h3>เสนอสถานประกอบการใหม่</h3>
      <hr style="width:100%;text-align:left;margin-left:0;">
      <div class="content">
          <h4>ข้อมูลทั่วไปของสถานประกอบการ</h4>
            <form method="get" action="">
                  <div class="form-group pb-4 col-md-4">
                  <label>ชื่อสถานประกอบการ</label>
                  <input type="tel" class="form-control" name="phoneNumber" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="กรอกเบอร์โทร">
                  </div>
                  <div class="form-group pb-4 col-md-4">
                  <label>ประเภทธุรกิจ</label>
                  <input type="text" class="form-control" name="facebookName" id="exampleInputPassword1" placeholder="กรอกชื่อ facebook">
                  </div>
                  <div class="form-group pb-4 col-md-4">
                  <label>ที่อยู่ของสถานประกอบการ</label>
                  <input type="text" class="form-control" name="positionRequest" id="exampleInputPassword1" placeholder="กรอกตำแหน่ง">
                  </div>
                  <div class="form-group pb-4 col-md-4">
                  <label>เบอร์โทรศัพท์ของสถานประกอบการ</label>
                  <input type="text" class="form-control" name="agentName" id="exampleInputPassword1" placeholder="กรอกชื่อ">
                  </div>
                  <div class="form-group pb-4 col-md-4">
                  <label>เบอร์โทรสารของสถานประกอบการ</label>
                  <input type="text" class="form-control" name="agentPosition" id="exampleInputPassword1" placeholder="กรอกตำแหน่ง">
                  </div>
                  <hr style="width:100%;text-align:left;margin-left:0;">
                  <h4>ข้อมูลทั่วไปของสถานประกอบการ</h4>
                  <div class="form-group pb-4 col-md-4">
                  <label>ข้อมูลทั่วไปของหัวหน้างาน/ผู้ประสานงาน</label>
                  <input type="text" class="form-control" name="agentPosition" id="exampleInputPassword1" placeholder="กรอกตำแหน่ง">
                  </div>
                  <div class="form-group pb-4 col-md-4">
                  <label>ตำแหน่งของผู้จัดการ/หัวหน้าหน่วยงาน</label>
                  <input type="text" class="form-control" name="agentPosition" id="exampleInputPassword1" placeholder="กรอกตำแหน่ง">
                  </div>
                  <div class="form-group pb-4 col-md-4">
                  <label>ชื่อผู้ประสานงานของสถานประกอบการ/หน่วยงาน</label>
                  <input type="text" class="form-control" name="agentPosition" id="exampleInputPassword1" placeholder="กรอกตำแหน่ง">
                  </div>
                  <div class="form-group pb-4 col-md-4">
                  <label>ตำแหน่งของผู้ประสานงาน</label>
                  <input type="text" class="form-control" name="agentPosition" id="exampleInputPassword1" placeholder="กรอกตำแหน่ง">
                  </div>
                  <div class="form-group pb-4 col-md-4">
                  <label>เบอร์โทรศัพท์ของผู้ประสานงาน</label>
                  <input type="text" class="form-control" name="agentPosition" id="exampleInputPassword1" placeholder="กรอกตำแหน่ง">
                  </div>
                  <hr style="width:100%;text-align:left;margin-left:0;">
                  <h4>ตำแหน่งงานที่ต้องการรับนิสิตฝึกงาน</h4>
                  <div class="form-group pb-4 col-md-4">
                  <label>ตำแหน่งงาน</label>
                  <input type="text" class="form-control" name="agentPosition" id="exampleInputPassword1" placeholder="กรอกตำแหน่ง">
                  </div>
                  <div class="form-group pb-4 col-md-4">
                  <label>ลักษณะงานที่นิสิตต้องปฏิบัติ (Job Description)</label>
                  <input type="text" class="form-control" name="agentPosition" id="exampleInputPassword1" placeholder="กรอกตำแหน่ง">
                  </div>
                  <div class="form-group pb-4 col-md-4">
                  <label>จำนวน (คน)</label>
                  <input type="text" class="form-control" name="agentPosition" id="exampleInputPassword1" placeholder="กรอกตำแหน่ง">
                  </div>
                  <div class="form-group pb-4 col-md-4">
                  <label>ความสามารถทางวิชาการหรือทักษะที่นิสิตควรมี</label>
                  <input type="text" class="form-control" name="agentPosition" id="exampleInputPassword1" placeholder="กรอกตำแหน่ง">
                  </div>
                  <label>ระยะเวลาที่ต้องการให้นิสิตไปปฏิบัติงาน</label>
                  <div class="form-group pb-4 col-md-4" style="display: flex;">
                        <input type="date" name="startDate" class="form-control">
                        <label style="padding: 8px;">ถึง</label>
                        <input type="date" name="endDate" class="form-control">
                  </div>
                  <input name="controller" value="petition" type="hidden"/>
                  <br>
                  <button type="submit" class="btn btn-light" name="action" value="index">Back</button>
                  <button type="submit" class="btn" style="background-color: #171738;color: #FFF;" value="newCompany" name="action">Add new</button>
            </form>
      </div>
</div>
</body>

<?php require_once("menuDown.php") ?>
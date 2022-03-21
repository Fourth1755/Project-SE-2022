<?php require_once("menuTop.php") ?>
<title>เสนอสถานประกอบการใหม่</title>
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
                  <input type="tel" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="กรอกชื่อสถานประกอบการ" required>
                  </div>
                  <div class="form-group pb-4 col-md-4">
                  <label>ประเภทธุรกิจ</label>
                  <input type="text" class="form-control" name="type" id="exampleInputPassword1" placeholder="กรอกประเภทธุรกิจ" required>
                  </div>
                  <div class="form-group pb-4 col-md-4">
                  <label>ที่อยู่ของสถานประกอบการ</label>
                  <input type="text" class="form-control" name="address" id="exampleInputPassword1" placeholder="กรอกที่อยู่" required>
                  </div>
                  <div class="form-group pb-4 col-md-4">
                  <label>เบอร์โทรศัพท์ของสถานประกอบการ</label>
                  <input type="text" class="form-control" name="phoneNumber" id="exampleInputPassword1" pattern="[0-9]{10}" placeholder="กรอกเบอร์โทร" required>
                  </div>
                  <div class="form-group pb-4 col-md-4">
                  <label>เบอร์โทรสารของสถานประกอบการ</label>
                  <input type="text" class="form-control" name="faxNumber" id="exampleInputPassword1" pattern="[0-9]{10}" placeholder="กรอกเบอร์โทรสาร" required>
                  </div>
                  <label>สวัสดิการที่พัก</label>
                  <div class="form-group pb-4 col-md-4" style="display: flex;">
                        <label class="container">มีที่พัก
                        <input type="radio" checked="checked" name="department" value="มี">
                        <span class="checkmark"></span>
                        </label>
                        <label class="container">ไม่มีที่พัก
                        <input type="radio" name="department" value="ไม่มี">
                        <span class="checkmark"></span>
                        </label>
                  </div>
                  <div class="form-group pb-4 col-md-4">
                  <label>ค่าตอบแทน</label>
                  <input type="number" class="form-control" name="payPerDay" id="exampleInputPassword1" placeholder="กรอกค่าตอบแทน (ถ้าไม่มีใส่ 0)" required>
                  </div>
                  <hr style="width:100%;text-align:left;margin-left:0;">
                  <h4>ข้อมูลผู้ติดต่อของสถานประกอบการ</h4>
                  <div class="form-group pb-4 col-md-4">
                  <label>ชื่อหัวหน้างาน/ผู้อนุมัติการฝึกงาน</label>
                  <input type="text" class="form-control" name="agentName" id="exampleInputPassword1" placeholder="กรอกชื่อ" required>
                  </div>
                  <div class="form-group pb-4 col-md-4">
                  <label>ตำแหน่งของหัวหน้างาน/ผู้อนุมัติการฝึกงาน</label>
                  <input type="text" class="form-control" name="agentPosition" id="exampleInputPassword1" placeholder="กรอกตำแหน่ง" required>
                  </div>
                  <div class="form-group pb-4 col-md-4">
                  <label>ชื่อผู้ประสานงานของสถานประกอบการ/หน่วยงาน</label>
                  <input type="text" class="form-control" name="HR_Name" id="exampleInputPassword1" placeholder="กรอกชื่อ" required>
                  </div>
                  <div class="form-group pb-4 col-md-4">
                  <label>ตำแหน่งของผู้ประสานงาน</label>
                  <input type="text" class="form-control" name="HR_Position" id="exampleInputPassword1" placeholder="กรอกตำแหน่ง" required>
                  </div>
                  <div class="form-group pb-4 col-md-4">
                  <label>เบอร์โทรศัพท์ของผู้ประสานงาน</label>
                  <input type="text" class="form-control" name="HR_PhoneNamber" id="exampleInputPassword1" pattern="[0-9]{10}" placeholder="กรอกเบอร์โทร" required>
                  </div>
                  <hr style="width:100%;text-align:left;margin-left:0;">
                  <h4>ตำแหน่งงานที่ต้องการรับนิสิตฝึกงาน</h4>
                  <div class="form-group pb-4 col-md-4">
                  <label>ตำแหน่งงานที่ต้องการรับ</label>
                  <input type="text" class="form-control" name="requestPosition" id="exampleInputPassword1" placeholder="กรอกตำแหน่งงาน" required>
                  </div>
                  <div class="form-group pb-4 col-md-4">
                  <label>ลักษณะงานที่นิสิตต้องปฏิบัติ (Job Description)</label>
                  <input type="text" class="form-control" name="jobDescription" id="exampleInputPassword1" placeholder="กรอกลักษณะงาน" required>
                  </div>
                  <div class="form-group pb-4 col-md-4">
                  <label>จำนวน (คน)</label>
                  <input type="number" class="form-control" name="amountPerson" id="exampleInputPassword1" placeholder="กรอกจำนวนคน" required>
                  </div>
                  <div class="form-group pb-4 col-md-4">
                  <label>ความสามารถทางวิชาการหรือทักษะที่นิสิตควรมี</label>
                  <input type="text" class="form-control" name="requiredSkill" id="exampleInputPassword1" placeholder="กรอกทักษะ/ความสามารถที่ควรมี" required>
                  </div>
                  <label>ระยะเวลาที่ต้องการให้นิสิตไปปฏิบัติงาน</label>
                  <div class="form-group pb-4 col-md-4" style="display: flex;">
                        <input type="date" name="startDate" class="form-control" required min="<?php echo date('Y-m-d');?>">
                        <label style="padding: 8px;">ถึง</label>
                        <input type="date" name="endDate" class="form-control" required min="<?php echo date('Y-m-d');?>">
                  </div>
                  <input name="controller" value="company" type="hidden"/>
                  <br>
                  <button type="submit" class="btn" style="background-color: #171738;color: #FFF;" value="addCompany" name="action">Add new</button>
            </form>
      </div>
</div>
</body>

<?php require_once("menuDown.php") ?>
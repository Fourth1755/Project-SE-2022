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
      <h3>ยื่นคำร้องฝึกงาน</h3>
      <hr style="width:100%;text-align:left;margin-left:0;">
      <div class="content">
            <h5>ส่วนของการฝึกงาน</h5>
            <form method="get" action="">
                  <input name="requestID" value="<?php //echo $user->id;?>">
                  <div class="form-group pb-4 col-md-4">
                  <label>เบอร์โทร</label>
                  <input type="tel" class="form-control" name="phoneNumber" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="กรอกเบอร์โทร">
                  </div>
                  <div class="form-group pb-4 col-md-4">
                  <label>ชื่อ Facebook</label>
                  <input type="text" class="form-control" name="facebookName" id="exampleInputPassword1" placeholder="กรอกชื่อ facebook">
                  </div>
                  <div class="form-group pb-4 col-md-4">
                  <label>ตำแหน่งที่ไปฝึกงาน</label>
                  <input type="text" class="form-control" name="positionRequest" id="exampleInputPassword1" placeholder="กรอกตำแหน่ง">
                  </div>
                  <div class="form-group pb-4 col-md-4">
                  <label>ตำแหน่งของหัวหน้างาน/หัวหน้าโปรเจกต์</label>
                  <input type="text" class="form-control" name="agentName" id="exampleInputPassword1" placeholder="กรอกตำแหน่ง">
                  </div>
                  <label>สถานประกอบการ</label>
                  <div class="form-group pb-4 col-md-4">
                  <label for="formGroupExampleInput2" class="form-label">
                  <select name="companyID" class="form-select" aria-label="Default select example">
                        <option selected disabled hidden>Open this select Company</option>
                              <?php
                                    foreach($company_list as $com){
                                          echo"<option value=$com->id>$com->name</option>";
                                    }    
                              ?>
                  </select>
                  </label>
                  </div>
                  <a class="btn" style="background-color: #171738;color: #FFF;"><i class="fa fa-plus" style="padding: 7px;"></i>เสนอสถานประกอบการใหม่</a>
                  <br>
                  <label>ระยะเวลาการฝึกงาน</label>
                  <div class="form-group pb-4 col-md-4" style="display: flex;">
                        <input type="date" name="startDate" class="form-control">
                        <label style="padding: 8px;">ถึง</label>
                        <input type="date" name="endDate" class="form-control">
                  </div>
                  <h5>ส่วนของผู้ประสานงาน</h5>
                  <div class="form-group pb-4 col-md-4">
                  <label>ชื่อผู้ประสานงาน</label>
                  <input type="text" name="HR_Name" class="form-control" id="exampleInputPassword1" placeholder="กรอกชื่อผู้ประสานงาน">
                  </div>
                  <div class="form-group pb-4 col-md-4">
                  <label>เบอร์โทรศัทพ์ผู้ประสานงาน</label>
                  <input type="tel" name="HR_PhoneNamber" class="form-control" id="exampleInputPassword1" placeholder="กรอกเบอร์โทรศัทพ์">
                  </div>
                  <div class="form-group pb-4 col-md-4">
                  <label>อีเมลผู้ประสานงาน</label>
                  <input type="email" name="HR_Email" class="form-control" id="exampleInputPassword1" placeholder="กรอกอีเมล" name= "deposit">
                  </div>
                  <br>
                  <button type="submit" class="btn btn-light" name="action" value="index">Back</button>
                  <button type="submit" class="btn" style="background-color: #171738;color: #FFF;" value="index" name="action">Add new</button>
            </form>
      </div>
</div>
</body>

<?php require_once("menuDown.php") ?>
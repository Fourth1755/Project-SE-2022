<title>My Profile</title>
<style>
.profilecontent{
    height: 400px;
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
    padding: 0px 20px 0px 20px;
    align-content: space-between;
    display: flex;
    flex-wrap: wrap;
}
.content-title{
    padding: 10px 20px 10px 30px;
    list-style-type: none;
}
.content-title li{
    padding: 20px 0px 20px 0px;
    font-size: 20px;
    text-decoration: none;
}
</style>
<?php require_once("menuTop.php") ?>
      <h3>My Profile</h3>
      <hr style="width:100%;text-align:left;margin-left:0">
      <div class="profilecontent">
            <div class="image-big">
                <img src="<?php echo $account->imagePath;?>"/>
            </div>
            <div class="content">
                <ul class="content-title">
                    <li>
                        ชื่อ:  <?php echo $account->firstName;?> <?php echo $account->lastName;?>
                    </li>
                    <li>
                        รหัสนิสิต:  622xxxxxxx
                    </li>
                    <li>
                        ตำแหน่งที่ไปฝึกงาน: Computer Programmer
                    </li>
                    <li>
                        สถานที่ไปฝึกงาน: Drone Academy Thailand
                    </li>
                </ul>
                    
            </div>
      </div>
      <div>
          <h3>ประวัติการส่งคำร้อง</h3>
          <table class="table" id="table-header">
      <tr>
        <th>วันที่ยื่นขอ</th>
        <th>ปีการศึกษา</th>
        <th>บริษัทที่ยื่น</th>
        <th>สถานะ</th>
      </tr>
      <?php
      foreach ($requestUser as $request) {
        $timestamp = strtotime($request->createDate);
        $new_dateformat = date("d-m-Y", $timestamp);
        echo "<tr><td>$new_dateformat</td>
                  <td>$request->academicYear</td>
                  <td>$request->companyName</td>
                  <td>$request->statusName</td>" ?>
      <?php
      };
      ?>
    </table>
      </div>
      <hr style="width:100%;text-align:left;margin-left:0">
<?php require_once("menuDown.php") ?>
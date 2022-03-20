<?php require_once("menuTop.php") ?>
<title>สถานประกอบการ</title>
<style>
.search{
    padding: 20px 0px 40px 0px;
}
.search input{
    border-radius: 20px;
    width: 300px;
    padding: 7px;
}
#table-header{
    padding-top: 20px;
    border-collapse: collapse;
    width: 100%;
}
#table-header tr th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #FFAFB0;
  color: #000;
}
</style>

<body>
    <div>
      <h3>สถานประกอบการ</h3>
      <hr style="width:100%;text-align:left;margin-left:0;">
      <div class="search">
          <input type="search" placeholder="ค้นหาสถานประกอบการ" style="background-color: #E5E5E5;"/>
          <a href=''><img src=https://upload.wikimedia.org/wikipedia/commons/thumb/0/0b/Search_Icon.svg/500px-Search_Icon.svg.png width=35 /></a>
          <a type="button" class="btn" style="float: right; margin-right: 108px; background-color: FFAFB0; border-radius: 35px; color: #000000;" href=""> <i class="fa fa-plus"></i> เพิ่มสถานประกอบการ</a>
      </div>
      <table class="table" id="table-header" >    
    <tr>
      <th>ลำดับ</th>
      <th>สถานประกอบการ</th>
      <th>จำนวนผู้ยื่น</th>
      <th>ตำแหน่งที่รับ</th>
      <th>เพิ่มเติม</th>
    </tr>
   <?php
        foreach($company_list as $company){
          echo "<tr>
            <td>1</td>
            <td> $company->name</td>
      <td>0</td>
      <td>$company->requiredSkill</td>";?>
      <td><a class ="btn btn-primary"href='?controller=company&action=indexcompanyDetail'>Detail</a></td>
    <?php
     echo"</tr>";
        }
   ?>
</table>
</div>
</body>

<?php require_once("menuDown.php") ?>
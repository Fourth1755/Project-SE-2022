
<?php require_once("menuTop.php") ?>
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
   
    <tr>
      <td scope="row">1</td>
      <td> Drone Academy Thailand</td>
      <td>1</td>
      <td>Computer Programmer </td>
      <td><a  href='?controller=company&action=indexcompanyDetail'><img src=http://cdn.onlinewebfonts.com/svg/img_159305.png style="width: 35px;" /></a></td>
    </tr>
    <tr>
      <td scope="row">2</td>
      <td>บริษัท โกไฟว์จำกัด</td>
      <td>4</td>
      <td>Developer, System Analyst</td>
      <td><a  href='?controller=company&action=indexcompanyDetail'><img src=http://cdn.onlinewebfonts.com/svg/img_159305.png style="width: 35px;" /></a></td>
    </tr>
    
    
</table>

</div>
</body>

<?php require_once("menuDown.php") ?>
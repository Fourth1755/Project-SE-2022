
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
      <h3>รายการสรุปการอนุมัติฝึกงาน</h3>
      <hr style="width:100%;text-align:left;margin-left:0;">
      <div class="search">
          <input type="search" placeholder="ค้นหารายชื่อนิสิต" style="background-color: #E5E5E5;"/>
          <a href=''><img src=https://upload.wikimedia.org/wikipedia/commons/thumb/0/0b/Search_Icon.svg/500px-Search_Icon.svg.png width=35 /></a>
          
      </div>
      <table class="table" id="table-header" >    
    <tr>
      <th>ลำดับ</th>
      <th>รหัสนิสิต</th>
      <th>ชื่อ</th>
      <th>ชั้นปี</th>
      <th>สถานที่ฝึกงาน</th>
      <th>สถานะ</th>
      <th>เอกสาร</th>
    </tr>
   
    <tr>
      <td scope="row">1</td>
      <td>622xxxxxx</td>
      <td>นางสาวมาริน คิตะกาวะ</td>
      <td>3</td>
      <td> Drone Academy Thailand</td>
      <td><a type="button" class="btn btn-success" style="background: #4BCE35; border-radius: 5px;" ><i class="far fa-check-circle"></i></a></td>
      <td><a><img src="https://sv1.picz.in.th/images/2022/03/08/rCjxEW.png" width=30/></a></td>
    </tr>
    <tr>
      <td scope="row">2</td>
      <td>622xxxxxx</td>
      <td>นางสาวคุรุมิ โทคิซากิ</td>
      <td>3</td>
      <td>บริษัท โกไฟว์ จำกัด</td>
      <td><a type="button" class="btn btn-success" style="background: #EB2626; border-radius: 5px;" ><i class="far fa-times-circle"></i></a></td>
      <td><a><img src="https://sv1.picz.in.th/images/2022/03/08/rCjxEW.png" width=30/></a></td>
    </tr>
    
</table>

</div>
</body>

<?php require_once("menuDown.php") ?>
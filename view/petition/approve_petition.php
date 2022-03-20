<?php require_once("menuTop.php") ?>
<title>อนุมัติคำร้องการฝึกงาน</title>
<style>
  .search-box {
    margin:10px 0px 30px 0px;
    background-color: #E5E5E5;
    display: flex;
    align-items: center;
    border-radius: 10px;
  }
  .search{
    padding: 10px 30px 10px 0px;
  }
  .search input {
    border-radius: 10px;
    width: 360px;
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
      <h3>อนุมัติคำร้องการฝึกงาน</h3>
      <hr style="width:100%;text-align:left;margin-left:0;">
      <form method="get" action="">
      <div class="search-box">
        
      <div >
        
        <div class="search">
          <button class="btn" type="submit" name="action" value="searchApprove"><i class="fas fa-search"></i></button>
          <input type="text" name="key" placeholder="ค้นหา"/>
          <input type="hidden" name="controller" value="petition">
        </div>
      
      </div>
     
<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
  Select Status
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
    <li><a class="dropdown-item" href="?key=waiting&controller=petition&action=searchApprove">waiting</a></li>
    <li><a class="dropdown-item" href="?key=approve&controller=petition&action=searchApprove">approve</a></li>
    <li><a class="dropdown-item" href="?key=reject&controller=petition&action=searchApprove">reject</a></li>
  </ul>
  </div>  
    </div>
  </form>
    
      <table class="table" id="table-header" >    
    <tr>
      <th>วันที่</th>
      <th>รหัสนิสิต</th>
      <th>ชื่อ</th>
      <th>บริษัทฝึกงาน</th>
      <th>สถานะ</th>
      <th>รายละเอียด</th>
    </tr>
    <?php 
            foreach($requestform_List as $requestform){
              $timestamp = strtotime($requestform->createDate);
              $new_dateformat = date("d-m-Y", $timestamp);
              if($requestform->statusName=="waiting"){
                 echo "<tr><td>$new_dateformat</td>
                  <td>$requestform->requestID</td>
                  <td>$requestform->firstName  $requestform->lastName</td>
                  <td>$requestform->companyName</td>
                  <td>$requestform->statusName</td>"?>
                  <td><a type="button" class="btn btn-primary"href=?controller=petition&action=approveView&<?php echo "ID=$requestform->id";?>><i class="material-icons">build</i></a></td>
            <?php 
              }
            };
        ?>
</table>

</div>
</body>

<?php require_once("menuDown.php") ?>
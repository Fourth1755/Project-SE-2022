
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
      <h3>ผลการอนุมัติการฝึกงาน</h3>
      <hr style="width:100%;text-align:left;margin-left:0;">
      <div class="search">
          <input type="search" />
      </div>
      <table class="table" id="table-header" >    
    <tr>
      <th>วันที่</th>
      <th>รหัสนิสิต</th>
      <th>ชื่อ</th>
      <th>นามสกุล</th>
      <th>สถานะ</th>
    </tr>
    <?php 
            foreach($requestform_List as $requestform){
            echo "<tr><td>$requestform->createDate</td>
                  <td>$requestform->requestID</td>
                  <td>$requestform->firstName</td>
                  <td>$requestform->lastName</td>
                  <td>$requestform->statusName</td>"?>
            <?php 
            };
        ?>
</table>

</div>
</body>

<?php require_once("menuDown.php") ?>
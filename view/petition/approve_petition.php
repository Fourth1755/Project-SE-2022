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
      <h3>อนุมัติคำร้องการฝึกงาน</h3>
      <hr style="width:100%;text-align:left;margin-left:0;">
      <div style="width:100%;text-align:left;display: flex;">
      <form class="search" method="get" action="">
        <input type="text" name="key" placeholder="ค้นหา" style="background-color: #E5E5E5;" />
        <input type="hidden" name="controller" value="petition">
        <button class="btn btn-light" type="submit" name="action" value="searchApprove"><img src=https://upload.wikimedia.org/wikipedia/commons/thumb/0/0b/Search_Icon.svg/500px-Search_Icon.svg.png width=35 /></button>
      </form>
      <label for="formGroupExampleInput2" class="form-label">
                  <select name="companyID" class="form-select" aria-label="Default select example">
                        <option selected disabled hidden>Open this select Company</option>
                              <?php
                                    foreach($company_list as $com){
                                          echo"<option value=$com->id>$com->name</option>";
                                    }    
                              ?>
                  </select>
    </div>
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

            echo "<tr><td>$new_dateformat</td>
                  <td>$requestform->requestID</td>
                  <td>$requestform->firstName  $requestform->lastName</td>
                  <td>$requestform->companyName</td>
                  <td>$requestform->statusName</td>"?>
                  <td><a type="button" class="btn btn-primary"href=?controller=petition&action=approveView&<?php echo "ID=$requestform->id";?>><i class="material-icons">build</i></a></td>
            <?php 
            };
        ?>
</table>

</div>
</body>

<?php require_once("menuDown.php") ?>
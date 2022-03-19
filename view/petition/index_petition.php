<?php require_once("menuTop.php") ?>
<style>
  .search {
    padding: 20px 0px 40px 0px;
  }

  .search input {
    border-radius: 20px;
    width: 300px;
    padding: 7px;
  }

  #table-header {
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
    <div>
      <form class="search" method="get" action="">
        <input type="text" name="key" placeholder="ค้นหา" style="background-color: #E5E5E5;" />
        <input type="hidden" name="controller" value="petition">
        <button class="btn btn-light float-none rounded-pill" type="submit" name="action" value="searchPetition"><img src=https://upload.wikimedia.org/wikipedia/commons/thumb/0/0b/Search_Icon.svg/500px-Search_Icon.svg.png width=35 /></button>
      </form>
    </div>
    <br>
    <div style="display: flex;">
        
    </div>







    <table class="table" id="table-header">
      <tr>
        <th>วันที่ยื่นขอ</th>
        <th>ปีการศึกษา</th>
        <th>รหัสนิสิต</th>
        <th>ชื่อ</th>
        <th>นามสกุล</th>
        <th>สถานะ</th>
      </tr>
      <?php
      foreach ($requestform_List as $requestform) {
        $timestamp = strtotime($requestform->createDate);
        $new_dateformat = date("d-m-Y", $timestamp);


        echo "<tr><td>$new_dateformat</td>
                  <td>$requestform->academicYear</td>
                  <td>$requestform->requestID</td>
                  <td>$requestform->firstName</td>
                  <td>$requestform->lastName</td>
                  <td>$requestform->statusName</td>" ?>
      <?php
      };
      ?>
    </table>

  </div>
</body>

<?php require_once("menuDown.php") ?>
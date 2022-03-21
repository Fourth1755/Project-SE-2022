<?php require_once("menuTop.php") ?>
<title>ผลการอนุมัติการฝึกงาน</title>
<style>
  .search-box {
    margin: 10px 0px 30px 0px;
    
    display: flex;
    align-items: center;
    border-radius: 10px;
  }

  .search {
    padding: 10px 0px 10px 0px;
  }

  .search input {
    border-radius: 10px;
    width: 360px;
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
    <form method="get" action="">
      <div class="search-box">
        <div>
          <div class="search">
            <button class="btn" type="submit" name="action" value="searchPetition"><i class="fas fa-search"></i></button>
            <input type="text" name="key" placeholder="ค้นหา" />
            <input type="hidden" name="controller" value="petition">
          </div>

        </div>
        <div class="dropdown" style="padding-left: 40px;">
          <button class="btn dropdown-toggle" style="background-color:#171738;color: #FFF;" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
            Select Status
          </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
            <li><a class="dropdown-item" href="?key=waiting&controller=petition&action=searchPetition">waiting</a></li>
            <li><a class="dropdown-item" href="?key=approve&controller=petition&action=searchPetition">approve</a></li>
            <li><a class="dropdown-item" href="?key=reject&controller=petition&action=searchPetition">reject</a></li>
          </ul>
        </div>
        <div class="dropdown" style="padding-left: 40px;">
          <button class="btn dropdown-toggle" style="background-color:#171738;color: #FFF;" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
            Select Company
          </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
            <?php
            foreach ($company_list as $company) {
              echo "<li>"; ?>
              <a class="dropdown-item" href="?key=<?php echo "$company->name"; ?>&controller=petition&action=searchPetition"><?php echo "$company->name"; ?></a></li>
            <?php
            }
            ?>
          </ul>
        </div>
      </div>
    </form>
    <table class="table" id="table-header">
      <tr>
        <th><a href="?controller=petition&action=SortDate"><?php echo "วันที่ยื่นขอ"; ?></th>
        <th>ปีการศึกษา</th>
        <th>รหัสนิสิต</th>
        <th>ชื่อ</th>
        <th>บริษัทที่ฝึก</th>
        <th>สถานะ</th>
      </tr>
      <?php
      foreach ($requestform_List as $requestform) {
        $timestamp = strtotime($requestform->createDate);
        $new_dateformat = date("d-m-Y", $timestamp);
        echo "<tr><td>$new_dateformat</td>
                  <td>$requestform->academicYear</td>
                  <td>$requestform->requestID</td>
                  <td>$requestform->firstName  $requestform->lastName</td>
                  <td>$requestform->companyName</td>
                  <td>$requestform->statusName</td>" ?>
      <?php
      };
      ?>
    </table>

  </div>
</body>

<?php require_once("menuDown.php") ?>
<?php require_once("menuTop.php") ?>
<title>อนุมัติคำร้องการฝึกงาน</title>
<style>
  .search-box {
    margin: 10px 0px 30px 0px;
    display: flex;
    align-items: center;
    border-radius: 10px;
  }

  .search {
    padding: 10px 30px 10px 0px;
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
    <h3>อนุมัติคำร้องการฝึกงาน</h3>
    <hr style="width:100%;text-align:left;margin-left:0;">
    <form method="get" action="">
      <div class="search-box">

        <div>

          <div class="search">
            <button class="btn" type="submit" name="action" value="searchApprove"><i class="fas fa-search"></i></button>
            <input type="text" name="key" placeholder="ค้นหา" />
            <input type="hidden" name="controller" value="petition">
          </div>

        </div>
        
        <div class="dropdown" style="padding-left: 40px;">
          <button class="btn dropdown-toggle" style="background-color:#171738;color: #FFF;" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
            Select Company
          </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
            <?php
            foreach ($company_list as $company) {
              echo "<li>"; ?>
              <a class="dropdown-item" href="?key=<?php echo "$company->name"; ?>&controller=petition&action=searchApprove"><?php echo "$company->name"; ?></a></li>
            <?php
            }
            ?>
          </ul>
        </div>
        

        <div class="dropdown" style="padding-left: 40px;">
          <button class="btn dropdown-toggle" style="background-color:#171738;color: #FFF;" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
            ปีการศึกษา
          </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
            <li><a class="dropdown-item" href="?key=2564&controller=petition&action=searchApprove">2564</a></li>
            <li><a class="dropdown-item" href="?key=2563&controller=petition&action=searchApprove">2563</a></li>
            <li><a class="dropdown-item" href="?key=2562&controller=petition&action=searchApprove">2562</a></li>
          </ul>
        </div>
      </div>
    </form>

    <table class="table" id="table-header">
      <tr method="get" action="">
        <th><a href="?controller=petition&action=SortDate&key1=2" style="color: #000; text-decoration: none;"><i class="fas fa-chevron-down"></i><?php echo " วันที่ยื่นขอ"; ?></th>
        <th>ปีการศึกษา</th>
        <th>รหัสนิสิต</th>
        <th>ชื่อ</th>
        <th>บริษัทฝึกงาน</th>
        <th>สถานะ</th>
        <th>รายละเอียด</th>
      </tr>
      <?php
      foreach ($requestform_List as $requestform) {
        $timestamp = strtotime($requestform->createDate);
        $new_dateformat = date("d-m-Y", $timestamp);
        if ($requestform->statusName == "waiting") {
          echo "<tr><td>$new_dateformat</td>
                  <td>$requestform->academicYear</td>
                  <td>$requestform->requestID</td>
                  <td>$requestform->firstName  $requestform->lastName</td>"?>
                  <td><a style="text-decoration: none;color: #171738;" href='?controller=company&action=viewCompany&ID=<?php echo "$requestform->companyID"; ?>'><?php echo "$requestform->companyName"; ?></a></td>
                  <td><?php echo "$requestform->statusName"; ?></td>
          <td><a type="button" class="btn btn-primary" href=?controller=petition&action=approveView&<?php echo "ID=$requestform->id"; ?>><i class="fas fa-angle-double-right"></i></a></td>
      <?php
        }
      };
      ?>
    </table>

  </div>
</body>

<?php require_once("menuDown.php") ?>
<?php require_once("menuTop.php") ?>
<style>
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
            <h3>ประวัติการฝึกงาน</h3>
            <hr style="width:100%;text-align:left;margin-left:0;">
            <br>
            <div style="display: flex;">
                <label style="font-size:25px; margin-left: 0px;">ปีการศึกษา:</label>
                <div  style="margin-left: 15px;" class="form-group">
                    <select style=" color: #FFF; height: 40px; width: 100px; background-color: #171738;  border-radius: 5px;" >
                        <option >2564</option>
                        <option >2563</option>
                        <option >2562</option>
                        <option >2561</option>
                        <option >2560</option>
                        <option >2559</option>
                
                    </select>

                </div>
            </div>
            <br><br><br>
            <table class="table" id="table-header">
                  <tr>
                        <th>ลำดับ</th>
                        <th>รหัสนิสิต</th>
                        <th>ชื่อ</th>
                        <th>สถานประกอบการ</th>
                        <th>ดูเพิ่มเติม</th>
                  </tr>

                  <tr>
                        <td scope="row">1</td>
                        <td>622xxxxxx</td>
                        <td>นางสาวมาริน คิตะกาวะ</td>
                        <td> Drone Academy Thailand</td>
                        <td><a href='?controller=internshiphistory&action=detailInternshiphistory'><img src=https://upload.wikimedia.org/wikipedia/commons/thumb/0/0b/Search_Icon.svg/500px-Search_Icon.svg.png width=31 /></a></td>
                  </tr>
                  <tr>
                        <td scope="row">2</td>
                        <td>622xxxxxx</td>
                        <td>นางสาวคุรุมิ โทคิซากิ</td>
                        <td>บริษัท โกไฟว์ จำกัด</td>
                        <td><a href='?controller=internshiphistory&action=detailInternshiphistory'><img src=https://upload.wikimedia.org/wikipedia/commons/thumb/0/0b/Search_Icon.svg/500px-Search_Icon.svg.png width=31 /></a></td>
                  </tr>

            </table>

      </div>
</body>

<?php require_once("menuDown.php") ?>
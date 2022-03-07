
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
      <th>ลำดับ</th>
      <th>รหัสนิสิต</th>
      <th>ชื่อ</th>
      <th>ชั้นปี</th>
      <th>สถานะ</th>
    </tr>
    <tr>
      <td scope="row">1</td>
      <td>622xxxxxx</td>
      <td>นางสาวมาริน คิตะกาวะ</td>
      <td>3</td>
      <td><button type="button" class="btn btn-success">Approve</button></td>
    </tr>
    <tr>
      <td scope="row">2</td>
      <td>622xxxxxx</td>
      <td>นางสาวคุรุมิ โทคิซากิ</td>
      <td>3</td>
      <td><button type="button" class="btn btn-danger">Disapproved</button></td>
    </tr>
    <tr>
      <td scope="row">3</td>
      <td>622xxxxxx</td>
      <td>นายเคน คาเนกิ</td>
      <td>3</td>
      <td><button type="button" class="btn btn-success">Approve</button></td>
    </tr>
</table>

</div>
</body>

<?php require_once("menuDown.php") ?>
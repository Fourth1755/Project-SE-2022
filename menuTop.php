<style>
  /* The side navigation menu */
@import url('https://fonts.googleapis.com/css2?family=Prompt:wght@300&display=swap');
body{
    font-family:'Prompt', sans-serif;
    margin:0;
    background-color: rgb(240, 240, 240);
}
.sidenav {
    height: 100%;
    width: 70px;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #171738;
    overflow-x: hidden;
    padding-top: 20px;
    transition: 0.5s;
    display: flexbox;
}

/* ON HOVER */
.sidenav:hover{
   width: 250px;
   color: #f1f1f1;
}

/* The navigation menu links */
.sidenav a{
    padding: 14px 8px 14px 35px;
    text-decoration: none;
    font-size: 15px;
    color: #f1f1f1;
    display: flex;
    transition: 0.3ss;
    white-space: nowrap;  /* ไม่ขึ้นบรรทัดใหม่ */
}

.sidenav a:hover, .offcanvas a:focus{
    color: #f1f1f1;
    background-color: #C97B84;
}

.sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
}

#main {
    transition: margin-left .5s;
    padding: 20px;
}
.navbar{
    background-color: #C97B84;
    width: 100%;
    height: 55px;
    top: 0;
    left: 0;
    position: sticky;
    display: flex;
    justify-content: space-around;
    
    padding: 30px;
    font-size: 16px;
    color: #f1f1f1;
}
.navbar a{
    text-decoration: none;
    color: #f1f1f1;
    font-size: 18px;
    background-color: #171738;
}
.navbar a:hover{
    background-color: #000000;
    color: #C97B84;
}
.content-main{
    width:  100%;
    padding: 8px 100px 10px 180px;
    top: 0;
    left: 0;
}
.content-main h1{
    padding: 8px 8px 10px 150px;
}
.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 2;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 20px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #C97B84;
}

.dropdown:hover .dropdown-content {
  display: block;
}
</style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./fontawesome-free-5.15.4-web/css/all.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    
</head>
<body style="font-family: 'Prompt', sans-serif;">
    <div class="navbar">
        <div><p></p></div>
        <div><p>ระบบบริหารจัดการการฝึกงาน</p></div>
        <?php
        if (isset($_SESSION['firstname'])) {
          
        ?>
          <a class="btn" href="?controller=login&action=index"><i class="fas fa-sign-out-alt"></i> LOGOUT</a>
        <?php
        } else {
          echo "<a class='btn' href='?controller=login&action=index'>LOGIN</a>";
        }
        ?>
    </div>
    <div class="sidenav">
        <a href="?controller=profile&action=index">
        <i class="fas fa-user" style="color: #C97B84;"></i>
        <span style="padding: 0px 70px 0px 26px;"><?php echo $_SESSION['firstname'];?> <?php echo $_SESSION['lastname'];?></span></a>
        <hr style="width:100%;text-align:left;margin-left:0">
        <a href="?controller=announce&action=index"><i class="fas fa-bullhorn"></i><span style="padding-left: 26px;">ดูประกาศ</span></a>
        <a href="?controller=company&action=index"><i class="far fa-building"></i><span style="padding-left: 26px;">สถานประกอบการ</span></a>   
        <div class="dropdown"><a href="#"><i class="fas fa-file-alt"></i><span style="padding: 0px 70px 0px 26px;">คำร้องฝึกงาน</span><i class="fa fa-caret-down"></i></a>
            <div class="dropdown-content">
            <a href="?controller=petition&action=index"><span style="padding: 0px 70px 0px 26px;">ผลการอนุมัติฝึกงาน</span></a>
            <a href="?controller=petition&action=newPetition"><span style="padding: 0px 70px 0px 26px;">ยื่นคำร้องฝึกงาน</span></a>
            <a href="?controller=petition&action=approvePetition"><span style="padding: 0px 70px 0px 26px;">อนุมัติคำร้องขอฝึกงาน</span></a>
            <a href="?controller=company&action=newCompany"><span style="padding: 0px 70px 0px 26px;">เสนอสถานที่ฝึกงานใหม่</span></a>
            <a href="?controller=petition&action=indexSummaryPetition"><span style="padding: 0px 70px 0px 26px;">รายงานสรุปการอนุมัติฝึกงาน</span></a>
            </div>
        </div>
        <a href="?controller=uploadreport&action=index"><i class="fas fa-upload"></i><span style="padding-left: 26px;">อัพโหลดรายงาน</span></a>
        <a href="?controller=internshiphistory&action=index"><i class="fas fa-history"></i><span style="padding-left: 26px;">ประวัติการฝึกงาน</span></a>
        <a href="#"><i class="fas fa-poll"></i><span style="padding-left: 26px;">ผลการฝึกงาน</span></a>
        <div class="dropdown"><a href="#"><i class="fas fa-paste"></i><span style="padding: 0px 40px 0px 26px;">เอกสารการฝึกงาน</span><i class="fa fa-caret-down"></i></a>
            <div class="dropdown-content">
            <a href="?controller=document&action=IndexdownloadDocument"><span style="padding: 0px 70px 0px 18px;">โหลดเอกสารการฝึกงาน</span></a>
            <a href="?controller=document&action=IndexdownloadRequestInternship"><span style="padding: 0px 0px 0px 18px;">โหลดหนังสือขอความอนุเคราะห์</span></a>
            <a href="?controller=document&action=IndexuploadDocument"><span style="padding: 0px 70px 0px 18px;">อัพโหลดเอกสารฝึกงาน</span></a>
            </div>
        </div>
  </div>
  <div class="content-main">
      
      
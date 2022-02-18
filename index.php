<?php 
    //include('connection_connect.php');
    if(isset($_GET['controller'])&&isset($_GET['action'])){
        $controller = $_GET['controller'];
        $action =$_GET['action'];
    }
    else{
        $controller='pages';
        $action='home';
    }
    ?>
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
    padding-top: 50px;
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
    text-align: center;
    justify-content: center;
    align-items: center;
    display: flex;
    margin: auto;
    padding-top: 10px;
    font-size: 16px;
    color: #f1f1f1;
}
.content-main{
    width:  100%;
    padding: 8px 8px 10px 100px;
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

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: red;
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
    <title>Internship Management System</title>
    <link href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</head>
<body>
    <div class="navbar">
      ระบบบริหารจัดการการฝึกงาน
       
    </div>
    <div class="sidenav">
        <hr style="width:100%;text-align:left;margin-left:0">
        <a href="?controller=announce&action=index"><i class="fas fa-calendar-alt"></i><span style="padding-left: 26px;">ดูประกาศ</span></a>
        <a href="#"><i class="fas fa-book-reader"></i><span style="padding-left: 26px;">สถานประกอบการ</span></a>   
        <div class="dropdown"><a href="#"><i class="fas fa-dollar-sign"></i><span style="padding: 0px 70px 0px 26px;">คำร้องฝึกงาน</span><i class="fa fa-caret-down"></i></a>
            <div class="dropdown-content">
            <a href="?controller=item&action=index"><span style="padding: 0px 70px 0px 26px;">ยื่นคำร้องฝึกงาน</span></a>
            <a href="?controller=itemlist&action=index"><span style="padding: 0px 70px 0px 26px;">เสนอสถานที่ฝึกงานใหม่</span></a>
            <a href="?controller=necessities&action=index"><span style="padding: 0px 70px 0px 26px;">อนุมัติคำร้องขอฝึกงาน</span></a>
            <a href="?controller=videocall&action=index"><span style="padding: 0px 70px 0px 26px;">ผลการอนุมัติฝึกงาน</span></a>
            <a href="?controller=videocall&action=index"><span style="padding: 0px 70px 0px 26px;">รายงานสรุปการ อนุมัติฝึกงาน</span></a>
            </div>
        </div>
        <a href="#"><i class="fas fa-th-list"></i><span style="padding-left: 26px;">อัพโหลดรายงาน</span></a>
        <a href="#"><i class="fas fa-list-ul"></i><span style="padding-left: 26px;">ประวัติการฝึกงาน</span></a>
        <a href="#"><i class="fas fa-graduation-cap"></i><span style="padding-left: 26px;">ผลการฝึกงาน</span></a>
        <div class="dropdown"><a href="#"><i class="fas fa-dollar-sign"></i><span style="padding: 0px 40px 0px 26px;">เอกสารการฝึกงาน</span><i class="fa fa-caret-down"></i></a>
            <div class="dropdown-content">
            <a href="?controller=item&action=index"><span style="padding: 0px 70px 0px 18px;">โหลดเอกสารการฝึกงาน</span></a>
            <a href="?controller=itemlist&action=index"><span style="padding: 0px 0px 0px 18px;">โหลดหนังสือขอความอนุเคราะห์</span></a>
            <a href="?controller=necessities&action=index"><span style="padding: 0px 70px 0px 18px;">อัพโหลดเอกสารฝึกงาน</span></a>
            </div>
        </div>  
        
  </div>
  <div class="content-main">
        <br>
        <!-- <a href="?controller=pages&action=home">Home</a>
        <a href="?controller=anime&action=index">Anime</a> -->
        <?php require_once("routes.php") ?>
        <?php
            echo "controller=".$controller.",action= ".$action;
        ?>
  </div>
        <!-- <form method="POST" action="page2.php">
            <div>
                <input type="text" name="user"/>
            </div>    
            <br>
            <div>
                <input type="text" name="password"/>
            </div>
            <br>
            <button type="submit" name="action" value="login" class="btn btn-success">Login</button>
        </form> -->
        
       
</body>
</html>
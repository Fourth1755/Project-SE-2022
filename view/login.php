<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
<style>
body{
  margin: 0;
  font-family:'Prompt', sans-serif;
}
.logo-img {
  align-items: center;
  display: flex;
  justify-content: center;
  padding: 20px;
}
.logo-img img{
  width: 280px;
  height: 260px;
}
.container {
  padding: 16px;
}
span.psw {
  float: right;
  padding-top: 16px;
}
button:hover {
  opacity: 0.8;
}
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 5px;
  box-sizing: border-box;
}

input[type=submit], select {
  width: 100%;
  color: #171738;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 20px;
  cursor: pointer;
}
.form-login{
  width: 500px;
  padding: 40px;
  background-color: #FFCFCF;
  margin: 30px;
  border-radius: 20px;
}
.content-login{
  display: flex;
  justify-content: space-between;
}
#button-black{
  color : #FFF;
  background-color: #171738;
  border-radius: 15px;
  padding: 12px 15px 12px 15px;
}
#button-black:hover{
  color : #FFCFCF;
  background-color: #000;
  border-radius: 15px;
}
.form-bigimage{
  border-right: 400px solid transparent;
  height: 0;
  border-bottom: 800px solid #171738;
  width: 70%;
  color: #FFF;
  z-index: -1;
}
.logo-bigimg{
  z-index: 1;
}
.logo-bigimg img{
  height: 600px;
  width: 600px;
}
</style>
</head>
<body>
  <div class="content-login">
    <div class="form-bigimage">
    <h2>ระบบจัดการการฝึกงาน</h2>
    <div class="logo-bigimg">
    <img src="https://www.pngmart.com/files/5/Gears-PNG-Pic.png" alt="Cinque Terre">
    </div>
    </div>
    <div class="form-login">  
    <div class="logo-img">
    <img src="https://upload.wikimedia.org/wikipedia/th/a/a4/%E0%B8%84%E0%B8%93%E0%B8%B0%E0%B8%A7%E0%B8%B4%E0%B8%A8%E0%B8%A7%E0%B8%81%E0%B8%A3%E0%B8%A3%E0%B8%A1%E0%B8%A8%E0%B8%B2%E0%B8%AA%E0%B8%95%E0%B8%A3%E0%B9%8C_%E0%B8%81%E0%B8%B3%E0%B9%81%E0%B8%9E%E0%B8%87%E0%B9%81%E0%B8%AA%E0%B8%99_%E0%B8%A1%E0%B8%AB%E0%B8%B2%E0%B8%A7%E0%B8%B4%E0%B8%97%E0%B8%A2%E0%B8%B2%E0%B8%A5%E0%B8%B1%E0%B8%A2%E0%B9%80%E0%B8%81%E0%B8%A9%E0%B8%95%E0%B8%A3%E0%B8%A8%E0%B8%B2%E0%B8%AA%E0%B8%95%E0%B8%A3%E0%B9%8C.png" alt="Cinque Terre" width="400" height="300">
    </div>
    <form>
      <label for="uname"><b>บัญชีผู้ใช้เครือข่ายนนทรี</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>
    <label for="psw"><b>รหัสผ่าน</b></label>
    <input type="text" placeholder="Enter Password" name="psw" required>
    
    <div style="padding: 20px;display: flex;justify-content: space-between;">
      <div><input type="checkbox" checked="checked" name="remember"> Remember me</div>
       <div>ลืมรหัสผ่าน<a href="?controller=singup&action=index" style="text-decoration: none;"> password?</a></div>
    </div>
    <div style="padding: 5px;display: flex;justify-content: space-around;">
      <div><a class="btn" href="?controller=announce&action=index" id="button-black">กลับหน้าหลัก</a></div>
      <div><button class="btn" type="submit" href="?controller=announce&action=index" id="button-black">เข้าสู่ระบบ</button></div>
    </div>
    </form>
  </div>
  </div>
 
  
</body>
</html>











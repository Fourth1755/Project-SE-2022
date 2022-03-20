<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Internship Management System</title>
  <link href="./fontawesome-free-5.15.4-web/css/all.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
<style>
  @import url('https://fonts.googleapis.com/css2?family=Prompt:wght@300&display=swap');
body{
  margin: 0;
  font-family:'Prompt', sans-serif;
  background-color: #FFCFCF;
}
.logo-img {
  align-items: center;
  display: flex;
  justify-content: center;
  padding: 20px;
}
.logo-img img{
  width: 220px;
  height: 200px;
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
.login-input{
  background-color:#FFFF;
  display: flex;
  border-radius: 10px;  
}
.login-input input{
  width: 100%;
  padding: 10px;
  border: none;
  border-radius: 10px;
}
input[type=submit]{
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
  height: 100%;
  padding: 50px;
  background-color: #FFCFCF;
  
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
.logo-bigimg{
  z-index: 1;
}
.logo-bigimg img{
  height: 600px;
  width: 600px;
}
.announce-content{
  width: 75%;
  padding: 20px 70px 20px 70px;
  height: 720px;
  background-image: url("background.jpg");
  background-size: 1100px;
}
.announce-content-main{
  background-color: rgb(23, 23, 56,0.3);
  width: 100%;
  border-radius: 20px;
  
}
.announce-content-in{
  width: 100%;
  height: 600px;
  padding: 40px;
  overflow-x: hidden;
  overflow-y: scroll;
  border-radius: 20px;
  opacity:100%
}
.announce-header{
  padding:  10px 20px 6px 30px;
}
.announce-header h4{
  color: #FFF;
}
/* width */
::-webkit-scrollbar {
  width: 10px;
}

/* Track */
::-webkit-scrollbar-track {
  box-shadow: inset 0 0 5px grey; 
  border-radius: 10px;
}
 
/* Handle */
::-webkit-scrollbar-thumb {
  background: #FFFF; 
  border-radius: 10px;
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: DarkGrey; 
}

</style>
</head>
<body>
  <div class="content-login">
    <div class="announce-content">
      <div class="announce-content-main">
        
        <div class="announce-header">
          <h4>ข่าวสารการฝึกงาน</h4>
        </div>
        <div class="announce-content-in">
          <?php require_once("announce_announce.php") ?>
        </div>
      </div>
    
    </div>
    <div class="form-login">  
    <div class="logo-img">
    <img src="https://upload.wikimedia.org/wikipedia/th/a/a4/%E0%B8%84%E0%B8%93%E0%B8%B0%E0%B8%A7%E0%B8%B4%E0%B8%A8%E0%B8%A7%E0%B8%81%E0%B8%A3%E0%B8%A3%E0%B8%A1%E0%B8%A8%E0%B8%B2%E0%B8%AA%E0%B8%95%E0%B8%A3%E0%B9%8C_%E0%B8%81%E0%B8%B3%E0%B9%81%E0%B8%9E%E0%B8%87%E0%B9%81%E0%B8%AA%E0%B8%99_%E0%B8%A1%E0%B8%AB%E0%B8%B2%E0%B8%A7%E0%B8%B4%E0%B8%97%E0%B8%A2%E0%B8%B2%E0%B8%A5%E0%B8%B1%E0%B8%A2%E0%B9%80%E0%B8%81%E0%B8%A9%E0%B8%95%E0%B8%A3%E0%B8%A8%E0%B8%B2%E0%B8%AA%E0%B8%95%E0%B8%A3%E0%B9%8C.png" alt="Cinque Terre" width="400" height="300">
    </div>
    <form form method="get" action="">
    <label for="uname"><b>บัญชีผู้ใช้เครือข่ายนนทรี</b></label>
    <div class="login-input">
      <input type="email" placeholder="เช่น b63xxxxxxxx หรือ regxxx" name="uname" required>
    </div>
    <br>
    
    <label for="psw"><b>รหัสผ่าน</b></label>
    <div class="login-input">
      <input type="password" id="myInput" placeholder="Enter Password" name="psw" required>
      <button type="button" class="btn" onclick="myFunctionPass()">
      <i class="fas fa-eye-slash" id="togglePassword"></i></button>
    </div>
    <div style="padding: 20px;display: flex;justify-content: space-between;">
      <div><input type="checkbox" checked="checked" name="remember"> Remember me</div>
    </div>
    <div style="padding: 5px;display: flex;justify-content: space-around;">
      <div><a class="btn" href="?controller=announce&action=index" id="button-black">กลับหน้าหลัก</a></div>
      <div><button class="btn" type="submit" href="?controller=announce&action=index" id="button-black">เข้าสู่ระบบ</button></div>
    </div>
    </form>
  </div>
  </div>
 
  <script>
function myFunctionPass() {
  var togglePassword = document.getElementById("togglePassword");
  var x = document.getElementById("myInput");
  togglePassword.classList.toggle('fa-eye');
  if (x.type === "password") {
    x.type = "text";
    
  } else {
    x.type = "password";
    
  }
  togglePassword.classList.toggle('fa-eye-slash');
}
</script>
</body>
</html>











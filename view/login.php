<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<body>
<html>
<head>
<style>
img {
  border-radius: 5px;
  float: left;
  padding-left: 250px;
  justify-content: flex-end;
  align-items: flex-end;
}
</style>
</head>
<body>
    <h2>ระบบจัดการการฝึกงาน</h2>
    <img src="https://upload.wikimedia.org/wikipedia/th/a/a4/%E0%B8%84%E0%B8%93%E0%B8%B0%E0%B8%A7%E0%B8%B4%E0%B8%A8%E0%B8%A7%E0%B8%81%E0%B8%A3%E0%B8%A3%E0%B8%A1%E0%B8%A8%E0%B8%B2%E0%B8%AA%E0%B8%95%E0%B8%A3%E0%B9%8C_%E0%B8%81%E0%B8%B3%E0%B9%81%E0%B8%9E%E0%B8%87%E0%B9%81%E0%B8%AA%E0%B8%99_%E0%B8%A1%E0%B8%AB%E0%B8%B2%E0%B8%A7%E0%B8%B4%E0%B8%97%E0%B8%A2%E0%B8%B2%E0%B8%A5%E0%B8%B1%E0%B8%A2%E0%B9%80%E0%B8%81%E0%B8%A9%E0%B8%95%E0%B8%A3%E0%B8%A8%E0%B8%B2%E0%B8%AA%E0%B8%95%E0%B8%A3%E0%B9%8C.png" alt="Cinque Terre" width="400" height="300">
  </a>
</div>
<html>
<style>
.container {
  padding: 16px;
}
span.psw {
  float: right;
  padding-top: 16px;
}
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #171738;
  border-radius: 15px;

}
button {
  width: auto;
  padding: 10px 18px;
  background-color: #171738;
  color: white;
  border-radius: 15px;
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
  background-color: #FFCFCF;
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

div {
  border-radius: 5px;
  padding: 20px;
  background-color: white;
}
</style>

<body>

<div>
  
<div class="container">
  <div><div><div><div><div><div><div></div></div></div></div></div></div></div>
    <label for="uname"><b>บัญชีผู้ใช้เครือข่ายนนทรี</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label for="psw"><b>รหัสผ่าน</b></label>
    <input type="text" placeholder="Enter Password" name="psw" required>
        
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me <span class="psw">ลืมรหัสผ่าน<a href="?controller=singup&action=index"> password?</a></span>
    </label>
  </div>

  <div class="container">
  <button type="submit" href="?controller=announce&action=index">เข้าสู่ระบบ</button>
  <button type="button" class="cancelbtn" href="?controller=announce&action=index">กลับหน้าหลัก</button>
</form>
</div>
</body>
</html>
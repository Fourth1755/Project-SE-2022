<!DOCTYPE html>
<html lang="en">
<head>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
<?php
    echo "<script>";
    echo "Swal.fire({
        icon: 'warning',
        title: 'ไม่สามารถเข้าสู่ระบบได้',
        text: 'บัญชีผู้ใช้เครือข่ายนนทรี หรือ รหัสผ่านไม่ถูกต้อง',
        })";
    echo "</script>";
    require_once('view/login.php');
?>
</body>
</html>
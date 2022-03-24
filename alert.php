<!DOCTYPE html>
<html lang="en">
<head>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
<?php
    echo "<script>";
    echo "Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: 'Something went wrong!',
        timer: 2000
        })";
    echo "</script>";
    require_once('view/login.php');
    header('location: http://localhost:8081/Project-SE-2022/');
?>
</body>
</html>
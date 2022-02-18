<?php
    //เชื่อมต่อ server
    $severname = "localhost";
    $username = "root";
    $password ="";
    $dbname = "animedb";

    $conn = mysqli_connect($severname,$username,$password);
    if($conn->connect_error){
        die("Connection failed: ".$conn->connect_error);
    }
    else{
        echo "Successfully connected to server <br>";
    }
    if(!$conn->select_db($dbname)){
        echo $conn->connect_error;
    }
    else{
        echo "Successfully connected to databse <br>";
    }
    //เลือกฐานข้อมูลมาแสดงผล

    // $sql = "select *from studio";
    // $result =$conn->query($sql);
    // echo "num rows =".$result->num_rows."<br>";
    //     while($row=$result->fetch_assoc()){
    //         echo "Studio: ".$row["Studio_Name"]."<br>";
    //  
    //ไว้เพิ่มค่าในตาราง
    // for($i =0;$i<=30;$i++){
    //     $sql.="INSERT INTO yearanime (Year_Num)
    //     VALUES (2000+$i);";
    // }
    // if($conn->multi_query($sql)===TRUE){
    //     echo "New records created successfully";
    // }
    // else{
    //     echo "Error ".$sql."<br>".$conn->error;
    // }
?>
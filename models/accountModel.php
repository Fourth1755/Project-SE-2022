<?php
    class Account{
        public $username,$password,$position,$firstName,$lastName,$academicYear,$imagePath;
        public function __construct($username,$password,$position,$firstName,$lastName,$academicYear,$imagePath){
            $this->username=$username;
            $this->password=$password;
            $this->position=$position;
            $this->firstName=$firstName;
            $this->lastName=$lastName;
            $this->academicYear=$academicYear;
            $this->imagePath=$imagePath;
        }
        public static function getAll(){
            $userList=[];
            require("connection_connect.php");
            $sql="SELECT * FROM user";
            $result=$conn->query($sql);
            while($my_row = $result->fetch_assoc()){
                $username=$my_row["username"];
                $password=$my_row["password"];
                $position=$my_row["position"];
                $firstName=$my_row["firstName"];
                $lastName=$my_row["lastName"];
                $academicYear=$my_row["academicYear"];
                $imagePath=$my_row["imagePath"];
                $userList[]=new Account($username,$password,$position,$firstName,$lastName,$academicYear,$imagePath);
            }
            require("connection_close.php");
            return $userList;
        }
    }
?>
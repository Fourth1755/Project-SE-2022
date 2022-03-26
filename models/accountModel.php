<?php
class Account
{
    public $username;
    public $password;
    public $position;
    public $firstName;
    public $lastName;
    public $academicYear;
    public $imagePath;
    public $token = false;

    public function __construct($username, $password, $position, $firstName, $lastName,$academicYear,$imagePath)
    {
        $this->username = $username;
        $this->password = $password;
        $this->position = $position;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->academicYear = $academicYear;
        $this->imagePath = $imagePath;
    }

    public static function login($baseUsername, $basePassword)
    {
        require("connection_connect.php");
        $sql = "SELECT * FROM user WHERE username = '$baseUsername'";
        $result = $conn->query($sql);
        $my_row = $result->fetch_assoc();
        if (isset($my_row["username"])) {
            $username = $my_row["username"];
            $password = $my_row["password"];
            $position = $my_row["position"];
            $firstName = $my_row["firstName"];
            $lastName = $my_row["lastName"];
            $academicYear = $my_row["academicYear"];
            $imagePath = $my_row["imagePath"];
            $account = new Account($username, $password, $position, $firstName, $lastName,$academicYear,$imagePath);
            require("connection_close.php");
            if ($account != null) {
                if ($account->username == $baseUsername && $account->password == $basePassword) {
                    $account->token = true;
                    return $account;
                } else {
                    require("connection_close.php");
                    $account = new Account(0, "null", "null", "null", "null", "null", "null");
                    $account->token = 0;
                    return $account;
                }
            }
        } else {
            require("connection_close.php");
            $account = new Account(0, "null", "null", "null", "null", "null", "null");
            $account->token = 0;
            return $account;
        }
    }

    public static function get($id){
        require("connection_connect.php");
        $sql = "SELECT * FROM user WHERE username = '$id'";
        $result = $conn->query($sql);
        $my_row = $result->fetch_assoc();
        $username = $my_row["username"];
        $password = $my_row["password"];
        $position = $my_row["position"];
        $firstName = $my_row["firstName"];
        $lastName = $my_row["lastName"];
        $academicYear = $my_row["academicYear"];
        $imagePath = $my_row["imagePath"];
        require("connection_close.php");
        $account = new Account($username, $password, $position, $firstName, $lastName,$academicYear,$imagePath);
        $account->token = true;
        return $account;
    }
}
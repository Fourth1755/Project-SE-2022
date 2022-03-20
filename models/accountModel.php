<?php
class Account
{
    public $username;
    public $password;
    public $position;
    public $firstName;
    public $lastName;
    public $token = false;

    public function __construct($username, $password, $position, $firstName, $lastName)
    {
        $this->username = $username;
        $this->password = $password;
        $this->position = $position;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    public static function signIn($baseUsername, $basePassword)
    {
        require("connection_connect.php");
        $sql = "SELECT * FROM account WHERE username = '$baseUsername'";
        $result = $conn->query($sql);
        $my_row = $result->fetch_assoc();
        if (isset($my_row["id"])) {
            $username = $my_row["username"];
            $password = $my_row["password"];
            $position = $my_row["position"];
            $firstName = $my_row["firstName"];
            $lastName = $my_row["lastName"];
            $account = new Account($username, $password, $position, $firstName, $lastName);
            require("connection_close.php");
            if ($account != null) {
                if ($account->username == $baseUsername && $account->password == $basePassword) {
                    $account->token = true;
                    return $account;
                } else {
                    require("connection_close.php");
                    $account = new Account(0, "null", "null", "null", "null");
                    $account->token = 0;
                    return $account;
                }
            }
        } else {
            require("connection_close.php");
            $account = new Account(0, "null", "null", "null", "null");
            $account->token = 0;
            return $account;
        }
    }

    public static function get($username)
    {
        require("connection_connect.php");
        $sql = "SELECT * FROM account WHERE username = '$username'";
        $result = $conn->query($sql);
        $my_row = $result->fetch_assoc();
        $username = $my_row["username"];
        $password = $my_row["password"];
        $position = $my_row["position"];
        $firstName = $my_row["firstName"];
        $lastName = $my_row["lastName"];
        require("connection_close.php");
        $account = new Account($username, $password, $position, $firstName, $lastName);
        $account->token = true;
        return $account;
    }
}
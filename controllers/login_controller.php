<?php
    class LoginController
        {
            public function index()
            {
                require_once('view/login.php');
            }
        
            public function login()
            {
                $baseUsername = $_GET['username'];
                $basePassword = $_GET['password'];
        
                $account = Account::login($baseUsername, $basePassword);
                $token = $account->token;
                if ($token == 1) {
                    
                    $_SESSION['firstname'] = $account->firstName;
                    $_SESSION['lastname'] = $account->lastName;
                    $_SESSION['token'] = "1";
                    $_SESSION['accountId'] = $account->username;
        
                    require_once('view/home.php');
                }
                else{
                    echo "<script>";
                    echo "alert(\" user หรือ  password ไม่ถูกต้อง\");"; 
                    echo "</script>";
                    LoginController::index();
                }
            }
        
            public function logout()
            {
                unset($_SESSSION['firstname']); // clear session
                unset($_SESSION['accountId']);
                session_destroy();
                header("Location: login.php");
            }
        }
        
?>
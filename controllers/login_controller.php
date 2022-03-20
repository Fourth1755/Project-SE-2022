<?php
    class PagesController
        {
            public function index()
            {
                require_once('views/login.php');
            }
        
            public function login()
            {
                $baseUsername = $_GET['username'];
                $basePassword = $_GET['password'];
        
                $account = Account::login($baseUsername, $basePassword);
                $token = $account->token;
                if ($token == 1) {
                    $_SESSION['firstname'] = $account->firstname;
                    $_SESSION['token'] = "1";
                    $_SESSION['accountId'] = $account->username;
                }
                header("Location: index.php");
            }
        
            public function logout()
            {
                session_destroy();
                header("Location: login.php");
            }
        }
        
?>
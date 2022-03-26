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
                    $requestform_List=Requestform::getAll();
                    $requestUser=[];
                    foreach($requestform_List as $request){
                        if($request->requestID==$account->username){
                            if($request->statusName=='approve'){
                                $status="approve";
                                break;
                            }
                            $status="waiting";
                        }
                        $status="waiting";
                    }
                    $_SESSION['firstname'] = $account->firstName;
                    $_SESSION['lastname'] = $account->lastName;
                    $_SESSION['token'] = "1";
                    $_SESSION['username'] = $account->username;
                    $_SESSION['position'] =$account->position;
                    $_SESSION['statusName'] =$status;
                    require_once("./view/announce/index_announce.php");
                }
                else{
                    //LoginController::index();
                    require_once('alertLogin.php');
                }
            }
        
            public function logout()
            {
                session_destroy();
                header("Location: login.php");
            }
        }
        
?>
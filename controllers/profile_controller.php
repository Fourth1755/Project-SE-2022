<?php
     class ProfileController{
        public function index(){
            $id =$_SESSION['username'];
            $account = Account::get($id);
            $requestform_List=Requestform::getAll();
            $requestUser=[];
            foreach($requestform_List as $request){
                if($request->requestID==$id){
                    array_push($requestUser,$request);
                }
            }
            require_once("./view/profile.php");
        }
        public function profile2(){
            $id =$_SESSION['username'];
            $account = Account::get($id);
            $requestform_List=Requestform::getAll();
            $requestUser=[];
            foreach($requestform_List as $request){
                if($request->requestID==$id){
                    array_push($requestUser,$request);
                }
            }
            require_once("./view/profileT.php");
        }
        public function viewRequest(){
            $id=$_GET['ID'];
            $requestform=Requestform::get($id);
            require_once("./view/profile_view.php");
        }
    }
?>
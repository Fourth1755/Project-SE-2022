<?php
     class ProfileController{
        public function index(){
            //$anime_list=Anime::getAll();
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
            //$anime_list=Anime::getAll();
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
    }
?>
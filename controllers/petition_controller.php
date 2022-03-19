<?php
     class PetitionController{
        public function index(){
            //$anime_list=Anime::getAll();
            $requestform_List=Requestform::getAll();
            require_once("./view/petition/index_petition.php");
        }
        public function newPetition(){
            $company_list=Company::getAll();
            require_once("./view/petition/newpetition_petition.php");
        }
        public function addPetition(){
            $requestID=$_GET['requestID'];
            $phoneNumber=$_GET['phoneNumber'];
            $facebookName=$_GET['facebookName'];
            $positionRequest=$_GET['positionRequest'];
            $agentName=$_GET['agentName'];
            $agentPosition=$_GET['agentPosition'];
            $HR_Name=$_GET['HR_Name'];
            $HR_PhoneNamber=$_GET['HR_PhoneNamber'];
            $HR_Email=$_GET['HR_Email'];
            $startDate=$_GET['startDate'];
            $endDate=$_GET['endDate'];
            $companyID=$_GET['companyID'];
            Requestform::add($requestID,$phoneNumber,$facebookName,$positionRequest,
            $agentName,$agentPosition,$HR_Name,$HR_PhoneNamber,$HR_Email,$startDate,$endDate,$companyID);
            PetitionController::index();
        }

        public function searchPetition(){
            $key = $_GET['key'];
            $requestform_List = Requestform::search($key);
            //echo "search:".$key;
            require_once("./view/petition/index_petition.php");
        }

        public function searchPetitionDate(){
            $requestform_List = Requestform::searchDate();
            //echo "search:".$key;
            require_once("./view/petition/index_petition.php");
        }


        public function indexSummaryPetition(){
            
            require_once("./view/petition/index_summaryPetition.php");
        }
        public function approvePetition(){
            $requestform_List=Requestform::getAll();
            require_once("./view/petition/approve_petition.php");
        }
        public function approveView(){
            $id=$_GET['ID'];
            $requestform=Requestform::get($id);
            require_once('./view/petition/approveview_petition.php');
        }
        public function approveApprove(){
            $id=$_GET['ID'];
            $status="approve";
            $approverID=$_GET['approverID'];
            PetitionController::index();
        }
        public function approveReject(){
            $id=$_GET['ID'];
            $status="reject";
            $approverID=$_GET['approverID'];
            PetitionController::index();
        }
        public function newCompany(){

            require_once('./view/petition/newcompany_petition.php');
        }
        public function addCompany(){

        }
    }
?>
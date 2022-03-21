<?php
     class PetitionController{
        public function index(){
            //$anime_list=Anime::getAll();
            $requestform_List=Requestform::getAll();
            $company_list=Company::getAll();
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

            $today = date("Y-m-d");
            $strtoday = substr($today,5,2);
            $inttoday = (int)$strtoday;
            if($inttoday <= 5){
                $today = (int)$today;
                $inttoday = $today + 542;
                $academicYear = (string)$inttoday;
                Requestform::add($requestID,$phoneNumber,$facebookName,$positionRequest,
                $agentName,$agentPosition,$HR_Name,$HR_PhoneNamber,$HR_Email,$startDate,$endDate,$companyID,$academicYear);
                //PetitionController::index();
                //บรรทัดที่ 38 ห้ามลบ ดรีมต้องใช้
                //header('location: http://localhost:8081/Project-SE-2022/?controller=petition&action=index');
                header('location: http://localhost:/Project-SE-2022/?controller=petition&action=index');
            }
            else{
                $today = (int)$today;
                $inttoday = $today + 543;
                $academicYear = (string)$inttoday;
                Requestform::add($requestID,$phoneNumber,$facebookName,$positionRequest,
                $agentName,$agentPosition,$HR_Name,$HR_PhoneNamber,$HR_Email,$startDate,$endDate,$companyID,$academicYear);
                //PetitionController::index();
                //บรรทัดที่ 49 ห้ามลบ ดรีมต้องใช้
                //header('location: http://localhost:8081/Project-SE-2022/?controller=petition&action=index');
                header('location: http://localhost:/Project-SE-2022/?controller=petition&action=index');
            }
            
        }

        public function searchPetition(){
            $key = $_GET['key'];
            $company_list=Company::getAll();
            $requestform_List = Requestform::search($key);
            //echo "search:".$key;
            require_once("./view/petition/index_petition.php");
        }
        public function SortDate(){
            $key = $_GET['key1'];
            $company_list=Company::getAll();
            $requestform_List = Requestform::SortDate();
            if($key == "1"){
                require_once("./view/petition/index_petition.php");
            }
            else{
                require_once("./view/petition/approve_petition.php");
            }
            
        }

        public function searchApprove(){
            $key = $_GET['key'];
            $requestform_List = Requestform::searchApprove($key);
            //echo "search:".$key;
            require_once("./view/petition/approve_petition.php");
        }

        public function indexSummaryPetition(){
            
            require_once("./view/petition/index_summaryPetition.php");
        }
        public function approvePetition(){
            $requestform_List=Requestform::getAll();
            $company_list=Company::getAll();
            require_once("./view/petition/approve_petition.php");
        }
        public function approveView(){
            $id=$_GET['ID'];
            $requestform=Requestform::get($id);
            require_once('./view/petition/approveview_petition.php');
        }
        public function approveApprove(){
            $id=$_GET['ID'];
            $requestID=$_GET['requestID'];
            $statusName="approve";
            $approverID=$_GET['approverID'];
            Requestform::approve($id, $requestID, $approverID, $statusName,NULL);
            PetitionController::approvePetition();
        }
        public function approveReject(){
            $id=$_GET['ID'];
            $requestID=$_GET['requestID'];
            $statusName="reject";
            $approverID=$_GET['approverID'];
            $reasonReject=$_GET['reasonReject'];
            Requestform::approve($id, $requestID, $approverID, $statusName,$reasonReject);
            PetitionController::approvePetition();
        }
        
    }

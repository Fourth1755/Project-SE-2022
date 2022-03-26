<?php
     class CompanyController{
        public function index(){
            $company_list=Company::getAll();
            require_once("./view/company/index_company.php");
        }
        public function newCompany(){

            require_once('./view/company/newcompany_petition.php');
        }
        public function viewCompany(){
            $id=$_GET['ID'];
            $company=Company::get($id);
            require_once('./view/company/view_company.php');
        }
        public function addCompany(){
            $name=$_GET['name'];
            $address=$_GET['address'];
            $type=$_GET['type'];
            $phoneNumber=$_GET['phoneNumber'];
            $faxNumber=$_GET['faxNumber'];
            $department=$_GET['department'];
            $payPerDay=$_GET['payPerDay'];
            $agentName=$_GET['agentName'];
            $agentPosition=$_GET['agentPosition'];
            $HR_Name=$_GET['HR_Name'];
            $HR_Position=$_GET['HR_Position'];
            $HR_PhoneNamber=$_GET['HR_PhoneNamber'];
            $requestPosition=$_GET['requestPosition'];
            $jobDescription=$_GET['jobDescription'];
            $amountPerson=$_GET['amountPerson'];
            $requiredSkill=$_GET['requiredSkill'];
            $startDate=$_GET['startDate'];
            $endDate=$_GET['endDate'];
            Company::add($name,$address,$type,$phoneNumber,$faxNumber,$department,$payPerDay,$agentName,$agentPosition,$HR_Name,
            $HR_Position,$HR_PhoneNamber,$requestPosition,$jobDescription,$amountPerson,$requiredSkill,$startDate,$endDate);
            //CompanyController::index();
            //บรรทัดที่ 39 ห้ามลบ ดรีมต้องใช้
            //header('location: http://localhost:8081/Project-SE-2022/?controller=company&action=index');
            header('location: http://localhost:/Project-SE-2022/?controller=company&action=index');
        }
        public function indexcompanyDetail(){
            require_once("./view/company/index_companyDetail.php");
        }
        public function updatecompanyDetailPage1(){
            require_once("./view/company/update_companyPage1.php");
        }
        public function updatecompanyDetailPage2(){
            require_once("./view/company/update_companyPage2.php");
        }
        public function updatecompanyDetailPage3(){
            require_once("./view/company/update_companyPage3.php");
        }
        
    }
?>
<?php
     class CompanyController{
        public function index(){
            //$company_list=Company::getAll();
            require_once("./view/company/index_company.php");
        }
        public function newCompany(){

            require_once('./view/petition/newcompany_petition.php');
        }
        public function addCompany(){

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
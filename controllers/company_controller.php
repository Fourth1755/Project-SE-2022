<?php
     class CompanyController{
        public function index(){
            //$company_list=Company::getAll();
            require_once("./view/company/index_company.php");
        }
        public function indexcompanyDetail(){
            
            require_once("./view/company/index_companyDetail.php");
        }
    }
?>
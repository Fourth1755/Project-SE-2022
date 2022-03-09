<?php
     class PetitionController{
        public function index(){
            //$anime_list=Anime::getAll();
            $requestform_List=Requestform::getAll();
            require_once("./view/petition/index_petition.php");
        }
        public function newpetition(){
            $company_list=Company::getAll();
            require_once("./view/petition/newpetition_petition.php");
        }
        public function indexSummaryPetition(){
            
            require_once("./view/petition/index_summaryPetition.php");
        }
        
    }
?>
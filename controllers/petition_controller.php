<?php
     class PetitionController{
        public function index(){
            //$anime_list=Anime::getAll();
            $requestform_List=Anime::getAll();
            require_once("./view/petition/index_petition.php");
        }
        public function newpetition(){
            
            require_once("./view/petition/newpetition_petition.php");
        }
    }
?>
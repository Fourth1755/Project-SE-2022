<?php
     class InternshiphistoryController{
        public function index(){
            //$anime_list=Anime::getAll();
            require_once("./view/internshiphistory/index_internshiphistory.php");
        }

        public function detailInternshiphistory(){
            //$anime_list=Anime::getAll();
            require_once("./view/internshiphistory/detail_internshiphistory.php");
        }
    }
?>
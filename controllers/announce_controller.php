<?php
     class AnnounceController{
        public function index(){
            //$anime_list=Anime::getAll();
            require_once("./view/announce/index_announce.php");
        }
        public function addAnnounce(){
            require_once("./view/announce/add_announce.php");
        }


    }
?>
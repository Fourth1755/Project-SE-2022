<?php
    class PagesController{
        public function home(){
            require_once('view/home.php');
        }
        public function error(){
            require_once('view/error.php');
        }
        public function login(){
            require_once('view/login.php');
        }
    }
?>
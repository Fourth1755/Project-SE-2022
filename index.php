<?php 
    //include('connection_connect.php');
    if(isset($_GET['controller'])&&isset($_GET['action'])){
        $controller = $_GET['controller'];
        $action =$_GET['action'];
    }
    //else{
      //  $controller='pages';
        //$action='home';
    //}
    else{
        $controller='login';
        $action='index';
    }
    session_start();
    ?>
        <?php  require_once("routes.php") ?>    
        <!-- <a href="?controller=pages&action=home">Home</a>
        <a href="?controller=anime&action=index">Anime</a> -->
        
       
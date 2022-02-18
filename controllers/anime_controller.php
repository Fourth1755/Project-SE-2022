<?php
     class AnimeController{
        public function index(){
            $anime_list=Anime::getAll();
            require_once('view/anime/index_anime.php');
        }
        public function newAnime(){
            $studio_list=Studio::getAll();
            require_once('view/anime/newAnime.php');
        }
        public function addAnime(){
            $name=$_GET['name'];
            $episode=$_GET['episode'];
            $aried=$_GET['aried'];
            $studioID=$_GET['studioID'];
            $rating=$_GET['rating'];
            $year=$_GET['year'];
            $season=$_GET['season'];
            Anime::add($name,$episode,$aried,$studioID,$rating,$year,$season);
            AnimeController::index();
        }
        public function search(){
            $key=$_GET['key'];
            $anime_list=Anime::search($key);
            require_once('view/anime/index_anime.php');
        }
        public function updateForm(){
            $id=$_GET['animeID'];
            $anime=Anime::get($id);
            $studio_list=Studio::getAll();
            require_once('view/anime/updateForm.php');
        }
        public function update(){
            $id=$_GET['animeID'];
            $name=$_GET['name'];
            $episode=$_GET['episode'];
            $aried=$_GET['aried'];
            $studioID=$_GET['studioID'];
            $rating=$_GET['rating'];
            $year=$_GET['year'];
            $season=$_GET['season'];
            Anime::update($id,$name,$episode,$aried,$studioID,$rating,$year,$season);
            AnimeController::index();
        }
    }
?>
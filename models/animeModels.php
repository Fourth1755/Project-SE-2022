<?php
    class Anime{
        public $id;
        public $name;
        public $episode;
        public $aried;
        public $studioID;
        public $studioName;
        public $rating;
        public $year;
        public $season;
        public function __construct($id,$name,$episode,$aried,$studioID,$studioName,$rating,$year,$season){
            $this->id=$id;
            $this->name=$name;
            $this->episode=$episode;
            $this->aried=$aried;
            $this->studioID=$studioID;
            $this->studioName=$studioName;
            $this->rating=$rating;
            $this->year=$year;
            $this->season=$season;
        }
        public static function get($id){
            require("connection_connect.php");
            $sql="SELECT * FROM anime NATURAL JOIN studio WHERE animeID='$id' ";
            $result=$conn->query($sql);
            $my_row=$result->fetch_assoc();
            $id=$my_row["animeID"];
            $name=$my_row["animeName"];
            $episode=$my_row["animeEpisode"];
            $aried=$my_row["animeAried"];
            $studioID=$my_row["studioID"];
            $studioName=$my_row["studioName"];
            $rating=$my_row["animeRating"];
            $year=$my_row["animeYear"];
            $season=$my_row["animeSeason"];
            require("connection_close.php");
            return new Anime($id,$name,$episode,$aried,$studioID,$studioName,$rating,$year,$season);
        }
        public static function getAll(){
            $animeList=[];
            require("connection_connect.php");
            $sql="SELECT * FROM anime NATURAL JOIN studio";
            $result=$conn->query($sql);
            while($my_row = $result->fetch_assoc()){
                $id=$my_row["animeID"];
                $name=$my_row["animeName"];
                $episode=$my_row["animeEpisode"];
                $aried=$my_row["animeAried"];
                $studioID=$my_row["studioID"];
                $studioName=$my_row["studioName"];
                $rating=$my_row["animeRating"];
                $year=$my_row["animeYear"];
                $season=$my_row["animeSeason"];
                $animeList[]=new Anime($id,$name,$episode,$aried,$studioID,$studioName,$rating,$year,$season);
            }
            require("connection_close.php");
            return $animeList;
        }
        public static function search($key){
            require("connection_connect.php");
            $sql="SELECT * FROM anime NATURAL JOIN studio WHERE (animeName LIKE'%$key%' OR animeAried LIKE'%$key%' 
            OR animeEpisode LIKE'%$key%'OR studioName LIKE'%$key%'OR animeYear LIKE'%$key%'OR animeSeason LIKE'%$key%')";
            $result=$conn->query($sql);
            while($my_row = $result->fetch_assoc()){
                $id=$my_row["animeID"];
                $name=$my_row["animeName"];
                $episode=$my_row["animeEpisode"];
                $aried=$my_row["animeAried"];
                $studioID=$my_row["studioID"];
                $studioName=$my_row["studioName"];
                $rating=$my_row["animeRating"];
                $year=$my_row["animeYear"];
                $season=$my_row["animeSeason"];
                $animeList[]=new Anime($id,$name,$episode,$aried,$studioID,$studioName,$rating,$year,$season);
            }
            require("connection_close.php");
            return $animeList;
        }
        public static function add($name,$episode,$aried,$studioID,$rating,$year,$season){
            require("connection_connect.php");
            $sql ="INSERT INTO anime (animeName,animeEpisode,animeAried,studioID,animeRating,animeYear,animeSeason)
            VALUES('$name','$episode','$aried','$studioID','$rating','$year','$season')";
            $result=$conn->query($sql);
            require("connection_close.php");
            return "Add success $result rows";
        }
        public static function update($id,$name,$episode,$aried,$studioID,$rating,$year,$season){
            require("connection_connect.php");
            $sql="UPDATE anime SET animeName='$name',animeEpisode='$episode',animeAried='$aried',studioID='$studioID',
            animeRating='$rating',animeYear='$year',animeSeason='$season' WHERE animeID='$id' ";
            $result=$conn->query($sql);
            require("connection_close.php");
            return "Update success $result rows";
        }
        public static function delete($id){
            require("connection_connect.php");
            $sql="DELETE FROM anime WHERE animeID='$id'";
            $result=$conn->query($sql);
            require("connection_close.php");
            return "Delete success $result rows";
        }
    }
?>
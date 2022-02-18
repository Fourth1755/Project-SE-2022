<?php
    class Studio{
        public $id,$name;
        public function __construct($id,$name){
            $this->id=$id;
            $this->name=$name;
        }
        public static function getAll(){
            $studioList=[];
            require("connection_connect.php");
            $sql="SELECT * FROM studio";
            $result=$conn->query($sql);
            while($my_row = $result->fetch_assoc()){
                $studioID=$my_row["studioID"];
                $studioName=$my_row["studioName"];
                $studioList[]=new Studio($studioID,$studioName);
            }
            require("connection_close.php");
            return $studioList;
        }
    }
?>
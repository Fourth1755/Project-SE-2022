<?php
    class Company{
        public $id,$name,$address,$type,$phoneNumber,$faxNumber,$requiredSkill;
        public function __construct($id,$name,$address,$type,$phoneNumber,$faxNumber,$requiredSkill){
            $this->id=$id;
            $this->name=$name;
            $this->address=$address;
            $this->type=$type;
            $this->phoneNumber=$phoneNumber;
            $this->faxNumber=$faxNumber;
            $this->requiredSkill=$requiredSkill;
        }
        public static function getAll(){
            $companyList=[];
            require("connection_connect.php");
            $sql="SELECT * FROM company";
            $result=$conn->query($sql);
            while($my_row = $result->fetch_assoc()){
                $id=$my_row["ID"];
                $name=$my_row["name"];
                $address=$my_row["address"];
                $type=$my_row["type"];
                $phoneNumber=$my_row["phoneNumber"];
                $faxNumber=$my_row["faxNumber"];
                $requiredSkill=$my_row["requiredSkill"];
                $companyList[]=new Company($id,$name,$address,$type,$phoneNumber,$faxNumber,$requiredSkill);
            }
            require("connection_close.php");
            return $companyList;
        }
    }
?>
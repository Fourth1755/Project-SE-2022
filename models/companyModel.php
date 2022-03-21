<?php
    class Company{
        public $id,$name,$address,$type,$phoneNumber,$faxNumber,$agentName,$agentPosition,$HR_Name,$HR_Position,$HR_PhoneNamber,
        $requestPosition,$jobDescription,$amountPerson,$requiredSkill,$startDate,$endDate;
        public function __construct(
            $id,
            $name,
            $address,
            $type,
            $phoneNumber,
            $faxNumber,
            $agentName,
            $agentPosition,
            $HR_Name,
            $HR_Position,
            $HR_PhoneNamber,
            $requestPosition,
            $jobDescription,
            $amountPerson,
            $requiredSkill,
            $startDate,
            $endDate)
            {
            $this->id=$id;
            $this->name=$name;
            $this->address=$address;
            $this->type=$type;
            $this->phoneNumber=$phoneNumber;
            $this->faxNumber=$faxNumber;
            $this->agentName=$agentName;
            $this->agentPosition=$agentPosition;
            $this->HR_Name=$HR_Name;
            $this->HR_Position=$HR_Position;
            $this->HR_PhoneNamber=$HR_PhoneNamber;
            $this->requestPosition=$requestPosition;
            $this->jobDescription=$jobDescription;
            $this->amountPerson=$amountPerson;
            $this->requiredSkill=$requiredSkill;
            $this->startDate=$startDate;
            $this->endDate=$endDate;
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
                $companyList[]=new Company($id,$name,$address,$type,$phoneNumber,$faxNumber,$agentName,$agentPosition,$HR_Name,$HR_Position,$HR_PhoneNamber,
                $requestPosition,$jobDescription,$amountPerson,$requiredSkill,$startDate,$endDate);
            }
            require("connection_close.php");
            return $companyList;
        }
        public static function add(
            $name,
            $address,
            $type,
            $phoneNumber,
            $faxNumber,
            $agentName,
            $agentPosition,
            $HR_Name,
            $HR_Position,
            $HR_PhoneNamber,
            $requestPosition,
            $jobDescription,
            $amountPerson,
            $requiredSkill,
            $startDate,
            $endDate
        ) {
            require("connection_connect.php");
            $sql = "INSERT INTO company (name,address,type,phoneNumber,faxNumber,agentName,agentPosition,HR_Name
                HR_Position,HR_PhoneNamber,requestPosition,jobDescription,amountPerson,requiredSkill,startDate,endDate)
                VALUES('$name','$address','$type','$phoneNumber','$faxNumber','$agentName','$agentPosition','$HR_Name',
                '$HR_Position','$HR_PhoneNamber','$requestPosition','$jobDescription','$amountPerson','$requiredSkill','$startDate','$endDate')";
            $result = $conn->query($sql);
            require("connection_close.php");
            return "Add success $result rows";
        }
    }
?>
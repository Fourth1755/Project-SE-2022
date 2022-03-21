<?php
    class Company{
        public $id,$name,$address,$type,$phoneNumber,$faxNumber,$department,$payPerDay,$agentName,$agentPosition,$HR_Name,$HR_Position,$HR_PhoneNamber,
        $requestPosition,$jobDescription,$amountPerson,$getPerson,$requiredSkill,$startDate,$endDate;
        public function __construct(
            $id,
            $name,
            $address,
            $type,
            $phoneNumber,
            $faxNumber,
            $department,
            $payPerDay,
            $agentName,
            $agentPosition,
            $HR_Name,
            $HR_Position,
            $HR_PhoneNamber,
            $requestPosition,
            $jobDescription,
            $amountPerson,
            $getPerson,
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
            $this->department=$department;
            $this->payPerDay=$payPerDay;
            $this->agentName=$agentName;
            $this->agentPosition=$agentPosition;
            $this->HR_Name=$HR_Name;
            $this->HR_Position=$HR_Position;
            $this->HR_PhoneNamber=$HR_PhoneNamber;
            $this->requestPosition=$requestPosition;
            $this->jobDescription=$jobDescription;
            $this->amountPerson=$amountPerson;
            $this->getPerson=$getPerson;
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
                $agentName=$my_row["agentName"];
                $agentPosition=$my_row["agentPosition"];
                $HR_Name=$my_row["HR_Name"];
                $HR_Position=$my_row["HR_Position"];
                $HR_PhoneNamber=$my_row["HR_PhoneNamber"];
                $requestPosition=$my_row["requestPosition"];
                $jobDescription=$my_row["jobDescription"];
                $amountPerson=$my_row["amountPerson"];
                $getPerson=$my_row["getPerson"];
                $requiredSkill=$my_row["requiredSkill"];
                $startDate=$my_row["startDate"];
                $endDate=$my_row["endDate"];
                $companyList[]=new Company($id,$name,$address,$type,$phoneNumber,$faxNumber,$department,$payPerDay,$agentName,$agentPosition,$HR_Name,$HR_Position,$HR_PhoneNamber,
                $requestPosition,$jobDescription,$amountPerson,$getPerson,$requiredSkill,$startDate,$endDate);
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
            $department,
            $payPerDay,
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
            $sql = "INSERT INTO company (name,address,type,phoneNumber,faxNumber,department,payPerDay,agentName,agentPosition,HR_Name,
                HR_Position,HR_PhoneNamber,requestPosition,jobDescription,amountPerson,getPerson,requiredSkill,startDate,endDate)
                VALUES('$name','$address','$type','$phoneNumber','$faxNumber','$department','$payPerDay','$agentName','$agentPosition','$HR_Name',
                '$HR_Position','$HR_PhoneNamber','$requestPosition','$jobDescription','$amountPerson','0','$requiredSkill','$startDate','$endDate')";
            $result = $conn->query($sql);
            require("connection_close.php");
            return "Add success $result rows";
        }
    }
?>
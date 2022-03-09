<?php
    class Requestform{
        public $id;
        public $requestID;
        public $status;
        public $createDate;
        public $phoneNumber;
        public $facebookName;
        public $positionRequest;
        public $agentName;
        public $agentPosition;
        public $HR_Name;
        public $HR_PhoneNamber;
        public $HR_Email;
        public $startDate;
        public $endDate;
        public $approverID;
        public $companyID;
        public $firstName;
        public $lastName;
        public $position;
        public function __construct($id,$requestID,$status,$createDate,$phoneNumber,$facebookName,$positionRequest,
        $agentName,$agentPosition,$HR_Name,$HR_PhoneNamber,$HR_Email,$startDate,$endDate,$approverID,$companyID,$firstName,$lastName,$position){
            $this->id=$id;
            $this->requestID=$requestID;
            $this->status=$status;
            $this->createDate=$createDate;
            $this->phoneNumber=$phoneNumber;
            $this->facebookName=$facebookName;
            $this->positionRequest=$positionRequest;
            $this->agentName=$agentName;
            $this->agentPosition=$agentPosition;
            $this->HR_Name=$HR_Name;
            $this->HR_PhoneNamber=$HR_PhoneNamber;
            $this->HR_Email=$HR_Email;
            $this->startDate=$startDate;
            $this->endDate=$endDate;
            $this->approverID=$approverID;
            $this->companyID=$companyID;
            $this->firstName=$firstName;
            $this->lastName=$lastName;
            $this->position=$position;
        }
        public static function getAll(){
            $requestformList=[];
            require("connection_connect.php");
            $sql="SELECT * FROM requestform LEFT JOIN user ON username=requestID";
            $result=$conn->query($sql);
            while($my_row = $result->fetch_assoc()){
                $id=$my_row["ID"];
                $requestID=$my_row["requestID"];
                $status=$my_row["status"];
                $createDate=$my_row["createDate"];
                $phoneNumber=$my_row["phoneNumber"];
                $facebookName=$my_row["facebookName"];
                $positionRequest=$my_row["positionRequest"];
                $agentName=$my_row["agentName"];
                $agentPosition=$my_row["agentPosition"];
                $HR_Name=$my_row["HR_Name"];
                $HR_PhoneNamber=$my_row["HR_PhoneNamber"];
                $HR_Email=$my_row["HR_Email"];
                $startDate=$my_row["startDate"];
                $endDate=$my_row["endDate"];
                $approverID=$my_row["approverID"];
                $companyID=$my_row["companyID"];
                $firstName=$my_row["firstName"];
                $lastName=$my_row["lastName"];
                $position=$my_row["position"];
                $requestformList[]=new Requestform($id,$requestID,$status,$createDate,$phoneNumber,$facebookName,$positionRequest,
                $agentName,$agentPosition,$HR_Name,$HR_PhoneNamber,$HR_Email,$startDate,$endDate,$approverID,$companyID,$firstName,$lastName,$position);
            }
            require("connection_close.php");
            return $requestformList;
        }
        public static function add($requestID,$phoneNumber,$facebookName,$positionRequest,
        $agentName,$agentPosition,$HR_Name,$HR_PhoneNamber,$HR_Email,$startDate,$endDate,$approverID){
            require("connection_connect.php");
            //$sql ="INSERT INTO requestform (requestID,phoneNumber,facebookName,positionRequest,
            //agentName,agentPosition,HR_Name,HR_PhoneNamber,HR_Email,startDate,endDate,approverID)
            //VALUES('$requestID','$phoneNumber','$facebookName','$positionRequest','$agentName','$agentPosition','$HR_Name','$HR_PhoneNamber',
            //'$HR_Email','$startDate','$endDate','$approverID')";
            $sql="INSERT INTO `requestform` (ID, requestID, `status`, `createDate`, `phoneNumber`, `facebookName`, `positionRequest`, `agentName`, `agentPosition`, `HR_Name`, `HR_PhoneNamber`, `HR_Email`, `startDate`, `endDate`, `approverID`, `companyID`) VALUES (NULL, 'b6220503201', 'waiting', current_timestamp(), '0922525835', 'wretew', 'wert', 'wey', 'wef', 'ew', 'wef', 'wef', '2022-03-23', '2022-03-16', NULL, '3');";
            $result=$conn->query($sql);
            require("connection_close.php");
            return "Add success $result rows";
        }
    }
?>
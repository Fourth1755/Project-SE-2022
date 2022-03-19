<?php
class Requestform
{
    public $id;
    public $requestID;
    public $statusName;
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
    public $academicYear;

    public function __construct(
        $id,
        $requestID,
        $statusName,
        $createDate,
        $phoneNumber,
        $facebookName,
        $positionRequest,
        $agentName,
        $agentPosition,
        $HR_Name,
        $HR_PhoneNamber,
        $HR_Email,
        $startDate,
        $endDate,
        $approverID,
        $companyID,
        $firstName,
        $lastName,
        $position,
        $academicYear

    ) {
        $this->id = $id;
        $this->requestID = $requestID;
        $this->statusName = $statusName;
        $this->createDate = $createDate;
        $this->phoneNumber = $phoneNumber;
        $this->facebookName = $facebookName;
        $this->positionRequest = $positionRequest;
        $this->agentName = $agentName;
        $this->agentPosition = $agentPosition;
        $this->HR_Name = $HR_Name;
        $this->HR_PhoneNamber = $HR_PhoneNamber;
        $this->HR_Email = $HR_Email;
        $this->startDate = $startDate;
        $this->endDate = $endDate;
        $this->approverID = $approverID;
        $this->companyID = $companyID;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->position = $position;
        $this->academicYear = $academicYear;
    }
    public static function get($id)
    {
        require("connection_connect.php");
        $sql = "SELECT * FROM requestform LEFT JOIN user ON username=requestID WHERE ID='$id'";
        $result = $conn->query($sql);
        $my_row = $result->fetch_assoc();
        $id = $my_row["ID"];
        $requestID = $my_row["requestID"];
        $statusName = $my_row["statusName"];
        $createDate = $my_row["createDate"];
        $phoneNumber = $my_row["phoneNumber"];
        $facebookName = $my_row["facebookName"];
        $positionRequest = $my_row["positionRequest"];
        $agentName = $my_row["agentName"];
        $agentPosition = $my_row["agentPosition"];
        $HR_Name = $my_row["HR_Name"];
        $HR_PhoneNamber = $my_row["HR_PhoneNamber"];
        $HR_Email = $my_row["HR_Email"];
        $startDate = $my_row["startDate"];
        $endDate = $my_row["endDate"];
        $approverID = $my_row["approverID"];
        $companyID = $my_row["companyID"];
        $firstName = $my_row["firstName"];
        $lastName = $my_row["lastName"];
        $position = $my_row["position"];
        require("connection_close.php");
        return new Requestform(
            $id,
            $requestID,
            $status,
            $createDate,
            $phoneNumber,
            $facebookName,
            $positionRequest,
            $agentName,
            $agentPosition,
            $HR_Name,
            $HR_PhoneNamber,
            $HR_Email,
            $startDate,
            $endDate,
            $approverID,
            $companyID,
            $firstName,
            $lastName,
            $position,
            $academicYear
        );
    }
    public static function getAll()
    {
        $requestformList = [];
        require("connection_connect.php");
        $sql = "SELECT * FROM requestform LEFT JOIN user ON username=requestID";
        $result = $conn->query($sql);
        while ($my_row = $result->fetch_assoc()) {
            $id = $my_row["ID"];
            $requestID = $my_row["requestID"];
            $statusName = $my_row["statusName"];
            $createDate = $my_row["createDate"];
            $phoneNumber = $my_row["phoneNumber"];
            $facebookName = $my_row["facebookName"];
            $positionRequest = $my_row["positionRequest"];
            $agentName = $my_row["agentName"];
            $agentPosition = $my_row["agentPosition"];
            $HR_Name = $my_row["HR_Name"];
            $HR_PhoneNamber = $my_row["HR_PhoneNamber"];
            $HR_Email = $my_row["HR_Email"];
            $startDate = $my_row["startDate"];
            $endDate = $my_row["endDate"];
            $approverID = $my_row["approverID"];
            $companyID = $my_row["companyID"];
            $firstName = $my_row["firstName"];
            $lastName = $my_row["lastName"];
            $position = $my_row["position"];
            $academicYear = $my_row["academicYear"];
            $requestformList[] = new Requestform(
                $id,
                $requestID,
                $statusName,
                $createDate,
                $phoneNumber,
                $facebookName,
                $positionRequest,
                $agentName,
                $agentPosition,
                $HR_Name,
                $HR_PhoneNamber,
                $HR_Email,
                $startDate,
                $endDate,
                $approverID,
                $companyID,
                $firstName,
                $lastName,
                $position,
                $academicYear
            );
        }
        require("connection_close.php");
        return $requestformList;
    }
    public static function add(
        $requestID,
        $phoneNumber,
        $facebookName,
        $positionRequest,
        $agentName,
        $agentPosition,
        $HR_Name,
        $HR_PhoneNamber,
        $HR_Email,
        $startDate,
        $endDate,
        $companyID
    ) {
        require("connection_connect.php");
        $sql = "INSERT INTO requestform (requestID,phoneNumber,facebookName,positionRequest,
            agentName,agentPosition,HR_Name,HR_PhoneNamber,HR_Email,startDate,endDate,companyID)
            VALUES('$requestID','$phoneNumber','$facebookName','$positionRequest','$agentName','$agentPosition','$HR_Name','$HR_PhoneNamber',
            '$HR_Email','$startDate','$endDate','$companyID')";
        //$sql="INSERT INTO `requestform` (ID, requestID, `status`, `createDate`, `phoneNumber`, `facebookName`, `positionRequest`, `agentName`, `agentPosition`, `HR_Name`, `HR_PhoneNamber`, `HR_Email`, `startDate`, `endDate`, `approverID`, `companyID`) VALUES (NULL, 'b6220503201', 'waiting', current_timestamp(), '0922525835', 'wretew', 'wert', 'wey', 'wef', 'ew', 'wef', 'wef', '2022-03-23', '2022-03-16', NULL, '3');";
        $result = $conn->query($sql);
        require("connection_close.php");
        return "Add success $result rows";
    }
    public static function approve($id, $requestID, $approverID, $statusName)
    {
        require("connection_connect.php");
        $sql = "UPDATE anime SET requestID='$requestID',approverID='$approverID',statusName='$statusName' WHERE ID='$id' ";
        $result = $conn->query($sql);
        require("connection_close.php");
        return "Update success $result rows";
    }

    public static function search($key)
    {
        $requestformList = [];
        require("connection_connect.php");
        $sql = "SELECT * FROM requestform NATURAL JOIN user WHERE requestform.requestID=user.username AND (requestform.createDate LIKE '%$key%' OR requestform.requestID LIKE '%$key%' OR user.firstName LIKE '%$key%' OR user.lastName LIKE '%$key%' OR requestform.statusName LIKE '%$key%'OR user.academicYear LIKE '%$key%')";
        $result = $conn->query($sql);
        while ($my_row = $result->fetch_assoc()) {
            $id = $my_row["ID"];
            $requestID = $my_row["requestID"];
            $statusName = $my_row["statusName"];
            $createDate = $my_row["createDate"];
            $phoneNumber = $my_row["phoneNumber"];
            $facebookName = $my_row["facebookName"];
            $positionRequest = $my_row["positionRequest"];
            $agentName = $my_row["agentName"];
            $agentPosition = $my_row["agentPosition"];
            $HR_Name = $my_row["HR_Name"];
            $HR_PhoneNamber = $my_row["HR_PhoneNamber"];
            $HR_Email = $my_row["HR_Email"];
            $startDate = $my_row["startDate"];
            $endDate = $my_row["endDate"];
            $approverID = $my_row["approverID"];
            $companyID = $my_row["companyID"];
            $firstName = $my_row["firstName"];
            $lastName = $my_row["lastName"];
            $position = $my_row["position"];
            $academicYear = $my_row["academicYear"];

            $requestformList[] = new Requestform(
                $id,
                $requestID,
                $statusName,
                $createDate,
                $phoneNumber,
                $facebookName,
                $positionRequest,
                $agentName,
                $agentPosition,
                $HR_Name,
                $HR_PhoneNamber,
                $HR_Email,
                $startDate,
                $endDate,
                $approverID,
                $companyID,
                $firstName,
                $lastName,
                $position,
                $academicYear
            );
        }
        require("connection_close.php");
        return $requestformList;
    }


    public static function searchDate()
    {
        $requestformList = [];
        require("connection_connect.php");
        $sql = "SELECT * FROM requestform NATURAL JOIN user WHERE requestform.requestID=user.username ORDER BY requestform.createDate DESC";
        $result = $conn->query($sql);
        while ($my_row = $result->fetch_assoc()) {
            $id = $my_row["ID"];
            $requestID = $my_row["requestID"];
            $statusName = $my_row["statusName"];
            $createDate = $my_row["createDate"];
            $phoneNumber = $my_row["phoneNumber"];
            $facebookName = $my_row["facebookName"];
            $positionRequest = $my_row["positionRequest"];
            $agentName = $my_row["agentName"];
            $agentPosition = $my_row["agentPosition"];
            $HR_Name = $my_row["HR_Name"];
            $HR_PhoneNamber = $my_row["HR_PhoneNamber"];
            $HR_Email = $my_row["HR_Email"];
            $startDate = $my_row["startDate"];
            $endDate = $my_row["endDate"];
            $approverID = $my_row["approverID"];
            $companyID = $my_row["companyID"];
            $firstName = $my_row["firstName"];
            $lastName = $my_row["lastName"];
            $position = $my_row["position"];
            $academicYear = $my_row["academicYear"];

            $requestformList[] = new Requestform(
                $id,
                $requestID,
                $statusName,
                $createDate,
                $phoneNumber,
                $facebookName,
                $positionRequest,
                $agentName,
                $agentPosition,
                $HR_Name,
                $HR_PhoneNamber,
                $HR_Email,
                $startDate,
                $endDate,
                $approverID,
                $companyID,
                $firstName,
                $lastName,
                $position,
                $academicYear
            );
        }
        require("connection_close.php");
        return $requestformList;
    }
}

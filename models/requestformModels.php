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
    public $imagePath;
    public $companyName;
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
        $academicYear,
        $imagePath,
        $companyName
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
        $this->imagePath=$imagePath;
        $this->companyName=$companyName;
    }
    public static function get($id)
    {
        require("connection_connect.php");
        $sql = "SELECT requestform.ID AS ID,requestID,statusName,createDate,requestform.phoneNumber AS phoneNumber,facebookName,positionRequest,
        requestform.agentName AS agentName,requestform.agentPosition AS agentPosition,requestform.HR_Name AS 
        HR_Name,requestform.HR_PhoneNamber AS HR_PhoneNamber,requestform.HR_Email AS HR_Email,requestform.startDate AS 
        startDate,requestform.endDate AS endDate,approverID,companyID,reasonReject,firstName,lastName,position,user.academicYear AS userAcademicYear,requestform.academicYear AS academicYear,imagePath,company.name 
        AS companyName FROM requestform LEFT JOIN user ON user.username=requestform.requestID LEFT JOIN company ON companyID=company.ID WHERE requestform.ID='$id'";
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
        $academicYear= $my_row["academicYear"];
        $imagePath=$my_row["imagePath"];
        $companyName=$my_row["companyName"];
        require("connection_close.php");
        return new Requestform(
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
            $academicYear,
            $imagePath,
            $companyName
        );
    }
    public static function getAll()
    {
        $requestformList = [];
        require("connection_connect.php");
        $sql = "SELECT requestform.ID AS ID,requestID,statusName,createDate,requestform.phoneNumber AS phoneNumber,facebookName,positionRequest,
        requestform.agentName AS agentName,requestform.agentPosition AS agentPosition,requestform.HR_Name AS 
        HR_Name,requestform.HR_PhoneNamber AS HR_PhoneNamber,requestform.HR_Email AS HR_Email,requestform.startDate AS 
        startDate,requestform.endDate AS endDate,approverID,companyID,reasonReject,firstName,lastName,position,user.academicYear AS userAcademicYear,requestform.academicYear AS academicYear,imagePath,company.name 
        AS companyName FROM requestform LEFT JOIN user ON user.username=requestform.requestID LEFT JOIN company ON companyID=company.ID;";
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
            $imagePath=$my_row["imagePath"];
            $companyName=$my_row["companyName"];
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
                $academicYear,
                $imagePath,
                $companyName
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
        $companyID,
        $academicYear
    ) {
        require("connection_connect.php");
        $sql = "INSERT INTO requestform (requestID,phoneNumber,facebookName,positionRequest,
            agentName,agentPosition,HR_Name,HR_PhoneNamber,HR_Email,startDate,endDate,companyID,academicYear)
            VALUES('$requestID','$phoneNumber','$facebookName','$positionRequest','$agentName','$agentPosition','$HR_Name','$HR_PhoneNamber',
            '$HR_Email','$startDate','$endDate','$companyID','$academicYear')";
        //$sql="INSERT INTO `requestform` (ID, requestID, `status`, `createDate`, `phoneNumber`, `facebookName`, `positionRequest`, `agentName`, `agentPosition`, `HR_Name`, `HR_PhoneNamber`, `HR_Email`, `startDate`, `endDate`, `approverID`, `companyID`) VALUES (NULL, 'b6220503201', 'waiting', current_timestamp(), '0922525835', 'wretew', 'wert', 'wey', 'wef', 'ew', 'wef', 'wef', '2022-03-23', '2022-03-16', NULL, '3');";
        $result = $conn->query($sql);
        require("connection_close.php");
        return "Add success $result rows";
    }
    public static function approve($id, $requestID, $approverID, $statusName)
    {
        require("connection_connect.php");
        $sql = "UPDATE requestform SET requestID='$requestID',approverID='$approverID',statusName='$statusName' WHERE ID='$id' ";
        $result = $conn->query($sql);
        require("connection_close.php");
        return "Update success $result rows";
    }

    public static function search($key)
    {
        $requestformList = [];
        require("connection_connect.php");
        $sql = "SELECT requestform.ID AS ID,requestID,statusName,createDate,requestform.phoneNumber AS phoneNumber,facebookName,positionRequest,
        requestform.agentName AS agentName,requestform.agentPosition AS agentPosition,requestform.HR_Name AS 
        HR_Name,requestform.HR_PhoneNamber AS HR_PhoneNamber,requestform.HR_Email AS HR_Email,requestform.startDate AS 
        startDate,requestform.endDate AS endDate,approverID,companyID,reasonReject,firstName,lastName,position,user.academicYear AS userAcademicYear,requestform.academicYear AS academicYear,imagePath,company.name 
        AS companyName FROM requestform LEFT JOIN user ON user.username=requestform.requestID LEFT JOIN company ON companyID=company.ID 
        WHERE requestform.requestID=user.username AND (requestform.createDate LIKE '%$key%' OR requestform.requestID LIKE '%$key%' 
        OR user.firstName LIKE '%$key%' OR user.lastName LIKE '%$key%' OR requestform.statusName LIKE '%$key%'OR user.academicYear LIKE '%$key%'
        OR company.name LIKE '%$key%')";
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
            $imagePath=$my_row["imagePath"];
            $companyName=$my_row["companyName"];
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
                $academicYear,
                $imagePath,
                $companyName
            );
        }
        require("connection_close.php");
        return $requestformList;
    }
    public static function SortDate()
    {
        $requestformList = [];
        require("connection_connect.php");
        $sql = "SELECT requestform.ID AS ID,requestID,statusName,createDate,requestform.phoneNumber AS phoneNumber,facebookName,positionRequest,
        requestform.agentName AS agentName,requestform.agentPosition AS agentPosition,requestform.HR_Name AS 
        HR_Name,requestform.HR_PhoneNamber AS HR_PhoneNamber,requestform.HR_Email AS HR_Email,requestform.startDate AS 
        startDate,requestform.endDate AS endDate,approverID,companyID,reasonReject,firstName,lastName,position,user.academicYear AS userAcademicYear,requestform.academicYear AS academicYear,imagePath,company.name 
        AS companyName FROM requestform LEFT JOIN user ON user.username=requestform.requestID LEFT JOIN company ON companyID=company.ID 
        WHERE requestform.requestID=user.username ORDER BY requestform.createDate DESC";
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
            $imagePath=$my_row["imagePath"];
            $companyName=$my_row["companyName"];
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
                $academicYear,
                $imagePath,
                $companyName
                
            );
        }
        require("connection_close.php");
        return $requestformList;
    }

    public static function searchApprove($key)
    {
        $requestformList = [];
        require("connection_connect.php");
        $sql = "SELECT requestform.ID AS ID,requestID,statusName,createDate,requestform.phoneNumber AS phoneNumber,facebookName,positionRequest,
        requestform.agentName AS agentName,requestform.agentPosition AS agentPosition,requestform.HR_Name AS 
        HR_Name,requestform.HR_PhoneNamber AS HR_PhoneNamber,requestform.HR_Email AS HR_Email,requestform.startDate AS 
        startDate,requestform.endDate AS endDate,approverID,companyID,reasonReject,firstName,lastName,position,user.academicYear AS userAcademicYear,requestform.academicYear AS academicYear,imagePath,company.name 
        AS companyName FROM requestform LEFT JOIN user ON user.username=requestform.requestID LEFT JOIN company ON companyID=company.ID 
        WHERE requestform.requestID=user.username AND (requestform.createDate LIKE '%$key%' OR requestform.requestID LIKE '%$key%' 
        OR user.firstName LIKE '%$key%' OR user.lastName LIKE '%$key%' OR requestform.statusName LIKE '%$key%'OR user.academicYear LIKE '%$key%' 
        OR company.name LIKE '%$key%' OR requestform.academicYear LIKE '%$key%')";
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
            $imagePath=$my_row["imagePath"];
            $companyName=$my_row["companyName"];
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
                $academicYear,
                $imagePath,
                $companyName
            );
        }
        require("connection_close.php");
        return $requestformList;
    }

}

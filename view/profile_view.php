<title>รายละเอียดคำร้องการฝึกงาน</title>
<style>
    .profilecontent {
        background-color: #FFCFCF;
        padding-right: 50px;
        border-radius: 20px;
        display: flex;
    }

    .image-big {
        width: 320px;
        height: 360px;
        padding: 30px 30px 0px 50px;
    }

    .image-big img {
        width: 100%;
        height: 100%;

        border-radius: 20px;
        transform: scale(1);
        transition: .3s ease-in-out;
        box-shadow: 2px 2px 6px 0px rgba(0, 0, 0, 0.3);
    }

    .image-big img:hover {
        transform: scale(1.08);
        box-shadow: 2px 2px 6px 0px rgba(0, 0, 0, 0.3);
    }

    .content {
        padding: 20px 20px 0px 20px;

    }

    .content-title {
        padding: 10px 20px 10px 30px;
        list-style-type: none;
    }

    .content-title li {
        padding: 15px 0px 15px 0px;
        font-size: 20px;
        text-decoration: none;
    }

    .content-detail {
        padding: 20px 40px 20px 40px;
    }
</style>
<?php require_once("menuTop.php") ?>
<h3>อนุมัติคำร้องการฝึกงาน</h3>
<hr style="width:100%;text-align:left;margin-left:0">

<div class="profilecontent">
    <div class="image-big">
        <img src="<?php echo "$requestform->imagePath"; ?>" />
    </div>
    <div class="content">
        <h4>คำร้องฝึกงาน</h4>
        <ul class="content-title">
            <li>
                ชื่อ <?php echo "$requestform->firstName"; ?> <?php echo "$requestform->lastName"; ?>
            </li>
            <li>
                รหัสนิสิต: <?php echo "$requestform->requestID"; ?>
            </li>
            <li>
                เบอร์โทรศัพท์: <?php echo "$requestform->phoneNumber"; ?>
            </li>
            <li>
                ตำแหน่งที่ไปฝึกงาน: <?php echo "$requestform->positionRequest"; ?>
            </li>
            <li>
                สถานที่ไปฝึกงาน: <a style="text-decoration: none;color: #171738;" href='?controller=company&action=viewCompany&ID=<?php echo "$requestform->companyID"; ?>'><?php echo "$requestform->companyName"; ?></a>
            </li>
            <li>
                ระยะเวลาการฝึกงาน: <?php echo "$requestform->startDate"; ?> ถึง <?php echo "$requestform->endDate"; ?>
            </li>
        </ul>

    </div>
</div>
<br>
<hr style="width:100%;text-align:left;margin-left:0">
<h3>รายละเอียด</h3>
<div class="content-detail">
    <table class="table">
        <tbody>
            <tr>
                <th scope="row">สถานประกอบการ:</th>
                <td><?php echo "$requestform->companyName"; ?></td>
            </tr>
            <tr>
                <th scope="row">ชื่อหัวหน้างาน/หัวหน้าโปรเจกต:์</th>
                <td><?php echo "$requestform->agentName"; ?></td>
            </tr>
            <tr>
                <th scope="row">ตำแหน่งหัวหน้างาน/หัวหน้าโปรเจกต:์</th>
                <td><?php echo "$requestform->agentPosition"; ?></td>
            </tr>
            <tr>
                <th scope="row">ชื่อผู้ประสานงาน:</th>
                <td><?php echo "$requestform->HR_Name"; ?></td>
            </tr>
            <tr>
                <th scope="row">เบอร์โทรศัทพ์ผู้ประสานงาน:</th>
                <td><?php echo "$requestform->HR_PhoneNamber"; ?></td>
            </tr>
            <tr>
                <th scope="row">อีเมลผู้ประสานงาน:</th>
                <td><?php echo "$requestform->HR_Email"; ?></td>
            </tr>
        </tbody>
    </table>
</div>
<a href="?controller=profile&action=index" class="btn btn-outline-dark">Back</a>
<?php require_once("menuDown.php") ?>
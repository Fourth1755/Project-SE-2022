<title>My Profile</title>
<style>
.profilecontent{
    height: 400px;
    background-color: #FFCFCF;
    padding-right: 50px;
    border-radius: 20px;
    display: flex;
}
.image-big{
    width: 320px;
    height: 360px;
    padding: 30px 30px 0px 50px;
}
.image-big img{
    width: 100%;
    height: 100%;
    
    border-radius: 20px;
    transform: scale(1);
    transition: .3s ease-in-out;
    box-shadow: 2px 2px 6px 0px rgba(0,0,0,0.3);
}
.image-big img:hover{
    transform: scale(1.08);
    box-shadow: 2px 2px 6px 0px rgba(0,0,0,0.3);
}
.content{
    padding: 0px 20px 0px 20px;
    align-content: space-between;
    display: flex;
    flex-wrap: wrap;
}
.content-title{
    padding: 10px 20px 10px 30px;
    list-style-type: none;
}
.content-title li{
    padding: 20px 0px 20px 0px;
    font-size: 20px;
    text-decoration: none;
}
</style>
<?php require_once("menuTop.php") ?>
      <h3>My Profile</h3>
      <hr style="width:100%;text-align:left;margin-left:0">
      <div class="profilecontent">
            <div class="image-big">
                <img src="<?php echo $account->imagePath;?>"/>
            </div>
            <div class="content">
                <ul class="content-title">
                    <li>
                        
                    </li>
                    <li>
                        ชื่อ:  <?php echo $account->firstName;?> <?php echo $account->lastName;?>
                    </li>
                    <li>
                        ตำแหน่ง:  <?php echo $account->position;?>
                    </li>
                    <li>
                        คณะวิศวกรรมศาสตร์ กำแพงแสน ภาควิชาวิศวกรรมคอมพิวเตอร์
                    </li>
                    <li>
                        มหาวิทยาลัยเกษตรศาสตร์ วิทยาเขตกำแพงแสน
                    </li>
                </ul>
                    
            </div>
      </div>
      <hr style="width:100%;text-align:left;margin-left:0">
<?php require_once("menuDown.php") ?>
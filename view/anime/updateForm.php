<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Form</title>
</head>
<body>
    <br>
    <div class="container">
        <form method="get" action="" style="width: 30%; ">
    <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">Name Anime</label>
        <input type="text" class="form-control" name= "name" value="<?php echo $anime->name;?>"placeholder="Anime input placeholder" > 
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Episode</label>
        <input type="number" class="form-control" name= "episode" value="<?php echo $anime->episode;?>" placeholder="Episodes">
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Aried</label>
        <input type="text" class="form-control" name= "aried" value="<?php echo $anime->aried;?>" placeholder="Aried">
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Rating</label>
        <input type="text" class="form-control" name="rating" value="<?php echo $anime->rating;?>" placeholder="Rating">
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Year</label>
        <input type="text" class="form-control" name="year" value="<?php echo $anime->year;?>" placeholder="year">
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Season
            <select name="season" class="form-select" aria-label="Default select example">
                <?php
                    echo "<option selected disabled hidden value=$anime->season";
                    echo ">$anime->season</option>";
                ?>
                <option value="Winter">Winter</option>
                <option value="Spring">Spring</option>
                <option value="Summer">Summer</option>
                <option value="Fall">Fall</option>
            </select>
        </label>
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Studio
            <select name="studioID" class="form-select" aria-label="Default select example">
                <?php
                    foreach($studio_list as $stu){
                        echo"<option value=$stu->id";
                            if($stu->id==$anime->studioID){
                                echo " selected='selected'";
                            }
                        echo ">$stu->name</option>";
                    }    
                ?>
            </select>
        </label>
        <br>
    </div>
    <input type="hidden" name="controller" value="anime" class="form-control">
    <button type="submit" class="btn btn" name="action" value="index">Back</button>
    <button type="submit" class="btn btn-success" name="action" value="update">Save</button>
    </form>
    </div>
    
</body>
</html>
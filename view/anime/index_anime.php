<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anime</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</head>
<body >
    <div class="container">
        <h1>Anime</h1>
        <table class="table" style="width: 50%;" >
        <tr><td>ID</td><td>Name</td><td>Studio</td><td>Update</td><td>Delete</td></tr>
        <?php 
            foreach($anime_list as $anime){
            echo "<tr><td>$anime->id</td>
                <td>$anime->name</td>
                <td>$anime->studioName</td>"?>
                <td><a class="btn btn-primary" href=?controller=anime&action=updateForm&<?php echo "animeID=$anime->id";?>>Update</a></td>
                <td><a class="btn btn-danger">Delete</a></td></tr>
                
            <?php 
            }    
            echo "</table>";
        ?>
    <a class= "btn btn-success" href=?controller=anime&action=newAnime>add new</a>
    </div>
    
    
    
</body>
</html>


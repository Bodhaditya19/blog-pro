<?php 
  include "logic.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Blog Using PHP and MySQL</title>
</head>

<body>
    <?php
        // if(isset($_REQUEST['info=added'])){
        //     echo "<h1> Post Successfully Published</h1>";
        // }
        // elseif(isset($_REQUEST['info=updated'])){
        //     echo "<h1> Post Successfully updated</h1>";
        // }
        if(isset($_REQUEST['info'])){
        $info =  $_REQUEST['info'];
        if($info == 'updated'){
            echo "<h1> Post Successfully updated</h1>";
        }
        elseif($info == "added"){
           echo "<h1> Post Successfully Added</h1>";
        }
        elseif($info == "deleted"){
            echo "<h1> Post Deleted</h1>";
         }
    }
            
    ?>

    <div>
        <div class="button">
            <a href="create.php">+ Create A New Post</a>
        </div>
    </div>

    <div class="cards_container">
        <?php foreach( $fetchQuery as $q){ ?>
        <div class="cards">
            <h1>
                <?php echo $q['title']; ?>
            </h1>
            <p>
                <?php echo $q['content']; ?>
            </p>
            <a href="view.php?id=<?php echo $q['id'] ?>"><h4>...Read More</h4></a>
        </div>

        <?php } ?>
    </div>
</body>

</html>
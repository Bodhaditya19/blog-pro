<?php
    include "logic.php";
?>

<?php
    foreach($querySingle as $q){ ?>
        <h3> <?php echo $q['title']; ?></h2>
        <p> <?php echo $q['content']; ?></p>
        <a href="edit.php?id=<?php echo $q['id']; ?>"><h4>Edit...</h4></a>
        <form action="logic.php">
            <input type="text" hidden name ="id" value = "<?php echo $q['id'] ?>">
            <input type="submit" name = "delete" value="Delete" >
        </form>


<?php
    }
 ?>
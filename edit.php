<?php
    include "logic.php";
?>

<?php
    foreach($querySingle as $q){ ?>

    <form action="logic.php" method ="get">
        <input type="text" hidden name= "id" value= "<?php echo $q['id']; ?>">
        <h2> <input type="text" value ="<?php echo $q['title'];?>" name= "title"> </h2>
        <p>
            <textarea name="content" id="" cols="30" rows="10">
                <?php echo $q['content']; ?>
            </textarea>
        </p>
        <input type="submit" value= "Update" name ="update">
    </form>

<?php
    }
 ?>
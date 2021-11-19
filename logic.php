<?php
    $conn = mysqli_connect("localhost", "root", "", "blogtut_db");
    if(!$conn){
        echo "Connection Failed!!";
    }
    
/**
 * Inserting The Data
 */

    if(isset($_POST["title"])){
        $title = $_POST['title'];
        $content = $_POST['content'];

        $sqlInsert = "INSERT INTO data(title, content) VALUES('$title', '$content')";
        mysqli_query($conn, $sqlInsert);
        header("Location: index.php?info=added");
        exit();
    }

/**
 * Fetching The Data
 */
    $sqlFetch = "SELECT * FROM DATA";
    $fetchQuery = mysqli_query($conn, $sqlFetch);
    // echo "<pre>";
    // foreach($fetchQuery as $q){
    //    print_r($q);
    //     print_r($q['title']);
    //     echo '<br>';
    //     echo '<br>';
    // }

/**
 * Viewing & Editing Single Post
 */

 if(isset($_REQUEST['id'])){
     $id = $_REQUEST['id'];
     $querySingle = mysqli_query($conn,"SELECT * FROM data WHERE id = $id");
     
 }

 /**
  * Updating The Data
  */
    if(isset($_REQUEST['update'])){
        $id = $_REQUEST['id'];
        $title = $_REQUEST["title"];
        $content = $_REQUEST["content"];
        $query_update = "UPDATE data SET title = '$title', content= '$content' WHERE id = '$id' ";
        mysqli_query($conn, $query_update);
        header("Location: index.php?info=updated");
    }
/**
 * Deleting The Post
 */

 if(isset($_REQUEST['delete'])){
    $id = $_REQUEST['id'];
     $query_delete = "DELETE FROM data WHERE id = $id";
     mysqli_query($conn, $query_delete);
     header("Location: index.php?info=deleted");
 }
  

?>
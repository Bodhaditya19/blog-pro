<?php include "logic.php" ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Create Post</title>
</head>

<body>

    <div class="content-area">
        <form method="post" action="logic.php">
            <input type="text" placeholder="Blog Title" name="title"> <br> <br>
            <textarea name="content" rows = "6" cols = "50" placeholder="Write Your Blog"></textarea> <br><br>
            <input type="submit">
        </form>
    </div>

</body>

</html>
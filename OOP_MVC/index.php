<?php 
    include 'includes/autoloader.inc.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
       $usersObj = new UsersView();
       $usersObj->showUser('Peter');

       $usersObj2 = new UsersController();
       $usersObj2->createUser("Jennifer", "Anniston", "1968-10-19")
    ?>
</body>
</html>
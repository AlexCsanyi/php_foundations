<?php 
    $personName = addslashes($_GET['nameInput']);
    $personEmail = $_GET['emailInput'];
    $personHobby = $_GET['hobbyInput'];
    $personAge = $_GET['ageInput'];
    $personBirthday = $_GET['birthdayInput'];
    $personFavouriteColor = $_GET['colorInput'];
    $personPassword = $_GET['passwordInput'];
    $personIQ = $_GET['iqInput'];

    echo "Hello " . $personName . " Welcome to my program!";

    if($personAge > 50) {
        echo "You get an age discount, because you are more than 50 years old.";
    } else {
        echo "You are so young!";
    }

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database_name = "dataentryform";

    $connection = mysqli_connect($servername, $username, $password, $database_name);

    if(!$connection){
        die("Connection failed: " . mysqli_connect_error());
    }

    echo "Connected successfully";

    $sql_statement = "INSERT INTO `herotable` (`id`, `name`, `email`, `hobby`, `age`, `birthday`, `color`, `password`, `iq`) VALUES (NULL, '$personName', '$personEmail', '$personHobby', '$personAge', '$personBirthday', '$personFavouriteColor', '$personPassword', '$personIQ');";

    if(mysqli_query($connection, $sql_statement)) {
        echo "New record created successfully.";
    } else {
        echo "Error: " . $sql_statement . "<br />" . mysqli_error($connection);
    };
?>
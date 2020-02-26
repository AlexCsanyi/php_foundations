<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Building with PHP</title>
</head>
<body>
    <?php 

        $charName = "George";
        $charAge = 35;
        $phrase = "This is how it all starts";

        echo "<h1>Alex's Site</h1>";
        echo "<hr>";
        echo "<p>This is my site, welcome</p>";
        echo "There was once a man named $charName <br>";
        echo "He was $charAge years old <br>";
        echo "He really liked marmalade <br>";
        echo "But he did not like being $charAge <br>";

    ?>

    <hr>

    <?php 
    
        echo $phrase;
    
    ?>

    <br>

    <form action="project.php" method='GET'>
        Name: <input style='margin-bottom: 20px; margin-top: 20px' type="text" name="name"> <br>
        Age: <input style='margin-bottom: 20px' type="text" name="age"> <br>
        Location: <input style='margin-bottom: 20px' type="text" name="location"> <br>
        <input type="submit">
    </form>

    <br>

    <?php 
    
        echo "Your name is: " 
            . $_GET["name"] . ", you are " 
            . $_GET["age"] . " years old; and you live in: " 
            . $_GET["location"];
    
    ?>

    <br>
    <h3>Let's build a mad_lib game</h3>
    
    <form action="project.php" method="GET">
        color: <input style='margin-bottom: 20px; margin-top: 20px' type="text" name="color"> <br>
        plural noun: <input style='margin-bottom: 20px' type="text" name="pluralNoun"> <br>
        celebrity: <input style='margin-bottom: 20px' type="text" name="celebrity"> <br>
        <input style='margin-bottom: 20px' type="submit">
    </form>

    <?php

        $color = $_GET["color"];
        $pluralNoun = $_GET["pluralNoun"];
        $celebrity = $_GET["celebrity"];

        echo "Roses are $color <br>";
        echo "$pluralNoun are blue <br>";
        echo "I love $celebrity <br>";
    ?>

    <br>
    <hr>
    <form action="project.php" method="POST">
        password: <input style='margin-bottom: 20px; margin-top: 20px' type="password" name="password"> <br>
        <input style='margin-bottom: 20px' type="submit">
    </form>
    <br><br>
    <?php 
        echo $_POST["password"]
    ?>
    <br>
    <hr>

    <?php
        $friends = array("Kevin", "Oscar", "Jim", "Karen");
        $friends[1] = "Peter";
        $friends[4] = "Angela";
        echo $friends[1] . "<br>";
        echo "Length of array: " . count($friends);
    ?>

    <br>
    <hr>
    <form action="project.php" method="POST">
        Apples: <input style='margin-bottom: 20px' type="checkbox" name="fruits[]" value="apples"><br>
        Oranges: <input style='margin-bottom: 20px' type="checkbox" name="fruits[]" value="oranges"><br>
        Pears: <input style='margin-bottom: 20px' type="checkbox" name="fruits[]" value="pears"><br>
        <input style='margin-bottom: 20px' type="submit">
    </form>
    <br><br>
    <?php 
        $fruits = $_POST["fruits"];
        echo $fruits[0];
    ?>
</body>
</html>
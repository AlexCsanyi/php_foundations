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
</body>
</html>
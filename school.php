<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School</title>
</head>
<body>

    <form action="school.php" method='POST'>
        <input type="text" name="student"><br>
        <input type="submit"><br><br>
    </form>
    <?php 

        // associatve array
        global $grades;
        $grades = array("Jim"=>5, "Pam"=>3, "Oscar"=>2);

        // function basics
        function sayHi($name){
            global $grades;
            echo "Hello $name," . "<br><br>";
            echo "Your result: " . $grades[$_POST["student"]] . "<br><br>";
        };
        sayHi($_POST["student"]);

        // return statement
        function myCalculator($num){
            return 10 - $num;
        };

        $calculationResult = myCalculator($grades[$_POST["student"]]);
        echo "You can do better! You need $calculationResult more points to get a 10 next time."
    ?>
</body>
</html>
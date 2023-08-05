<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorial</title>
</head>
<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    .container{
        max-width: 80%;
        background-color: rgb(228, 195, 195);
        margin: auto;
        padding: 23px;
    }
</style>
<body>
    <div class="container">
        <h1>Let's learn about PHP</h1>
        <p>Your party status is here: </p>
        <?php
        $age = 3;
        if($age > 18){
            echo "You can go to party";
        }
        else if($age == 7){
            echo "You are 7 years old";
        }
        else if($age == 6){
            echo "You are 6 years old";
        }
        else{
            echo "You cannot go to party";
        }
        // Arrays in PHP
        $languages = array("HTML", "CSS", "JavaScript", "Python", "PHP");
        echo "<br>";
        echo $languages[1];
        echo "<br>";
        echo count($languages);
        // While Loops in PHP
        $a = 0;
        while ($a <= 10) {
            echo "<br>";
            echo "The value of a is: ";
            echo $a;
            $a++;
        }
        // Iterating Arrays in PHP using While Loop
        $a = 0;
        while ($a < count($languages)) {
            echo "<br>";
            echo "The languages are: ";
            echo $languages[$a];
            $a++;
        }
        // Do-While Loops in PHP
        $a = 200;
        do {
            echo "<br>";
            echo "The value of a is: ";
            echo $a;
            $a++;
        } while ($a < 10);
        // For Loops in PHP
        for ($a=0; $a < 10; $a++) { 
            echo "<br>";
            echo "The value of a from the for loop is: ";
            echo $a;
        }
        // For-Each Loops in PHP
        foreach ($languages as $value) {
            echo "<br>";
            echo "The value from for-each loop is ";
            echo $value;
        }
        // Functions in PHP
        function print5(){
            echo "<br>";
            echo "FIVE";
        }
        print5();
        print5();
        print5();
        function print_number($number){
            echo "<br>";
            echo "Your number is: ";
            echo $number;
        }
        print_number(45);
        print_number(435);
        print_number(5);
        ?>
    </div>
</body>
</html>
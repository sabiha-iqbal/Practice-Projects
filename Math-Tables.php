<?php
//========================== Making a table of 2 
$int = 2;
for ($table = 1; $table <= 10; $table++) {
    $multiply = $int * $table;
    //echo $int . "x" . $table . "=".$multiply."<br>";
}
//========================== Making 2-10 tables with different code methods (way 1)
$int2 = 2;
$int3 = 3;
$int4 = 4;
$int5 = 5;
$int6 = 6;
$int7 = 7;
$int8 = 8;
$int9 = 9;
$int10 = 10;
for ($table = 1; $table <= 10; $table++) {
    $multiply = $int2 * $table;
    echo $table . "x" . $int2 . "=" . $multiply . "<br>";
    $multiply3 = $int3 * $table;
    echo $table . "x" . $int3 . "=" . $multiply3 . "<br>";
    $multiply4 = $int4 * $table;
    echo $table . "x" . $int4 . "=" . $multiply4 . "<br>";
    $multiply5 = $int5 * $table;
    echo $table . "x" . $int5 . "=" . $multiply5 . "<br>";
    $multiply6 = $int6 * $table;
    echo $table . "x" . $int6 . "=" . $multiply6 . "<br>";
    $multiply7 = $int7 * $table;
    echo $table . "x" . $int7 . "=" . $multiply7 . "<br>";
    $multiply8 = $int8 * $table;
    echo $table . "x" . $int8 . "=" . $multiply8 . "<br>";
    $multiply9 = $int9 * $table;
    echo $table . "x" . $int9 . "=" . $multiply9 . "<br>";
    $multiply10 = $int10 * $table;
    echo $table . "x" . $int10. "=" . $multiply10 . "<br>";
}
//========================== (WAY NO 2)
$whole = array("2", "3", "4", "5", "6", "7", "8", "9", "10");
foreach ($whole as $int) {
    for ($table = 1; $table <= 10; $table++) {
        $multiply = $int * $table;
        echo $int . "x" . $table . "=" . $multiply. "<br>";
    }
}
//========================== (WAY NO 3)
for ($table = 2; $table <= 10; $table++) {
    for ($num = 1; $num <= 10; $num++) {
        $multiply = $table * $num;
        echo $table . "x" . $num . "=" . $multiply . "<br>";
    }
}
//========================== (WAY NO 4)
$table = 1;
$whole = array("1", "2", "3", "4", "5", "6", "7", "8", "9", "10");
while ($table <= 9) {
    $table++;
    foreach ($whole as $int) {
        $multiply = $int * $table;
        echo $table . "x" . $int . "=" . $multiply. "<br>";
    }
}
//========================== method of making a table of any number you'll write
//make an input tag with attribute(name="number") inside the form tag
//make a button of type="submit"
//make sure to add action="your-page-name.php" and method="POST" attribute to the form tag
//style it a little bit then add the given code below
$number = $_POST["number"];

    for ($num = 1; $num <= 10; $num++) {
        $multiply = $number * $num;
        echo $number . "x" . $num . "=" . $multiply . "<br>";
    }

?>
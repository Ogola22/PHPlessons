<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Learning PHP</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <h2>Simple addition calulator</h2>
        <form action = "" method = "POST">
            <input type = "number" name ="num1"><br><br>
            <input type = "number" name ="num2"><br><br>
            <button type = "Submit" name ="Submit">Add Numbers</button>
        </form>
        <h2> Simple Gradding System</h2>
        <h3>Enter Your marks</h3>
        <form action = "" method = "POST">
            <input type = "number" name ="num"><br><br>
            <button type = "Submit" name ="Grade">Show Grade</button>
        </form>
    </body> 

</html>
<?php
if(isset($_POST['Submit'])){
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $answer = $num1 + $num2;
    echo "The answer is:".$answer;
}
?>
<?php
if(isset($_POST['Grade'])){
    $num = $_POST['num'];
    if ($num >= 80 && $num <=100) {
        echo $num." = Grade A";
    }elseif ($num >=60 && $num <=79) {
        echo $num." = Grade B";
    }elseif ($num >=50 && $num <=59) {
        echo $num." = Grade C";
    }elseif ($num >=40 && $num <=49) {
        echo $num." = Grade D";
    }elseif ($num >=0 && $num <=39) {
        echo $num." = Grade E";
    }else {
        echo "Invalid Marks, Enter marks between 0-100";
    }
}
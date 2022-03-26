<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form>
    <input type="text" name="numl" placeholder="Number 1">
    <input type="text" name="numl" placeholder="Number 2">
    <select name="Operator">
        <option>None</option>
        <option>Add</option>
        <option>Substract</option>
        <option>Multiply</option>
        <option>Divide</option>
    </select>
    <br>
    <button type="Submit" name="Submit" value="Submit">Calculate</button>
</form>
<p> The answer is:</p>
<?php
    if (isset($_GET['Submit'])) {
        $result1 = $_GET['num1'];
        $result2 = $_GET['num2'];
        $Operator = $_GET['Operator'];
        switch (Operator) {
        case "None":
        echo "You need to select a method!";
        break;
        case "Add":
        echo $result1 + $result2;
        break;
        case "Substract":
        echo $result1 - $result2;
        break;
        case "Multiply":
        echo $result1 * $result2;
        break;
        case "Divide":
        echo $result1 / $result2;
        break;


        }

    }
?>

</body>
</html>

<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>calculator</title>
</head>
<body>
<h1>Simple Interest Calculator</h1>
<form action ="" method="post">

    <label>Principal Amount :</label>
    <input type ="number" name="principalAmount" />
    <br><br>
    <label>Anual interest:</label>
    <input type ="number" name="anualInterest" /> %
    <br><br>
    <label>Time Period:</label>
    <input type ="number" name="timePeriod" /> Year
    <br><br>
    <button type ="submit">Calculate</button>
</form>

</body>
</html>
<br><br>

<?php
require 'calculator.php';

if(isset($_POST["principalAmount"])&&isset($_POST["anualInterest"])&&isset($_POST["timePeriod"]))
{
    $calculator1= new Calculator();
    $calculator1->principalAmount =$_POST["principalAmount"];
    $calculator1->anualInterest =$_POST["anualInterest"];
    $calculator1->timePeriod =$_POST["timePeriod"];

    echo "totalAmount: ". $calculator1->calculateTotalAmount();

}
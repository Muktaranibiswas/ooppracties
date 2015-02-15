
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>salary</title>
</head>
<body>
<h1>Salary Calculate</h1>
<form action ="" method="post">

    <label>Employee Name :</label>
    <input type ="text" name="name" />
    <br><br>
    <label>Basic Amount:</label>
    <input type ="number" name="basicAmount" />
    <br><br>
    <label>House Rent:</label>
    <input type ="number" name="houseRent" /> %
    <br><br>
    <label>Medical Cost:</label>
    <input type ="number" name="medical" /> %
    <br><br>
    <button type ="submit">show</button>

</form>

</body>
</html>
<br><br>

<?php
require 'salary.php';

if(isset($_POST["name"]) &&isset($_POST["basicAmount"])&&isset($_POST["houseRent"])&&isset($_POST["medical"]))
{

    $person1 = new Salary();

    $person1->setName($_POST['name']);
    $person1->setBasicAmount($_POST['basicAmount']);
    $person1->setHouseRent($_POST['houseRent']);
    $person1->setMedical ($_POST['medical']);

    echo "Employee Name :".$person1->getName();
    echo "<br>";
    echo "Basic Amount :".$person1->getBasicAmount()."tk";
    echo "<br>";
    echo "House Rent : ".$person1->getHouseRent()."tk";
    echo "<br>";
    echo "Medical Cost :". $person1->getMedical()."tk";
    echo "<br>";
    echo "Total :".$person1->getTotal()."tk";
}
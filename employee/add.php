
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<form action ="add.php" method="post">

    <label>ID:</label>
    <input type ="text" name="id" />
    <br><br>
    <label>Name:</label>
    <input type ="text" name="name" />
    <br><br>
    <label>Salery:</label>
    <input type ="number" name="salary" />
    <br><br>
    <button type ="submit">Show below</button>
</form>

</body>
</html>
<br><br>

<?php
require'employee.php';

if(isset($_POST["id"])&&isset($_POST["name"])&&isset($_POST["salary"]))
{
    $anemployee= new Employee();
    $anemployee->id =$_POST["id"];
    $anemployee->name =$_POST["name"];
    $anemployee->salary =$_POST["salary"];

    echo "ID:", $anemployee->id,",Name:",$anemployee->name,",Salary:",$anemployee->salary;
}
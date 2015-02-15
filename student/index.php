
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<form action ="" method="post">

    <label>First Name :</label>
    <input type ="text" name="firstName" />
    <br><br>
    <label>Last Name:</label>
    <input type ="text" name="lastName" />
    <br><br>
    <label>Registration No:</label>
    <input type ="number" name="regNo" />
    <br><br>
    <button type ="submit">Show below</button>
</form>

</body>
</html>
<br><br>

<?php
require 'student.php';
if(isset($_POST["firstName"])&&isset($_POST["lastName"])&&isset($_POST["regNo"]))
{
    $student1= new Student();
    $student1->firstName =$_POST["firstName"];
    $student1->lastName =$_POST["lastName"];
    $student1->regNo =$_POST["regNo"];

echo "Full Name: ". $student1->getFullName() . " ," . "Reg no:" . $student1->regNo;

}
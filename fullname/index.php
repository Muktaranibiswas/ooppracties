<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Name</title>
</head>
<body>
<h1>Full Name</h1>
<form action ="" method="post">

    <label>First Name :</label>
    <input type ="text" name="firstName" />
    <br><br>
    <label>Middle Name:</label>
    <input type ="text" name="middleName" />
    <br><br>
    <label>Last Name:</label>
    <input type ="text" name="lastName" />
    <br><br>

    <button type ="submit">show</button>

</form>
</body>
</html>
<br><br>

<?php
require 'person.php';

if(isset($_POST["firstName"]) &&isset($_POST["middleName"])&&isset($_POST["lastName"]))
{

    $person1 = new Person();

    $person1->setFirstName($_POST['firstName']);
    $person1->setMiddleName($_POST['middleName']);
    $person1->setLastName($_POST['lastName']);

    echo "Full Name :".$person1->getFullName();
    echo "<br>";
    echo "Reverse Full Name :".$person1->getReverseFullName();

}
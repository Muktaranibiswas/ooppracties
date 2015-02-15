

<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>circle</title>
</head>
<body>
<h1>Circle</h1>
<form action ="" method="post">

    <label>Enter Radius :</label>
    <input type ="number" name="enterradius" />
    <button type ="submit">Show</button>
    <br><br>
    <label>Diameter:</label>
    <input type ="number" name="diameter" />
    <br><br>
    <label>Perimeter:</label>
    <input type ="number" name="perimeter" />
    <br><br>
    <label>Area:</label>
    <input type ="number" name="area" />


</form>

</body>
</html>
<br><br>

<?php
require 'circle.php';
if(isset($_POST["enterradious"])&&isset($_POST["diameter"])&&isset($_POST["perimeter"])&&isset($_POST["area"])){
    $time1=new Circle();
    $time1->enterradius=$_POST["enterradius"];
    $time1->diameter=$_POST["diameter"];
    $time1->perimeter=$_POST["perimeter"];
    $time1->area=$_POST["area"];
    echo "radius: ".$time1->radious();

}

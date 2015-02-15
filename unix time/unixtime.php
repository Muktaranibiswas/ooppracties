
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Unix time</title>
</head>
<body>
<h1>Unix Time</h1>
<form action ="" method="post">

    <label>Enter a Date :</label>
    <input type ="date" name="enteradate" />
    <button type ="submit">Show</button>
    <br><br>
    <label>Total Seconds:</label>
    <input type ="time" name="totalseconds" />
    <br><br>
    <label>Toal Minutes:</label>
    <input type ="time" name="totalminutes" />
    <br><br>
    <label>Total Hours:</label>
    <input type ="time" name="totalhours" />
    <br><br>
    <label>Toal Days:</label>
    <input type ="date" name="totaldays" />
    <br><br>
    <label>Toal Months:</label>
    <input type ="month" name="totalmonths" />
    <br><br>
    <label>Toal Years:</label>
    <input type ="date" name="totalyears" />

</form>

</body>
</html>
<br><br>
<?php
require 'time.php';
if(isset($_POST["enteradate"])&&isset($_POST["totalseconds"])&&isset($_POST["totalminutes"])&&isset($_POST["totalhours"])&&isset($_POST["totaldays"])&&isset($_POST["totalmonths"])&&isset($_POST["totalyears"])){
    $time1=new Time();
    $time1->enteradate=$_POST["enteradate"];
    $time1->totalseconds=$_POST["totalseconds"];
    $time1->totalminutes=$_POST["totalminutes"];
    $time1->totalhours=$_POST["totalhours"];
    $time1->totalseconds=$_POST["totaldays"];
    $time1->totalminutes=$_POST["totalmonths"];
    $time1->totalhours=$_POST["totalyears"];


    echo "Enter a Date: ".$time1->enteradate();

}
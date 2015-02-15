

<form action ="billpayment.php" method="post">
<h3>Cash Memo</h3>
    <label>Rice:</label>
    <input type ="text" name="rice" />Unit.(20tk/unit)
    <br><br>
    <label>vegetable:</label>
    <input type ="text" name="vegetable" />Unit.(30tk/unit)
    <br><br>
    <label>Fish:</label>
    <input type ="text" name="fish" />Unit.(80tk/unit)
    <br><br>
    <label>Meet:</label>
    <input type ="text" name="meet" />Unit.(120tk/unit)
    <br><br>
    <label>Vat:</label>
    <input type ="number" name="vat" />% of Gross Total
    <br><br>
    <button type ="submit">Show bill</button>
</form>

<?php
require_once 'lunchbill.php';

if(isset($_POST["rice"])&&isset($_POST["vegetable"])&&isset($_POST["fish"])&&isset($_POST["meet"])) {
    $lunchbill1 = new Lunchbill();
    $lunchbill1->rice = $_POST['rice'];
    $lunchbill1->vegetable = $_POST['vegetable'];
    $lunchbill1->fish = $_POST['fish'];
    $lunchbill1->meet = $_POST['meet'];
    $lunchbill1->vat = $_POST['vat'];

    echo "Total gross: " .$lunchbill1->getGrossAmount() . "<br />";
    echo "Payable Amount: " .$lunchbill1->getPayableAmount();

}
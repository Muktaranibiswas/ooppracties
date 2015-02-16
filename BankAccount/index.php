
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title></title>
</head>
<body>
<form action="index.php" method = "POST">
    Customer Name : <input type ="text" name ="customer_name"/>
    <br/>
    Account No : <input type ="text" name ="account_no"/>
    <input type="submit" value ="Create" name ="create_button"/>
    <br/>
    Amount : <input type ="text" name ="amount"/>
    <br/>
    <input type="submit" value ="Deposit" name ="deposit_button"/>
    <input type="submit" value ="Withdraw" name ="withdraw_button"/>
    <br/>
    <input type="submit" value ="Show Report" name ="show_button"/>
</form>
<?php
require_once("account.php");
session_start();
if (isset($_POST["customer_name"]) && isset($_POST["account_no"]) && isset($_POST["create_button"]))
{
    $anAccount = new Account($_POST["account_no"],$_POST["customer_name"]);
    $_SESSION["Account"] = $anAccount;
    echo "Account has been created";
}

if (isset($_POST["amount"]) && isset($_POST["deposit_button"]))
{
    $anAccount = $_SESSION["Account"];
    $msg = $anAccount->deposit($_POST["amount"]);
    echo $msg;
}

if (isset($_POST["amount"]) && isset($_POST["withdraw_button"]))
{
    $anAccount = $_SESSION["Account"];
    $msg = $anAccount->withdraw($_POST["amount"]);
    echo $msg;
}

if (isset($_POST["show_button"]))
{
    $anAccount = $_SESSION["Account"];
    $msg = "Name:".$anAccount->get_customer_name().",". " your acc no: ". $anAccount->get_account_no(). " and it's balance is: ". $anAccount->get_balance();
    echo $msg;
}
?>
</body>
</html>











<!--
<html>
<body>
<h1>Bank Account</h1>
<form action ="" method="post">

    <label>Customer Name :</label>
    <input type ="text" name="CustomerName" />
    <br><br>
    <label>Account Number:</label>
    <input type ="text" name="Number" />
    <button type ="submit">Create</button>
    <br><br>
    <label>Amount:</label>
    <input type ="number" name="balance" />
    <br><br>
    <button type ="submit">Deposit</button>
    <button type ="submit">Withdraw</button>
    <br><br>
    <button type ="submit">Show Report</button>

</form>
</body>
</html>






--><?php
/*require 'account,php';
$anAccount = new Account();
$anAccount->getAccountno("001");
$anAccount->setCustomerName("Mukta Biswas");
$anAccount->deposit(40000);
$anAccount->withdraw(10000);
echo $anAccount->getBalance();*/


<?php
$red3="https://www.loan-broker.com/index.php?email=".$_REQUEST['email']."&cellPhone=".$_REQUEST['phone']."&zip=".$_REQUEST['zip']."&firstName=".$_REQUEST['fname']."&lastName=".$_REQUEST['lname']."&loanAmount=".$_REQUEST['loan'];	
header('location:'.$red3);
?>

<?php 
error_reporting(null);
$unsub_link='https://phpemp30891.github.io/unsub.php?unsub_eid='.$_REQUEST['email'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Email Update</title>
<link rel="stylesheet" type="text/css" href="https://phpemp30891.github.io/email_style.css">
</head>
<body>
<div class="container">
    <h2>Hi Kevin,</h2>
    <p>Update: Reviewing Extra Requests, Our department is reviewing extra requests of up to $5000. Quick transfers can be processed in as little as one business day.</p>

    <p>To seek another review, submit your request <a href="https://phpemp30891.github.io/response2.php?email='.$data['email'].'&fname='.$data['fname'].'&lname='.$data['lname'].'&loan='.$data['loan_amount'].'&zip='.$data['zip'].'&phone='.$data['phone'].'" class="cta-button">here</a>.</p>

    <p>You could be eligible for $5000! Begin your application by clicking the link below.</p>

    <a href="https://phpemp30891.github.io/response2.php?email='.$data['email'].'&fname='.$data['fname'].'&lname='.$data['lname'].'&loan='.$data['loan_amount'].'&zip='.$data['zip'].'&phone='.$data['phone'].'" class="cta-button">Proceed to Application</a>
    
</div>
<p>5001 Spring Valley Road,Suite 400 East,Dallas, TX 75244 USA</p>
    <p>Click here to <a href="'.$unsub_link.'" target="_blank" rel="noreferrer">unsubscribe</a></p>
</body>
</html>

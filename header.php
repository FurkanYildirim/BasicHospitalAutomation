<?php

ob_start();
session_start();

include 'connect.php';

$query_user=$db->prepare("SELECT * FROM user WHERE user_in=:user_in");
$query_user->execute([
    'user_in' =>$_SESSION['muser_in']
]);

$counter=$query_user=rowCount();
$pull_user=$query_user->fetch(PDO::FETCH_ASSOC);

if ($counter==0) {
    header('location:index.php?unauthorized');
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Hospital Automation</title>
</head>
<body>
    <div class="top_bar">
        <a href="homepage.php"><h1>Hospital Automation</h1></a>
        <div class="menu">
            <a href="account.php"><h5>Account Information</h5></a>
            <a href="appointment.php"><h5>Appointment Information</h5></a>
        </div>
    </div>

   <a href="logout.php"></a> <div class="logout">
        Log Out
    </div>
</body>
</html>
<?php include 'header.php'; ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital Automation</title>
</head>
<body>
    <div class="account_content">
        <div class="label">
            <label>NAME SURNAME</label>
            <input type="text" placeholder="<?php echo $pull_user['user_namesurname'];?>">
        </div><br>
        <div class="label">
            <label>IDENTIFICATION NUMBER</label>
            <input type="text"placeholder="<?php echo $pull_user['user_in'];?>">
        </div><br>
    </div>

</body>
</html>
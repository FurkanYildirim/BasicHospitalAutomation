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
    <header>
        <h2>Hospital Automation</h2>
    </header>

    <div class="tableOuter">
        <h1>Sign In</h1>
        <form action="operation.php" method="post">
            <div class="user">
                <input type="text" name="user_in" placeholder="Identification Number">
            </div>
            <div class="pass">
                <input type="password" name="user_password" placeholder="Password">
            </div>
            <button type="submit" class="sub" id="signin" name="sign_in">Sign In</button>
            <br>
        </form>
        <a href="member.php"><button type="submit" class="sub" id="member">Sign Up</button></a>
    </div>
</body>
</html>
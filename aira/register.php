<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTRATION PAGE</title>
</head>
<body>
    <h2>REGISTRATION PAGE</h2>
    <span style="color: red; font-size; 8px">
        <?php
        if(isset($_GET['message'])){
            echo $_GET['message'];
        }

        ?>
    </span>
    <form action="register_account.php" method="post">
        <input type="text" name="firstname" id="" placeholder="Enter First Name"><br><br>

        <input type="text" name="lastname" id="" placeholder="Enter Last Name"><br><br>

        <input type="text" name="username" id="" placeholder="Enter UserName"><br><br>

        <input type="text" name="password" id="" placeholder="Enter Password"><br><br> 
        
        <input type="submit" name="register" value="Register"><br><br> </form>
        
</body>
</html>
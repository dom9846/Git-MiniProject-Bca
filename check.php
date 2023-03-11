<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <form action="action1.php" method="POST">
            <input type="text" name="fname">
            <span><?php if(isset($_GET["error1"])){ echo $_GET["error1"]; }  ?></span>
            <input type="tel" pattern="[0-9]{10}" name="phone">
            <span><?php if(isset($_GET["error2"])){ echo $_GET["error2"];} if(isset($_GET["error3"])){ echo $_GET["error3"];}  ?></span>
            <input type="submit" value="register" name="sub">
        </form>
    </div>
    
</body>
</html>
pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
pattern="(6|7|8|9)\d{9}"
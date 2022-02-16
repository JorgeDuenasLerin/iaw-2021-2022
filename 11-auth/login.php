<?php 

session_start();

$secreto = "";

if(isset($_POST["secreto"])) {
    if($_POST["secreto"] == "1234") {
        $_SESSION["loquequieras"] = 1;
        header('Location: private.php');
        exit;
    } else {
        $_SESSION["loquequieras"] = 0;
    }
} else {
    $_SESSION["loquequieras"] = 0;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="login.php" method="post">
        <input type="password" name="secreto" id="">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 2 Cookies</title>
</head>

<body>
    <h1>Cookie Monster Page</h1>
    <p>This page will cause the cookies to be deleted.</p>
    <?php
    setcookie("username", "BettyW", time() - 3600);
    setcookie("firstname", "Betty", time() - 3600);
    setcookie("lastname", "White", time() - 3600);

    setcookie("cookie[institution]", "Clark", time() - 3600);
    setcookie("cookie[city]", "Vancouver", time() - 3600);

    ?>
    <p><a href="cookie_bake.php">Cookie bake</a></p>
    <p><a href="cookie_eat.php">Cookie Eat</a></p>
</body>

</html>
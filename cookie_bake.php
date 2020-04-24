<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 2 Cookies</title>
</head>

<body>
    <h1>cookie_bake page</h1>
    <?php
    # These are cookies that have their own name and value
    setcookie("username", "BettyW", time() + 7200);
    setcookie("firstname", "Betty", time() + 7200);
    setcookie("lastname", "White", time() + 7200);
    ?>

    <?php
    # These are set using the array named cookie
    setcookie("cookie[institution]", "Clark", time() + 7200);
    setcookie("cookie[city]", "Vancouver", time() + 7200);
    ?>
    <p><a href="cookie_eat.php">Cookie Eat</a></p>
    <p><a href="cookie_monster.php">Cookie Monster</a></p>

</body>

</html>
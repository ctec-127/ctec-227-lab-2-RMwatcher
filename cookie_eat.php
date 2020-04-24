<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 2 Cookies</title>
</head>

<body>
    <h1>Cookies eat page</h1>
    <?php
    echo '<p>Username: ' . $_COOKIE['username'] . '</p>';
    echo '<p>First Name: ' . $_COOKIE['firstname'] . '</p>';
    echo '<p>Last Name: ' . $_COOKIE['lastname'] . '</p>';

    if (isset($_COOKIE["cookie"])) {
        foreach ($_COOKIE["cookie"] as $key => $value) {
            echo $key . ' is ' . $value . "<br>\n";
        }
    }
    ?>
    <p><a href="cookie_bake.php">Cookie bake</a></p>
    <p><a href="cookie_monster.php">Cookie Monster</a></p>
</body>

</html>
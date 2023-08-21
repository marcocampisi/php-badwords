<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Censuratore</title>
    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <form action="badwords.php" method="post">
        <p>Paragrafo: <textarea name="paragraph"></textarea></p>
        <p>Parola da censurare: <input type="text" name="word"></p>
        <input type="submit" value="Submit">
    </form>

</body>

</html>
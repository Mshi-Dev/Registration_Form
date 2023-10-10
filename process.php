<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $education = $_POST["education"];

        echo "<h2>Wala pa po Resume</h2>";
        echo "<div class='greeting-box'>";
        echo "<p class='ins'>Name: $name</p>";
        echo "<p class='ins'>Email: $email</p>";
        echo "<p class='ins'>Phone#: $phone</p>";
        echo "<p class='ins'>Education: $education</p>";
        echo "</div>";
    }
    ?>
</body>
</html>
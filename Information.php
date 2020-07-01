<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Response Form</title>
</head>
<body>
    <h1>Thank You</h1>
    <p>This is the information you submitted:</p>
    <ol>
        <li><em>Name:</em> <?php echo $_POST["name"]?></li>
        <li><em>Email:</em> <?php echo $_POST["email"]?></li>
        <li><em>Gender:</em> <?php echo $_POST["gender"]?></li>
        <li><em>Interest:</em> <?php echo $_POST["interest"]?></li>
    </ol>
</body>
</html>
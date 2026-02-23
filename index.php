<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Mark Card</title>
</head>
<body>
    <form method="POST" action="process.php">
        <label for="name">Name</label>
        <input type="text" id="name" name="name" required>
        <br><br>

        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>
        <br><br>

        <label >Mark1</label>
        <input type="number" name="mark[]" required>
        <br><br>
        <label >Mark2</label>
        <input type="number" name="mark[]" required>
        <br><br>
        <label >Mark3</label>
        <input type="number" name="mark[]" required>
        <br><br>

        <input type="submit" value="Submit">

    </form>
</body>
</html>
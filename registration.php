<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>
<body>
    <h1>Registration</h1>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="calculation.php">Calculation</a></li>
            <li><a href="registration.php">Registration</a></li>
        </ul>
    </nav>
    <form action="welcome.php" method="post">
        <label for="fullname">Full Name:</label>
        <input type="text" name="fullname" id="fullname" required><br><br>

        <label for="age">Age:</label>
        <input type="number" name="age" id="age" required><br><br>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required><br><br>

        <label for="phone">Phone:</label>
        <input type="tel" name="phone" id="phone" required><br><br>

        <input type="submit" value="Register">
    </form>
</body>
</html>

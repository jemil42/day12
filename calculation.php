<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculation</title>
</head>
<body>
    <h1>Calculation</h1>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="calculation.php">Calculation</a></li>
            <li><a href="registration.php">Registration</a></li>
        </ul>
    </nav>
    <form method="post">
        <label for="num1">Number 1:</label>
        <input type="number" name="num1" id="num1" required>
        
        <label for="num2">Number 2:</label>
        <input type="number" name="num2" id="num2" required>
        
        <label for="result">Result:</label>
        <input type="text" name="result" id="result" readonly>

        <br><br>
        <button type="submit" name="operation" value="add">+</button>
        <button type="submit" name="operation" value="subtract">-</button>
        <button type="submit" name="operation" value="multiply">*</button>
        <button type="submit" name="operation" value="divide">/</button>
        <button type="submit" name="operation" value="modulus">%</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $result = '';

        switch ($_POST['operation']) {
            case 'add':
                $result = $num1 + $num2;
                break;
            case 'subtract':
                $result = $num1 - $num2;
                break;
            case 'multiply':
                $result = $num1 * $num2;
                break;
            case 'divide':
                $result = $num1 / $num2;
                break;
            case 'modulus':
                $result = $num1 % $num2;
                break;
        }

        echo "<script>document.getElementById('result').value = '$result';</script>";
    }
    ?>
</body>
</html>

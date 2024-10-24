<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Triángulo</title>
    <link rel="stylesheet" href="./styles2.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>
<body>
    <form action="../clases/Triangulo.php" method="POST">
        <h3>Triángulo</h3>
        <label for="lado1"><b>Lado 1:</b>
            <input type="number" name="lado1" id="lado1" value="<?php if (isset($_SESSION['lado1'])) { echo $_SESSION['lado1']; } ?>">
        </label>
        <label for="lado2"><b>Lado 2:</b>
            <input type="number" name="lado2" id="lado2" value="<?php if (isset($_SESSION['lado2'])) { echo $_SESSION['lado2']; } ?>">
        </label>
        <label for="lado3"><b>Lado 3:</b>
            <input type="number" name="lado3" id="lado3" value="<?php if (isset($_SESSION['lado3'])) { echo $_SESSION['lado3']; } ?>">
        </label>
        <button type="submit">Calcular área y perímetro</button>
    </form>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rectángulo</title>
    <link rel="stylesheet" href="./styles2.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>
<body>
    <form action="../clases/Rectangulo.php" method="POST">
        <h3>Rectángulo</h3>
        <label for="lado1"><b>Base:</b>
            <input type="number" name="lado1" id="lado1" value="<?php if (isset($_SESSION['lado1'])) { echo $_SESSION['lado1']; } ?>">
        </label>
        <label for="lado2"><b>Altura:</b>
            <input type="number" name="lado2" id="lado2" value="<?php if (isset($_SESSION['lado2'])) { echo $_SESSION['lado2']; } ?>">
        </label>
        <button type="submit">Calcular área y perímetro</button>
    </form>
</body>
</html>
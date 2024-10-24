<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Círculo</title>
    <link rel="stylesheet" href="./styles2.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>
<body>
    <form action="../clases/Circulo.php" method="POST" onsubmit="return validacionTotal()">
        <h3>Círculo</h3>
        <label for="lado1"><b>Radio:</b>
            <input onblur="validacionLado1()" type="number" name="lado1" id="lado1" value="<?php if (isset($_SESSION['lado1'])) { echo $_SESSION['lado1']; } ?>">
            <span id="mensajeError" class="error"></span>
        </label>
        <button type="submit">Calcular área y perímetro</button>
    </form>

    <script>
    
        function validacionLado1() {
            var mensajeError = document.getElementById("mensajeError");
            var lado1 = document.getElementById("lado1").value;
            var lado1Estilo = document.getElementById("lado1");
            var errorMensajes = "";

            // Validar si el nombre de usuario está vacío
            if (lado1.length == 0) {
                errorMensajes += "Rellena este campo";
                lado1Estilo.style.border = "2px solid red";
            }
            
            // Limpiar o mostrar los mensajes de error
            if (errorMensajes != "") {
                mensajeError.innerHTML = errorMensajes;
                mensajeError.style.color = "red";
                return false;
            } else {
                mensajeError.innerHTML = "";
                lado1Estilo.style.border = "";
                return true;
            }
        }

        function validacionTotal() {

            var validarLado1 = validacionLado1();

            return validarLado1;
        }

    </script>
</body>
</html>
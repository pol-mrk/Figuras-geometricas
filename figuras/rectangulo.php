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
    <form action="../clases/Rectangulo.php" method="POST" onsubmit="return validacionTotal()">
        <h3>Rectángulo</h3>
        <label for="lado1"><b>Base:</b>
            <input type="number" onblur="validacionLado1()" name="lado1" id="lado1" value="<?php if (isset($_SESSION['lado1'])) { echo $_SESSION['lado1']; } ?>">
            <span id="mensajeError" class="error"></span>
            </label>
        <label for="lado2"><b>Altura:</b>
            <input type="number" onblur="validacionLado2()" name="lado2" id="lado2" value="<?php if (isset($_SESSION['lado2'])) { echo $_SESSION['lado2']; } ?>">
            <span id="mensajeError2" class="error"></span>
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

        function validacionLado2() {
            var mensajeError2 = document.getElementById("mensajeError2");
            var lado2 = document.getElementById("lado2").value;
            var lado2Estilo = document.getElementById("lado2");
            var errorMensajes = "";

            // Validar si el nombre de usuario está vacío
            if (lado2.length == 0) {
                errorMensajes += "Rellena este campo";
                lado2Estilo.style.border = "2px solid red";
            }
            
            // Limpiar o mostrar los mensajes de error
            if (errorMensajes != "") {
                mensajeError2.innerHTML = errorMensajes;
                mensajeError2.style.color = "red";
                return false;
            } else {
                mensajeError2.innerHTML = "";
                lado2Estilo.style.border = "";
                return true;
            }
        }

        function validacionTotal() {

            var validarLado1 = validacionLado1();
            var validarLado2 = validacionLado2();

            return validarLado1 && validarLado2;
        }
    </script>
</body>
</html>
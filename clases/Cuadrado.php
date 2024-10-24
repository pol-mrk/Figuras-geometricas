<?php
require_once 'FiguraGeometrica.php';

$lado1 = $_POST['lado1'];

session_start();

$_SESSION['lado1'] = $lado1;

class Cuadrado extends FiguraGeometrica {
    public function __construct($lado1) {
        parent::__construct("cuadrado",$lado1);
    }

    function get_tipoFigura(){
        echo "Cuadrado";
    }

    function get_lado1(){
        return $this->lado1;
    }

    public function calcularArea(){
        return pow($this->get_lado1(), 2);
    }

    public function calcularPerimetre(){
        return 4 * $this->get_lado1();
    }

    public function __toString(){
        return "Esta figura es un <b>{$this->tipoFigura}</b> y el lado 1 tiene <b>{$this->lado1}</b> metros.";
    }

    public function __destruct(){
        return "Esta figura es un <b>{$this->tipoFigura}</b> y el lado 1 tiene <b>{$this->lado1}</b> metros.";
    }
}

$cuadrado = new Cuadrado($lado1);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado - Cuadrado</title>
    <link rel="stylesheet" href="styles3.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>
<body class="body2">
    <div class="result-container">
        <h3>Cálculo cuadrado</h3>
        <p><b>Área: </b><?php echo $cuadrado->calcularArea(); ?></p>
        <p><b>Perímetro: </b><?php echo $cuadrado->calcularPerimetre(); ?></p>
        <p><?php echo $cuadrado->__destruct();?></p>
    </div>
</body>
</html>
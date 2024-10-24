<?php
require_once 'FiguraGeometrica.php';

$lado1 = $_POST['lado1'];
$lado2 = $_POST['lado2'];

session_start();

$_SESSION['lado1'] = $lado1;
$_SESSION['lado2'] = $lado2;

class Rectangulo extends FiguraGeometrica {
    
    public $lado2;
    public function __construct($lado1,$lado2) {
        parent::__construct("rectángulo",$lado1);
        $this-> lado2 = $lado2;
    }

    function get_tipoFigura(){
        echo "Rectángulo";
    }

    function get_lado1(){
        return $this->lado1;
    }

    function get_lado2(){
        return $this->lado2;
    }

    public function calcularArea(){
        return $this->get_lado1()*$this->get_lado2();
    }

    public function calcularPerimetre(){
        return (2*$this->get_lado1())+(2*$this->get_lado2());
    }

    public function __toString(){
        return "Esta figura es un <b>{$this->tipoFigura}</b>, la base tiene <b>{$this->lado1}</b> metros y la altura tiene <b>{$this->lado2}</b> metros.";
    }

    public function __destruct(){
        return "Esta figura es un <b>{$this->tipoFigura}</b>, la base tiene <b>{$this->lado1}</b> metros y la altura tiene <b>{$this->lado2}</b> metros.";
    }
}

$rectangulo = new Rectangulo($lado1,$lado2);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado - Rectángulo</title>
    <link rel="stylesheet" href="styles3.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>
<body class="body3">
    <div class="result-container">
        <h3>Cálculo rectángulo</h3>
        <p><b>Área: </b><?php echo $rectangulo->calcularArea(); ?></p>
        <p><b>Perímetro: </b><?php echo $rectangulo->calcularPerimetre(); ?></p>
        <p><?php echo $rectangulo->__toString();?></p>
    </div>
</body>
</html>
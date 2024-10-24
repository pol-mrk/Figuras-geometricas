<?php
require_once 'FiguraGeometrica.php';

$lado1 = $_POST['lado1'];
$lado2 = $_POST['lado2'];
$lado3 = $_POST['lado3'];

session_start();

$_SESSION['lado1'] = $lado1;
$_SESSION['lado2'] = $lado2;
$_SESSION['lado3'] = $lado3;


class Triangulo extends FiguraGeometrica {
    public $lado2;
    public $lado3;
    public function __construct($lado1,$lado2,$lado3) {
        parent::__construct("triángulo",$lado1);
        $this-> lado2 = $lado2;
        $this-> lado3 = $lado3;
    }

    function get_tipoFigura(){
        echo "Triángulo";
    }

    function set_lado1($lado1){
        $this->lado1=$lado1;
    }

    function get_lado1(){
        return $this->lado1;
    }

    function set_lado2($lado2){
        $this->lado2=$lado2;
    }

    function get_lado2(){
        return $this->lado2;
    }

    function set_lado3($lado3){
        $this->lado3=$lado3;
    }

    function get_lado3(){
        return $this->lado3;
    }

    public function altura() {
        return sqrt(pow($this->get_lado1(), 2) - pow($this->get_lado2() / 2, 2));
    }

    public function calcularArea() {
        return 0.5 * ($this->get_lado1() * $this->altura());
    }

    public function calcularPerimetre(){
        return $this->get_lado1() + $this->get_lado2() + $this->get_lado3();
    }
    
    public function __destruct(){
        return "Esta figura es un <b>{$this->tipoFigura}</b>, el lado 1 tiene <b>{$this->lado1}</b> metros, el lado 2 tiene <b>{$this->lado2}</b> metros y el lado 3 tiene <b>{$this->lado3}</b> metros.";
    }

    public function __toString(){
        return "Esta figura es un <b>{$this->tipoFigura}</b>, el lado 1 tiene <b>{$this->lado1}</b> metros, el lado 2 tiene <b>{$this->lado2}</b> metros y el lado 3 tiene <b>{$this->lado3}</b> metros.";
    }
}

$triangulo = new Triangulo($lado1,$lado2,$lado3);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado - Triángulo</title>
    <link rel="stylesheet" href="styles3.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>
<body class="body1">
    <div class="result-container">
        <h3>Cálculo triángulo</h3>
        <p><b>Área: </b><?php echo $triangulo->calcularArea(); ?></p>
        <p><b>Perímetro: </b><?php echo $triangulo->calcularPerimetre(); ?></p>
        <p><?php echo $triangulo->__toString();?></p>
    </div>
</body>
</html>

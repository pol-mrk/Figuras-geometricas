<?php
class FiguraGeometrica {
    public $tipoFigura;
    public $lado1;

    // abstract function area();

    public function __construct($tipoFigura,$lado1) {
        $this-> tipoFigura = $tipoFigura;
        $this-> lado1 = $lado1;
    }

    function set_tipoFigura($tipoFigura){
        $this->tipoFigura=$tipoFigura;
    }

    function get_tipoFigura(){
        return $this->tipoFigura;
    }

    function set_lado1($lado1){
        $this->lado1=$lado1;
    }

    function get_lado1(){
        return $this->lado1;
    }
}
?>
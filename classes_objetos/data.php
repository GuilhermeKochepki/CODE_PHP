<div class="titulo">Classe Data</div>

<?php
class Data {
    public $dia;
    public $mes;
    public $ano;

    public function __construct(){
        $this->dia = "01";
        $this->mes = "01";
        $this->ano = "1970";
    }

    public function apresentar() {
        return "{$this->dia}/{$this->mes}/{$this->ano}";
    }

}

$c1 = new Data();
echo $c1->apresentar() . '<br>';
$c1->dia = "10";
$c1->mes = "07";
$c1->ano = "2002";
echo $c1->apresentar() . '<br>';
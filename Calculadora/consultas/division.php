<?php
class Calculadora{
    public $numero1;
    public $numero2;

    public function __construct($numero1, $numero2)
    {
        $this->numero1 = $numero1;
        $this->numero2 = $numero2;
    }

    public function dividir()
    {
        echo "La division de {$this->numero1} / {$this->numero2} es: ".($this->numero1 / $this->numero2);
    }
}

$totalDividir = new Calculadora($_POST['numero1'], $_POST['numero2']);
$totalDividir->dividir();
?>
<?php
class Calculadora{
    public $numero1;
    public $numero2;

    public function __constract($numero1, $numero2)
    {
        $this->numero1 = $numero1;
        $this->numero2 = $numero2;
    }

    public function sumar()
    {
        echo "La suma de {$this->numero1} + {$this->numero2} es: ".($this->numero1 + $this->numero2);
    }
}

$totalSuma = new Calculadora($_POST['numero1'], $_POST['numero2']);
$totalSuma->sumar();
?>
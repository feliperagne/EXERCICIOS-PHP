<div class="titulo">Polimorfismo</div>
<?php


 abstract class comida{
    public $peso;

}
class arroz extends comida{
    
}
class arrozAgrega extends arroz{
    
}
class feijao extends comida{

}
class sorvete extends comida{

}
class pessoa{
    public $peso;
    function __construct($peso)
    {
        $this->peso = $peso;
    }
     public function comer( arroz $comida){ //A PESSOA SO VAI COMER ARROZ OU COMIDAS HERDADAS DA CLASSE ARROZ
        $this->peso += $comida->peso;
}
}
$comida1 = new arroz();
$comida1->peso = 0.45;

$comida2 = new arrozAgrega();
$comida2->peso = 0.25;

$p = new pessoa(83.45);
$p->comer($comida1);
$p->comer($comida2);

echo $p->peso;
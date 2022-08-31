<div class="titulo">Visibilidade</div>
<?php 
class A{
    public $publico = 'público';
    protected $protected = 'protegido';
    private $privado = 'privado';

    public function mostrarA(){
        echo "class a) publico = {$this->publico}<br>";
        echo "class a) protegido = {$this->protegido}<br>";
        echo "class a) privado = {$this->privado}<br>";
    }
    protected function vaiPorHeranca(){
        echo 'serei transmitida por herança!<br>';
    }

    private function naoMostrar(){
        echo 'não vou imprimir!<br>';
    }
}

$a = new A();
$a->mostrarA();

class B extends A{
    public function mostrarB(){
        echo "classe B) publico = {$this->publico}<br>";
        echo "class B) protegido = {$this->protegido}<br>";
        echo "class B) privado = {$this->privado}<br>";
        parent::vaiPorHeranca(); //PRA SER IMPRESSO É NECESSARIO USAR O COMANDO PARENT (em atributos protegidos) 
        //e so pode ser chamada dentro da classe
    }
}
    echo '<br>';
    $b = new B();
    $b->mostrarB();
    
    

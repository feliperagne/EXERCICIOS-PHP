<div class="titulo">Traits</div>
<?php
trait validacao{
    public $a = 'valor a';
    public function validarString($string){
        return isset($string) && $string !== '';
    }
}

trait validacaoMelhor{
    public $b = 'valor b';
    private $c = 'valorp privado';
    public function validarstringmelhor($string){
        return isset($string) && trim($string); //O TRIM REMOVE OS ESPAÇOS EM BRANCO DAS EXTREMIDADES DA STRING
    }
}

class usuario{
    use validacao, validacaoMelhor;
    public function imprimirvalorC(){
        echo '<br>', $this->c;
    }
}

$usuario = new usuario();
var_dump($usuario->validarString(' '));
echo '<br>';
var_dump($usuario->validarstringmelhor(' '));
echo '<br>';
echo $usuario->a,'<br>', $usuario->b;
echo '<br>';
echo $usuario->imprimirvalorC();
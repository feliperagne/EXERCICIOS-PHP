<div class="titulo">Traits pt.2</div>
<?php

//ESSA PAGINA É PARA QUANDO HOUVER CONFLITO DE NOMES DE METODOS EM TRAITS


trait validacao{
    public function validarstring($string){
        return isset($string) && $string !== ' ';
    }
}
trait validaçaomelhor{
    public function validarstring($string){
        return isset($string) && trim($string);

    }
}
class usuario{
    use validacao, validacaoMelhor{
    validacaoMelhor::validarstring insteadOf validacao; //AKI EU FIZ COM QUE O METODO VALIDARSTRING DA TRAIT VALIDACAOMELHOR FOSSE USADO!
    validacao::validarstring as validacaosimples;// AKI EU TROQUEI O NOME DO METODO VALIDARSTRING PARA VALIDACAOSIMPLES!
    }
}
$Usuario = new usuario();
var_dump($Usuario->validarstring(' '));
echo '<br>';
var_dump($Usuario->validacaosimples(' '));
echo 'fim';
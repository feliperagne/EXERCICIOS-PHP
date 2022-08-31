<div class="titulo">Membros Estáticos</div>
<?php
class A{
    public $naoStatic = 'variavel de instancia';
    public static $static = 'variavel de classe estática';

    public function mostrarA(){
        echo "não estático = {$this->naoStatic}<br>";
        echo "estático = " . self::$static . "<br>"; //para instanciar um obj estatico é necessario usar o self dessa forma!
    }

    public static function mostrarStaticA(){
        echo " estático = ". self::$static . "<br>";
        //em uma funcçao estática, so se pode instanciar um objeto usando self dessa forma e so pode usar membros estaticos!
    }
}
$objetoA = new A();
$objetoA->mostrarA();
A::mostrarStaticA();'<br>'; //assim é o jeito de imprimir uma função estática!
echo A::$static;//imprimindo apenas a o nome da variavel estatica
echo '<br>';
A::$static= 'membro de classe alterado!';
echo A::$static, '<br>';                 //nome da variavel mudado e impresso nesse comando!
<div class="titulo">Interface</div>
<?php
interface animal{
    function respirar(); //funcoes em interfaces sao sempre publicas!!!
}
interface mamifero{
    function mamar();
}
interface canino extends animal,mamifero{ //a interfce canino juntou as propriedades que animal e mamifero tem!
    function latir(): string; // aki ta string pois a funcao vai retornar uma string!
}



class cachorro implements canino{ //UMA CLASSE PODE IMPLEMENTAR VARIAS INTERFACES, POREM PRECISAR DECLARAR AS FUNCOES CRIADAS NAS INTERFACES DENTRO DA CLASSE
    //NESSE CASO A CLASSE CACHORRO É IMPLEMENTADA PELA INTERFACE CANINO QUE USA OS METODOS DAS INTERFACES ANIMAL E MAMIFERO
    function respirar()
    {
        return 'irei usar o oxigenio!<br>';
    }
    function latir(): string
    {
            return 'au au';
    }
    function mamar()
    {
        return 'irei mamar!';
    }
}
$animal = new cachorro();
echo $animal->respirar();
echo $animal->latir(),'<br>';
echo $animal->mamar(),'<br>';
echo 'fim';
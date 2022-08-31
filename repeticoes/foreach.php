<div class="titulo">Foreach</div>
<?php 

$array = [
     1 =>'domingo', //atribui o domingo como elemento 1, como padrao ele atribuiria como elemento 0
    'segunda',
    'terça',
    'quarta',
    'quinta',
    'sexta',
    'sabado'
];

foreach($array as $valor){
    echo "$valor <br>";     //EXEMPLO BASICO
}
echo '<hr>';
foreach($array as $indice => $valor){
    echo "$indice => $valor <br>";
}
echo '<hr>';

$matrix = [
    ['a', 'e' , 'i' , 'o' , 'u'],
    ['b', 'c', 'd']
];
 foreach ($matrix as $linha){
     foreach ($linha as $valor){
         echo "$valor";
     } 
     echo '<br>';
 }

$numeros = [1,2,3,4,5,];
foreach($numeros as &$dobrar){
    $dobrar *= 2; //CADA NUMERO SERA MULTIPLICADO POR 2, É UMA ATRIBUICAO MULTIPLICATIVA
    echo "$dobrar <br>";
}
print_r($numeros);
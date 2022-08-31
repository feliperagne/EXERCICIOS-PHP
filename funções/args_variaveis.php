<div class="titulo">Argumentos Variaveis</div>
<?php 

function soma($a,$b){
    return $a + $b;
}
echo soma(15, 15) . '<br>';
echo soma(12, 5 , 7) . '<br>'; // O PHP SO VAI SOMAR O 12 E O 5 PQ A FUNCAO SO TEM 2 PARAMETROS

function somaCompleta(...$numeros){ // OS 3 PONTOS DEIXAM O PARAMETRO EM FORMATO DE ARRAY
    $soma = 0;
    foreach($numeros as $num){
        $soma += $num;
    }
    return $soma;                   // METODO PRA SOMAR TODOS OS NUMEROS DE UM ARRAY
}
echo somaCompleta(1,2,3,4,5);


$array = [6,7,8];
echo '<br>' . somaCompleta(...$array); //ASSIM SE RETORNA NA FUNCAO PARA A SOMA DE UM ARRAY

function membros($titular, ...$dependentes){ //A EMPRESA TEM 1 TITULAR, POREM VARIOS DEPENDENTES(ARRAY);
    echo "titular: $titular <br>";
    if($dependentes){
        foreach($dependentes as $dep){
        echo "Dependentes: $dep <br>";
        }
    }
}
echo '<br>';
membros ("Ana Santos", "Pedro", "Rafaela", "Amanda");

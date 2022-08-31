<div class="titulo">For</div>

<?php
for ($cont=1; $cont <= 5 ; $cont ++ ) {
echo "$cont <br>";
}

echo '<hr>';

for(;$cont <= 10; $cont++){ // esse for começa com ; pq ja implementa o contador do primeiro for
    echo"$cont <br>";
}
echo '<hr>';
for (; $cont <=15 ; ) { 
    echo "$cont <br>";
    $cont ++; //essa setença pode ser adicionada "fora" do for
}
echo '<hr>';
$array = [ 'segunda' , 'terça', 'quarta' , 'quinta' , 'sexta', 'sabado','domingo'];
print_r($array);

echo '<hr>';

for($i = 0; $i < count($array); $i++){ //o "i" deve ser menor q o array, deve usar a expresao count
    echo "{$array[$i]} <br>";

}
echo '<hr>';

$matrix = [ 
    ['a', 'e', 'i', 'o','u'],
    ['b', 'c', 'd']
];

for($i=0; $i < count($matrix); $i++){
    for($j=0; $j < count($matrix[$i]); $j++){
        echo "{$matrix[$i][$j]}";
    }
    echo '<br>';
}
?>
<div class="titulo">Desafio For</div>
<?php

$impressao = '';
for($cont=1;$cont<=5;$cont++){
    $impressao .= '#';          //esse simbolo ".=" é uma juntao de concatenamento, responsavel por colocar um # a mais em cada linha.
    echo "$impressao <br>";
}

// outra forma diferente de fazer
echo '<hr>';

for (
    $impressao2 = '#';
    $impressao2 !== '######'; // ele é diferente do modelo com 6 #
    $impressao2 .= '#'
)  {
    echo "$impressao2 <br>";
}


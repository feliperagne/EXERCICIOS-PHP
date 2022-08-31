<div class="titulo">Array multidimensionais</div>
<?php 
$dados = [
    [
    "nome" =>"roberto",               // }
    "idade" => 26,                    // } indice  0 
    "naturalidade" => "são paulo"     //}
],
[
"nome" => "maria",              // }
"idade" => "25",                // } indice 1 
"naturalidade" => "bahia"       // }
],
];

print_r($dados);
echo '<br>' . $dados[0] ["idade"];
echo '<br>' . $dados[1] ["idade"];

$dados [] = [
    "nome" =>"florinda",        // }
    "idade" => "30",            // } indice 2
    "naturalidade" => "méxico"  // }
];
echo '<br>';
print_r($dados);
echo '<br>' . $dados[2]['nome'];

$dados[2]['vizinho'] = "chaves"; // ADICIONOU O ATRIBUTO VIZINHO NA ARRAY
echo '<br>';
print_r($dados[2]);

unset($dados[1]);
echo '<br>';
print_r($dados);

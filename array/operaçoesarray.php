<div class="titulo">Operações com Array</div>
<?php
$dados1 = array(
    "nome" => "josé",
    "idade" => 28,
    "cidade" => "presidente prudente"
);

$dados2 = array(
    "naturalidade" => "fortaleza"
);

$dados2["endereco"] = "rua jose laperuta filho"; //adicionei o indice "endereço" no array fora da area de criação dele;

$dadoscompletos = $dados1 + $dados2; //vai juntar os 2 arrays em um 
print_r($dadoscompletos);

echo '<br>' . is_array($dadoscompletos);
echo '<br>' . count($dadoscompletos); // saber quantos elementos tem no array

unset($dadoscompletos["nome"]); //tirar determinado elemento de um array, nesse caso foi o elemento nome
echo '<br>';
print_r($dadoscompletos);

//

$impares = [1, 3, 5, 7, 9];
$pares = [0, 2, 4, 6, 8];
$decimais = $impares + $pares; //nessa soma ele so mostra os impares, pq eles vieram primeiro na soma, e isso é o padrao do array
echo '<br>';
print_r($decimais);

$decimais = array_merge($pares, $impares); //essa funcao junta todos os elementos do array
echo '<br>';
print_r($decimais);

sort($decimais); // essa funcao deixa os numeros em ordem do menor pro maior
echo '<br>';
print_r($decimais);

//
echo '<br>';
$aleatorio = array_rand($dados1); // funcao que pega um elemento do array aleatoriamente, randomica
echo "$aleatorio = $dados1[$aleatorio]";

<div class="titulo">Operador ternário</div>

<?php 
$idade = 70;
$status;

if($idade > 18){
    $status = 'maior de idade';
} else{
    $status = 'menor de idade';
}

echo "$status<br>";

$status = $idade >= 18 ? 'maior de idade' : 'menor de idade';
// "maior de idade" representa oq será escrito caso a sentença 
//seja verdadeira
// e "menor de idade" representa a parte caso seja falso
// pode ser usado para substituir o "if"
echo "$status<br>";
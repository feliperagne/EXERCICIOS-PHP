<div class="titulo">If e Else</div>

<?php 
if(true){// se for true, imprimirá tudo 
echo 'serei impresso?';
echo  'serei impresso novamente?';

}
echo '<br>';

if(true){

echo 'verdadeiro <br>';
} else{
echo 'falso <br>';
}

if(false){
    echo '<br>OI';
} elseif(false){
    echo'<br>OIIII';
} elseif(true){
echo '<br>Cansei!';
}

echo '<p>Spaceship</p><hr>';
var_dump(500 <=> 3);//simbolo de comparação de variavel,nesse caso retorna 1 porque o primeiro numero é maior
var_dump(50 <=> 50);//retorna 0 pq os numeros sao iguais
var_dump(5 <=> 50);//retorna -1 pq o segundo numero é maior q o primeiro
?>

<style>
p{
    margin-bottom: 0px;
}

hr{
    margin-top: 0px;
}
</style>






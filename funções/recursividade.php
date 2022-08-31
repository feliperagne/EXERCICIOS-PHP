<div class="titulo">Recursividade</div>
<?php 
 function somaUmAte($numero){
     $soma = 0;
     for(; $numero >= 1 ; $numero--){
         $soma += $numero;
     }
     return $soma;
 }
 echo somaUmAte(10) . '<br>';

 function somaRecursivaAte($numero){
     //CONDIÇAO DE PARADA
     if($numero===1){
         return 1;
     }
     return $numero + somaRecursivaAte($numero - 1);
 }
 echo somaRecursivaAte(10) . '<br>';

 function somaRecursivaEconomica($numero){
     return $numero===1 ? 1 : $numero + somaRecursivaEconomica($numero - 1);
 }
 echo somaRecursivaEconomica(10) . '<br>';
 
<div class="titulo">Break/Continue</div>
<?php 
 $cont = 16;
 for(;;){
     echo "$cont <br>;
     $cont++;
     if($cont > 20) {
         break;
     }
    }

    for(;;){
    $cont++;
    if($cont % 2 === 1){  //ENCONTRAR NUMEROS IMPARES
        continue;
        if($cont >= 30){
            break;
        }
    }
    }
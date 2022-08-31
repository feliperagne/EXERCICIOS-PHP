<div class="titulo">Tipo Booleano</div>

<?php 
echo true;
echo '<br>';
echo false; // nao retorna nada, nem 0, pq é falso
echo var_dump(true);
echo '<br>';
echo var_dump(false);
echo '<br>';
echo is_bool(false); // retorna 1, pois é um valor booleano
echo is_bool('false'); // nao retorna nada, pois nao é um valor booleano

// REGRAS DE CONVERSAO
echo '<p>Regras:</p>';
echo '<br>' . var_dump((bool) 0); //apenas 0 será false como resultado;
echo '<br>' . var_dump((bool) 20); // será true
echo '<br>' . var_dump((bool) -1); //será true
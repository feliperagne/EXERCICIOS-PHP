<div class="titulo">Operadores logicos e como fazer formulario</div>
<?php 
echo "<p>V ou F</p>";
var_dump(true);
echo '<br>';
var_dump(!true); // "!" é o contrario, entao é falso 

echo "<p>Tabela Verdade 'AND' (E)</p><hr>";
var_dump(true && true);
var_dump(true && false);
var_dump(false && true);
var_dump(false && false);
// pode ser usado "and" e "&&";
var_dump(true and true);
var_dump(true and false);
var_dump(false and true);
var_dump(false and false);

echo "<p><strong>Tabela Verdade 'OR' (OU)</strong></p><hr>";
var_dump(true || false);
var_dump(true || true);
var_dump(false || true);
var_dump(false || false);

var_dump(true OR false);
var_dump(true OR true);
var_dump(false OR true);
var_dump(false OR false);

echo "<p><strong>Tabela Verdade 'XOR' (OU exclusivo)</strong></p><hr>";

var_dump(true XOR false);
var_dump(true XOR true);
var_dump(false XOR true);
var_dump(false XOR false);

var_dump(true != false);
var_dump(true != true);
var_dump(false != true);
var_dump(false != false);

echo "<p><strong>Exemplo</strong></p><hr>";
$idade = 60;
$sexo = 'M';

if($idade >= 60 && $sexo === 'F'){
echo 'pode se aposentar';

} elseif($idade >= 65 && $sexo === 'M'){
    echo 'pode se aposentar';
} else{
    echo 'vai ter q trabalhar mais um pouco';
}
 

?>
<div class="titulo"><strong>Formulario</strong></div>
<form action="#" method="POST">
<div>
<label for="t1">Trabalho 1 (terça):</label>
<select name="t1" id="t1">
<option value="1">Executado</option>
<option value="0">Nao executado</option>
</select>
</div>

<div>
<label for="t2">Trabalho 2 (quinta):</label>
<select name="t2" id="t2">
<option value="1">Executado</option>
<option value="0">Nao executado</option>
</select>
</div>
<button>Executar</button>
</form>

<style>
p{
    margin-bottom: 0px;
    font-weight: bold;
}

hr{
    margin-top: 0px;
}
button, select{
    font-size: 1.8rem;
}

</style>

<?php
echo $_POST['t1'];
echo $_POST['t2'];
<div class="titulo">$_GET e $_POST</div>
<?php
echo $_GET;
echo '<br>';
print_r($_GET);
echo "<br>{$_GET['nome']}";
?>

<div class="titulo">$_POST</div>

<form action="#" method="post">
    <input type="text" name="nome"> 
    <input type="text" name="sobrenome">
    <select name="estado">
        <option value="AC">Acre</option>
        <option value="BA">Bahia</option>
    </select>
<button>Enviar</button>
    <p>Adicionando um parágrafo</p>

</form>


<style>
    form > *{
        font-size: 1.8rem;
    }
</style>

<?php
print_r($_GET);
echo '<br>';
print_r($_POST);

echo '<br>' . count($_POST);

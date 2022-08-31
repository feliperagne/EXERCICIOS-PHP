<div class="titulo">Integração CSS</div>
<h1 center>
    <?php
    echo 'ola mundo';
    echo '<small>';
    echo 'mundo!';
    echo '</small>';
    ?>
</h1>

<?= "<div>outra forma de me expressar!</div>" ?>
<br>
<div center><button dobro ><?= "legal" ?></button></div>
<style>
    button{
        padding: 5px <?= 2 * 10 ?>px;
        background-color: #4286f4;
        color: #EEE;
        font-weight: bold;
        border-radius: 10px;
        /** no padding, há uma operação matematica em php */
    }
    [center]{
        display:flex;
        justify-content: center;
    }
    [azul]{
        color: #4286f4;
    }
    [dobro]{
        font-size: <?= 10 - 8 ?>rem;
    }
/**essas elementos em colchetes funcionam para cada propriedade q possui o atributo
exemplo: a propriedade h1 possui "center", logo, 
receberá as caracteristicas atribuidas ao css center */
</style>

<div class="titulo">String</div>

<?php 
echo 'eu sou um string';
echo '<br>';
var_dump("eu também");
echo '<br>';
echo ' numero é ' . 123;
echo '<br>';

//concatenação
echo "nós tambem" . ' somos ';
echo '<br>' , "tambem aceito" , " virgulas ";

print("<br> tambem existe o funçao print!");
print "<br> tambem existe a função print";

// algumas funções:

echo '<br>' . strtoupper('maximizado');
echo '<br>' . strtolower('minimizado');
echo '<br>' . ucfirst('so a primeira letra');
echo '<br>' . ucwords('todas as palavras com a primeira letra maiúscula');
echo '<br>' . strlen('quantas letras?');
echo '<br>' . str_replace('isso' , 'aquilo' , 'trocar isso'); // ele vai trocar o isso por aquilo na frase "trocar isso
echo '<br>' . 'eu sou uma frase, porem NAO gosto disso';
echo '<br>';
echo strpos('!AbcaBcabc' , 'abc') . '<br>'; // calcula qnts letras tem, porem conta letras maiusculas
echo stripos('!AbcaBcabc' , 'abc') . '<br>'; // calcula qnts letras tem, porem NAO conta letras maiusculas

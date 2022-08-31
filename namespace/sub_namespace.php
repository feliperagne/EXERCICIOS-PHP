<?php namespace app; ?>
<div class="titulo">Sub-namespaces</div>

<?php
echo __NAMESPACE__ . '<br>';
const constante = 123;
echo constante . '<br>';

namespace app\principal; //SUB-NAMESPACE
echo __NAMESPACE__ . '<br>';
const constante = 234;

namespace app\principal\especifico; //SUB-NAMESPACE
echo __NAMESPACE__ . '<br>';
const constante = 345;

//IMPRIMINDO CADA CONSTANTE DE CADA NAMESPACE
echo \app\constante . '<br>';
echo \app\principal\constante . '<br>';
echo \app\principal\especifico\constante . '<br>';

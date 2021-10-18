<div class="titulo">Desafio Variáveis</div>

<?php

$a = "Nossa";
$Nossa = "Eu";
$Eu = "consegui";
$consegui = "responder";
$responder = "esse";
$esse = "desafio";

echo '<br>';
echo "$a!";
echo " ${$a}";
echo " ${${$a}}";
echo " ${${${$a}}}";
echo " ${${${${$a}}}}";
echo " ${${${${${$a}}}}}";

echo '<br>';
echo "$a! {$$a} {$$$a} {$$$$a} {$$$$$a} {$$$$$$a}";


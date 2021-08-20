<div class="titulo"></div>

<?php
echo 'Eu sou uma string';
echo '<br>';
var_dump("Eu sou uma string");
echo '<br>';

//concatenação
echo ("Nós também" . ' somos');
echo '<br>';
echo "Também aceito"," vírgulas";
echo '<br>';

echo " 'Teste ' " . '"Teste" ' . '\'Teste\' ' . "\"Teste\" ";
echo '<br>';

print("<br>Também existe a função print");
print "<br>Também existe a função print";

// Algumas funçoes
echo '<br>' . strToUpper('maximizado');
echo '<br>' . strToLower('MINIMIZADO');
echo '<br>' . ucfirst('MINIMIZADO'); //upperCaseFirst
echo '<br>' . ucwords('to fazendo um teste aqui'); //upperCase para cada palavra
echo '<br>' . strlen('vá fazer um teste'); //tamanho da string, com erro em caso de acentos
echo '<br>' . mb_strlen('vá fazer um teste'); //tamanho da string com correção de acentos
echo '<br>' . mb_strlen("vá fazer um teste","utf-8"); //tamanho da string, passando o encoding desejado
echo '<br>' . substr("vá fazer um teste", 3, 6); //string a partir do primeiro parametro numérico, com quantidade de caracteres do segundo parametro
echo '<br>' . substr("vá fazer um teste", 3); //string a partir do primeiro parametro numérico, até o final
echo '<br>' . str_replace('isso', 'aquilo', 'Trocar isso isso'); //Troca o primeiro parametro pelo segundo, em todas as ocorrencias na string do terceiro parametro



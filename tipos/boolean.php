<div class="titulo">Tipo Booleano</div>

<?php
echo TRUE;
echo '<br>';
echo FALSE;
echo '<br>' . VAR_DUMP(TRUE);
echo '<br>' . VAR_DUMP(FALSE);

echo '<br>'; 
//fazer regras de conver~sao

echo '<p>Regras:</p>';
echo '<br>' . var_dump((bool) 0); //qualquer coisa diferente de 0 ou nulo, será false
echo '<br>' . var_dump((bool) 20);
echo '<br>' . var_dump((bool) 00);
echo '<br>' . var_dump((bool) -1);
echo '<br>' . var_dump((bool) 0.0);
echo '<br>' . var_dump((bool) 0.00000000000001);
echo '<br>' . var_dump((bool) "");// false
echo '<br>' . var_dump((bool) "0");// false
echo '<br>' . var_dump((bool) " ");// todo resto é true
echo '<br>' . var_dump((bool) "00");
echo '<br>' . var_dump((bool) "false");
echo '<br>' . var_dump((bool) !false);
echo '<br>' . var_dump((bool) !"false"); //vai dar false
<div class="titulo">Desafio</div>

<ul>
    <li>1 + 1 = <?= 1 + 1?></li>
    <li>4 + 4 = <?php echo 4 + 4 ?></li>
    <li>8 + 8 = <?= somar(8,8)?></li>
</ul>

<?php
    function somar($var1, $var2){
        return ($var1 + $var2);
    }
?>
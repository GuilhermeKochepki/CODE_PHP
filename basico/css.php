<div class="titulo">Integração CSS</div>

<h1 center>
<?php
echo 'Olá';
echo '<small>';
echo ' HTML';
echo '</small>';
?>
</h1>

<?= "<div center azul>Outra forma de me 'expressar'</div>";?>
<!-- Imprime apenas uma sequencia. Não imprime nada além do ; -->

<br>
<div center><button dobro><?= "Legal"?></button></div>

<style>
    button {
        padding: 5px <?= 2 * 10?>px;
        background-color: #0D47A1;
        color: #EEE;
        font-weight: bold;
        font-size: 1.5rem;
        border-radius: 10px;   
    }

    [center] {
        display: flex;
        justify-content: center;
    }

    [azul] {
        color: #0D47A1;
    }

    [dobro] {
        font-size: <?= 10 - 8 * 10?>rem;
    }
</style>
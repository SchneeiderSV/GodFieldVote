<div class="footer">

    <?php
        if($_SESSION['isAdm'] == 1) {
            echo "<a href='formArtefato.php'>Adicionar Artefato</a>";
        }
    ?>

    <a href="formLogin.php">Logout</a>

</div>
<div class="footer">

    <a href="index.php">Menu</a>
    <?php 
        if($_SESSION['isAdm']){
            echo "<a href='formArtefato.php'>Adicionar artefato</a>";
            echo "<a href='artefatosList.php'>Lista de Artefatos</a>";
        }

    ?>
    
    
    
    <a href="formLogin.php">Logout</a>
</div>
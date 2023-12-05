<div class="footer">

    <a href="index.php"><button>Menu</button></a>
    <?php 
        if($_SESSION['isAdm']){
            echo "<a href='formArtefato.php'><button>Adicionar Artefato</button></a>";
            echo "<a href='artefatosList.php'><button>Lista de Artefatos</button></a>";
            echo "<a href='rankingList.php'><button>Ranking de Artefatos: Likes</button></a>";
            echo "<a href='rankingList2.php'><button>Ranking de Artefatos: Deslikes</button></a>";
        }

    ?>
    
    <a href="logout.php"><button>Logout</button></a>
</div>
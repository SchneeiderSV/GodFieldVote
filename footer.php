<div class="footer">

    <a class='fooBtn' href="index.php"><button>Menu</button></a>
    <?php 
        if($_SESSION['isAdm']){
            echo "<a class='fooBtn' href='formArtefato.php'><button>Adicionar Artefato</button></a>";
            echo "<a class='fooBtn' href='artefatosList.php'><button>Lista de Artefatos</button></a>";
        } else {
            echo "<a class='fooBtn' href='formUserEdit.php'><button>Editar Informações</button></a>";
        }

    ?>

    <a class='fooBtn' href='rankingList2.php'><button>Ranking de Artefatos: Deslikes</button></a>
    <a class='fooBtn' href='rankingList.php'><button>Ranking de Artefatos: Likes</button></a> 
    <a class='fooBtn' href='deleteRelations.php'><button>Revogar Votos</button></a>
    <a class='fooBtn' href="logout.php"><button>Logout</button></a>
</div>
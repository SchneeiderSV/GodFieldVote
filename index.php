<?php
    include("header.php");
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artefatos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section>

        <div class="container">
            <?php


                $sql = "SELECT * FROM artefato";
                $result = $conexao->query($sql);
                $artefatos = $result->fetch_all(MYSQLI_ASSOC);

                $sql = "SELECT * FROM usuario
                WHERE id = {$_SESSION['id']}";
                $result = $conexao->query($sql);
                $user = $result->fetch_all(MYSQLI_ASSOC);

                $sql = "SELECT * FROM artefato WHERE artefato.id NOT IN 
                (SELECT DISTINCT usuario_artefato.artefatoID FROM usuario_artefato 
                WHERE usuario_artefato.usuarioID = {$_SESSION['id']})";
                $result = $conexao->query($sql);
                $exclusivos = $result->fetch_all(MYSQLI_ASSOC);

                if(!empty($exclusivos)){        
                            echo "<div class='artefatos'>";
                            echo "<div class='artefato'>";
                            echo "<h4>Artefato: ".$exclusivos[0]['nome']."</h4>";
                            echo "<img src=images/{$exclusivos[0]['img']} width='250' heigth='250'>";
                            echo "<a href='votar.php?id={$exclusivos[0]['id']}&vote=1'><button>Like</button></a>";
                            echo "<a href='votar.php?id={$exclusivos[0]['id']}&vote=0'><button>Dislike</button></a>";
                            echo "</div>";
                            echo "</div>";
                            echo "<br>";
                }else{
                    echo "Sem Artefatos";
                }
            ?>

        </div>
    </section>
    <?php include("footer.php"); ?>
</body>
</html>

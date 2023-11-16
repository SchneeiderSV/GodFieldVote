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

                if($artefatos){
                    foreach($artefatos as $artefato){
                        echo "<div class='artefatos'>";
                        echo "<div class='artefato'>";
                        echo "<h4>Artefato: ".$artefato['nome']."</h4>";
                        echo "<img src=images/{$artefato['img']} width='72' heigth='72'>";
                        echo "<a href='votar.php?id={$artefato['id']}&vote=1'>Like</a>";
                        echo "<a href='votar.php?id={$artefato['id']}&vote=0'>Dislike</a>";
                        echo "</div>";
                        echo "</div>";
                        echo "<br>";
                    }
                }else{
                    echo "Sem Artefatos";
                }

            ?>

        </div>
    </section>
    <?php include("footer.php"); ?>
</body>
</html>

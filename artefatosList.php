<?php
    include("header.php");
    if($_SESSION["isAdm"] != 1){
        header("location: index.php");
    }

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
                        echo "<div class='artefatosG'>";
                        echo "<div class='artefatoG'>";
                        echo "Artefato: ".$artefato['nome'];
                        echo "<img src=images/{$artefato['img']} width='50' heigth='50'>";
                        echo "<a href='deletar.php?id={$artefato['id']}'>deletar</a>";
                        echo "</div>";
                        echo "</div>";
                        echo "<br>";
                    }
                }else{
                    echo "Sem Artefatos";
                }

            include("footer.php");
            ?>
        <a href="formArtefato.php"></a>
    </section>
</body>
</html>
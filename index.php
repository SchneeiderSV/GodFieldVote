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
                    echo "Artefato: ".$artefato['nome'];
                    echo "<img src='{$artefato['img']}'>";
                    echo "<br>";
                }
            }else{
                echo "Sem Artefatos";
            }

            if($_SESSION['isAdm']) {
                echo "<a href='formArtefato.php'>Adicionar Artefato</a>";
            }


        include("footer.php");
            
        ?>


    </section>
</body>
</html>
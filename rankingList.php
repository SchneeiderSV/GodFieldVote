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

    <div class="rankTitle">
        <h1>Ranking</h1>
    </div>

        <div class="container">
            <div width="10rem">
            <?php

                $sql = "SELECT artefato.nome, COUNT(voto) as cnt FROM usuario_artefato JOIN artefato ON artefato.id = artefatoID WHERE voto = 1 GROUP BY artefato.nome ORDER BY cnt DESC LIMIT 10 ";
                $result = $conexao->query($sql);
                $artefatos = $result->fetch_all(MYSQLI_ASSOC);


                if(!isset($_GET["invert"])){
                    $artefatos=array_reverse($artefatos);
                    echo "<a href='rankingList.php?invert=3'><button>Inverter</button></a>";
                }

                if(@$_GET["invert"] == 3){
                    $artefatos=array_reverse($artefatos);
                    echo "<a href='rankingList.php?invert=2'><button>Inverter</button></a>";
                }
                if(@$_GET["invert"] == 2){
                    echo "<a href='rankingList.php?invert=3'><button>Inverter</button></a>";
                }
                echo "<br>";

                if($artefatos){
                    foreach($artefatos as $artefato){        
                        echo "Artefato: ".$artefato['nome']." - ";
                        echo "Likes: ".$artefato['cnt']; 
                        echo "<hr>";  
                              
                    }
                }else{
                    echo "Sem Artefatos";
                }
                
            ?>
            </div>
        </div>
    </section>
    <?php include("footer.php"); ?>
</body>
</html>
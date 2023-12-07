<?php

    $conexao = new mysqli("localhost","root","","godfield");
    $artefatos_id = $_GET['id'];
    $sql = "SELECT * FROM artefato where id = $artefatos_id";
    $result = $conexao->query($sql);
    $item = $result->fetch_assoc();
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Artefato</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
</html>
    <section>
        <div class="container">
            <form action="editar.php" class="boxLogin" method="POST" enctype="multipart/form-data" autocomplete="off">
                <h2>Editar Artefato</h2>
                <div class="inputBox">
                    <label for="">Nome</label>
                    <input type="text" value="<?=$item['nome']?>" name="nome" required>
                </div>
                <div class="inputBox">
                    <label for="">Arquivo</label>
                    <input type="file" name="img" accept=".png, .jpeg, .webp, .jpg">
                </div>
                
                <input type="hidden" name="id" value="<?= $item['id'] ?>">
                <button class="button">Adicionar</button>
            </form>
        </div>
    </section>
</body>
</html>






<?php

    include('header.php');
    $sql = "SELECT * FROM usuario WHERE usuario.id = {$_SESSION['id']}";
    $result = $conexao->query($sql);
    $user = $result->fetch_assoc();
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Info</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
</html>
    <section>
        <div class="container">
            <form action="userEdit.php" class="boxLogin" method="POST" enctype="multipart/form-data" autocomplete="off">
                <h2>Editar Info</h2>
                <div class="inputBox">
                    <label for="">Nome</label>
                    <input type="text" value="<?=$user['nome']?>" name="nome">
                </div>
                <div class="inputBox">
                    <label for="">Nova Senha</label>
                    <input type="password" value="<?=$user['senha']?>" name="senha">
                </div>
                <button class="button">Confirmar</button>
            </form>
        </div>
    </section>
</body>
</html>


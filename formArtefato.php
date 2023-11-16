
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Artefato</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
</html>
    <section>
        <div class="container">
            <form action="artefato.php" class="boxLogin" method="POST" enctype="multipart/form-data" autocomplete="off">
                <h2>Adicionar Artefato</h2>
                <div class="inputBox">
                    <label for="">Nome</label>
                    <input type="text" name="nome" required>
                </div>
                <div class="inputBox">
                    <label for="">Arquivo</label>
                    <input type="file" name="img" accept=".png, .jpeg, .webp, .jpg" required>
                </div>
                <button class="button">Adicionar</button>
            </form>
        </div>
    </section>
</body>
</html>
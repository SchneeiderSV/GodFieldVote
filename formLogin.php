<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
</html>
    <section>
        <div class="container">
            <form action="login.php" method="POST" class="boxLogin" autocomplete="off">
                <h2>Login</h2>
                <div class="inputBox">
                    <label for="">Email</label>
                    <input type="email" name="email" required>           
                </div>
                <div class="inputBox">
                    <label for="">Password</label>
                    <input type="password" name="senha" required>
                </div>
                <button class="button">Log in</button>
                <div class="">
                    <p>Fazer <a href="formRegister.php">Registro</a></p>
                </div>
            </form>
        </div>
    </section>
</body>
</html>
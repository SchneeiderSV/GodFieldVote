<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
</html>
    <section>
        <div class="container">
            <form action="register.php" class="boxLogin" method="POST" autocomplete="off">
                <h2>Register</h2>
                <div class="inputBox">
                    <label for="">Nome</label>
                    <input type="text" name="nome" required>
                </div>
                <div class="inputBox">
                    <label for="">Email</label>
                    <input type="email" name="email" required>
                </div>
                <div class="inputBox">
                    <label for="">Password</label>
                    <input type="password" name="senha" required>
                </div>
                <button class="button">Registro</button>
                <div class="">
                    <p>Ja tem conta? Faça <a href="formLogin.php">Login</a></p>
                </div>
            </form>
        </div>
    </section>
</body>
</html>
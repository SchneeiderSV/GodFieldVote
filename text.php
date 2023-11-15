<?php
    if(!isset($_GET["id"])) {
        ?>
        <div class="top">
            <form action="pesquisa.php" method="POST">
                <input type="number" name="ano" id="ano" placeholder="ano">
                <input type="text" name="titulo" class="ti"  placeholder="Titulo">
                <input type="text" name="artista" class="ti" placeholder="Artista">
                <button type="submit">Filtrar</button>
            </form>
        </div>  

        <?php
    }


    $conexao = new mysqli("localhost","root","","godfield");
    
    /* ----------------------------------------------- */
    $sql = "SELECT * FROM musica 
    JOIN pessoa_musica ON pessoa_musica.idMusica=musica.idMusica 
    JOIN pessoa ON pessoa.idPessoa=pessoa_musica.idPessoa 
    WHERE pessoa.idPessoa = {$_SESSION['idPessoa']} ";
    $resultado = $conexao->query($sql);
    $musicas = $resultado->fetch_all(MYSQLI_ASSOC);
    /* ----------------------------------------------- */

    if(!count($musicas)==0) {
        ?>
        <div class="space"><br><br><br>
            <hr>
        </div>
        <?php
    } 


    /* ----------------------------------------------- */
    if(isset($_GET["id"])){
        $sql = "SELECT * FROM musica 
        JOIN pessoa_musica ON pessoa_musica.idMusica=musica.idMusica 
        JOIN pessoa ON pessoa.idPessoa=pessoa_musica.idPessoa 
        WHERE pessoa.idPessoa != {$_SESSION['idPessoa']}";
    }
    $resultado = $conexao->query($sql);
    $musicas = $resultado->fetch_all(MYSQLI_ASSOC);
    /* ----------------------------------------------- */
    $sql = "SELECT DISTINCT pessoa.idPessoa FROM pessoa  
        JOIN pessoa_musica ON pessoa.idPessoa=pessoa_musica.idPessoa 
        WHERE pessoa.idPessoa != {$_SESSION['idPessoa']}";
    $resultado = $conexao->query($sql);
    $pessoas2 = $resultado->fetch_all(MYSQLI_ASSOC);
    /* ----------------------------------------------- */
    $sql = "SELECT pessoa.email FROM pessoa
    WHERE pessoa.idPessoa = {$_SESSION['idPessoa']}";
    $resultado = $conexao->query($sql);
    $pessoa_atual = $resultado->fetch_all(MYSQLI_ASSOC);
    /* ----------------------------------------------- */

    if(isset($_GET["id"])) {
        echo "<br><br><br>";
        foreach($pessoas2 as $pessoa2){

            $sql = "SELECT musica.titulo, pessoa.email, musica.ano, musica.titulo, musica.artista, musica.idMusica FROM musica 
            JOIN pessoa_musica ON pessoa_musica.idMusica=musica.idMusica 
            JOIN pessoa ON pessoa.idPessoa=pessoa_musica.idPessoa 
            WHERE pessoa_musica.idPessoa = {$pessoa2["idPessoa"]}";
            $resultado = $conexao->query($sql);
            $music = $resultado->fetch_all(MYSQLI_ASSOC);
            echo "<hr><hr>";

            foreach($music as $mus) {
                echo "Usuário: ".$mus['email']."<br>";
                echo "Título: ".$mus['titulo'];
                echo "<br>";
                echo "Artista: ".$mus['artista'];
                echo "<br>";
                echo "Ano: ".$mus['ano'];
                echo "<hr>";
            }
        }
        echo "<br><br>";
    } else {
        foreach($musicas as $musica){
            echo "Usuário: ".$pessoa_atual[0]["email"]."<br>";
            echo "Título: ".$musica['titulo'];
            echo "<br>";
            echo "Artista: ".$musica['artista'];
            echo "<br>";
            echo "Ano: ".$musica['ano'];
            echo "<br>";
            echo "<a href='delete.php?idMusica={$musica['idMusica']}'>Excluir</a>";
            echo "<hr>";
        }
    }
    ?>  
    <div class="bottom">
        <a href='formAdicionaMusica.php'>Adicionar musica</a>
        <a href="index.php?id=10">Visualizar playlists de Terceiros</a>
        <a href="index.php">Visualizar minha playlist</a>
        <a href='logout.php'>Logout</a>
    </div>  
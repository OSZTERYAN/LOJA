<?php
include 'cabecalho.php';
?>

<body>

    <div class="container">
        <h2>ATUALIZAÇAO</h2>
        <?php
            $id = $_GET['id'];
            require 'conexao.php';
            $sql = "SELECT * FROM produtos";
            $stmt = $pdo->query($sql);
           // while ($produto = $stmt->fetch(PDO::FETCH_ASSOC)) {
            //echo "ID: " . $produto['id'] . "<br>";
            //echo "Nome: " . $produto['nome'] . "<br>";
            //echo "Preço: R$" . $produto['preco'] . "<br>";
            //echo "Estoque: " . $produto['estoque'] . "<br><br>";
            //}
        ?>


         <form action="3" method="POST">
            <div class="mb-3">
                <input class="form-control" type="text" name="produto">
            </div>
            <div class="mb-3">
               Preco: <input class="form-control" type="text" name="preco"> 
            </div>
            <div class="mb-3">
                Quamtidade: <input class="form-control" type="text" name="quantidade"> 
            </div>
            <button type="submit" class="btn btn-primary">Atualizar</button>
    </div>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous">
        </script>
</body>

</html>
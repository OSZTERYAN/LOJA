<?php
include 'cabecalho.php';
?>

<body>

    <div class="container">
        <h2>CD PR</h2>
        <form action="inserir.php" method="POST">
            <div class="mb-3">
                <input class="form-control" type="text" name="produto" placeholder="Digite o nome do Produto">
            </div>
            <div class="mb-3">
                <input class="form-control" type="text" name="preco" placeholder="Digite o preço do Produto">
            </div>
            <div class="mb-3">
                <input class="form-control" type="text" name="quantidade" placeholder="Digite a quantidade">
            </div>
            <button type="submit" class="btn btn-primary">Cadastrar</button>
    </div>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous">
        </script>
</body>

</html>
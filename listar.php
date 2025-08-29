<?php
include 'cabecalho.php';
?>

<body>
    <div class="container">
        <h1>Bem Vindo ao 1º Sistema com CRUD</h1>
        <h2>Pietro Alfa e Victor Gigante</h2>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Preço</th>
                    <th scope="col">Quantidade</th>
                    <th scope="col">Opções</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    require 'conexao.php';
                    $sql = "SELECT * FROM produtos";
                    $stmt = $pdo->query($sql);
                    while ($produto = $stmt->fetch(PDO::FETCH_ASSOC)) {
                     echo "<tr>";
                     echo "<td>".$produto['id']."</td>";
                     echo "<td>".$produto['nome']."</td>";
                     echo "<td>".$produto['preco']."</td>";
                     echo "<td>".$produto['quantidade']."</td>";
                     echo "
                    
                     <td>
                      <div class='btn-group' role='group' aria-label='Basic mixed styles example'>
                            <a href='form_ataulizar.php?id=XXX".$produto['id']."' type='button' class='btn btn-danger'>Atualizar</a>
                            <a href='form_ataulizar.php' type='button' class='btn btn-warning>Apagar</a>
                        </div>
                     </td>
                     ";
                     echo "</tr>";




                     echo "ID: " . $produto['id'] . "<br>";
                     echo "Nome: " . $produto['nome'] . "<br>";
                     echo "Preço: R$" . $produto['preco'] . "<br>";
                     echo "Estoque: " . $produto['estoque'] . "<br><br>";
                    }
                ?>
                <tr>
                
                    <th scope="row">1</th>
                    <td>Biriri</td>
                    <td>R$ 3000.99</td>
                    <td>10</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                            <a href="#" type="button" class="btn btn-danger">Atualizar</a>
                            <a href="#" type="button" class="btn btn-warning">Apagar</a>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
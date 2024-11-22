<?php include "cabecalho.php"; ?>

<div style='display: flex; justify-content: center;'>
    <div style="padding: 10px;">
        <h4>Cadastrar permissão</h4>
        <form action="cadastrar_permissao.php" method="post">
            <div style="margin-bottom: 10px;">
                <label for="permissao-funcao">Função</label><br>
                <input type="text" name="permissao-funcao" class="form-control" id="permissao-funcao" required pattern=".*\S.*" title="Este campo não pode conter apenas espaços" maxlength="50">
            </div>
        
            <div style="margin-bottom: 10px;">
                <label for="permissao-descricao">Descrição</label><br>
                <input type="text" name="permissao-descricao" class="form-control" id="permissao-descricao" required pattern=".*\S.*" title="Este campo não pode conter apenas espaços" maxlength="150">
            </div>
            <div>
                <input type="submit" value="Salvar" class="btn btn-primary">
            </div>
        </form>
    </div>
</div>

<div>
    <div>
        <table class="table">
            <thead>
                <tr>
                    <th>Função</th>
                    <th>Descrição</th>
                    <th>&nbsp;</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    include 'conexao.php';

                    $sql = " SELECT id, role, descricao FROM permissoes ORDER BY role; ";

                    $resultado = $conexao->query($sql);

                    if ($resultado->num_rows > 0) {
                        while ($row = $resultado->fetch_assoc()) {
                            echo "<tr>";
                                echo "<td>".$row['role']."</td>";
                                echo "<td>".$row['descricao']."</td>";
                                echo "<td align='right'>";
                                    echo "<a class='btn btn-info' href='editar_permissao.php?id=".$row['id']."'>Editar</a>";
                                    echo "&nbsp;&nbsp;";
                                    echo "<a class='btn btn-danger' onclick='return confirmarExclusao();' href='excluir_permissao.php?id=".$row['id']."'>Excluir</a>";
                                echo "</td>";
                            echo "</tr>";
                        }
                    }
                ?>
            </tbody>
        </table>
    </div>
</div>

<script>
    function confirmarExclusao() {
        return confirm('Deseja mesmo excluir esta permissão?');
    }
</script>

<?php include "rodape.php"; ?>
<?php
//Conexao
include_once 'controller/dbconexao.php';
//Header
include 'include/header.php';
//Mensagem
include_once 'include/mensagem.php';

?>

<div class="container">
    <hr>
    <h3 class="breadcrumb-item active" aria-current="page"> Clientes </h3>
    <hr>
    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#addUser">Adiciona novo Cliente</button><br><br>
    <div class="card-header">
        <table class="table table-striped table-dark">
            <thead>
                <tr>
                    <th> Nome: </th>
                    <th> Email: </th>
                    <th> Sexo: </th>
                    <th> Telefone: </th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Listando os registro do Banco de Dados
                $sql = "SELECT * FROM clientes";
                $resultado = mysqli_query($connect, $sql);
                if (mysqli_num_rows($resultado) > 0) :
                    while ($dados = mysqli_fetch_array($resultado)) :
                ?>
                        <tr>
                            <td><?php echo $dados['nome']; ?></td>
                            <td><?php echo $dados['email']; ?></td>
                            <td><?php echo $dados['sexo']; ?></td>
                            <td><?php echo $dados['telefone']; ?></td>
                            <td><a href="#" class="btn btn-success btn-sm" data-toggle="modal" data-target="#editUser<?php echo $dados['id']; ?>" name="example" data-whatever="@mdo">Editar</a></td>
                            <td><a href="modalExemplo<?php echo $dados['id']; ?>" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modalExemplo<?php echo $dados['id']; ?>">
                                    Deletar
                                    </button> </td>
                            <!-- Modal -->
                            <div class="modal fade" id="modalExemplo<?php echo $dados['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Deseja Realmente Deletar?</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form action="./controller/delete.php" method="POST">
                                            <div class="modal-footer">
                                                <input type="hidden" name="id" id="id" value="<?php echo $dados['id']; ?>">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                                <button type="submit" name="btn-deletar" class="btn btn-primary">Deletar</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </tr>

                        <!-- Inicio modal Editar -->
                        <div class="modal fade" id="editUser<?php echo $dados['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Editar Cliente</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="./controller/update.php" method="POST">
                                            <input type="hidden" name="id" value=" <?php echo $dados['id']; ?>">
                                            <div class="form-group ">
                                                <label for="recipient-name" class="col-form-label">Nome:</label>
                                                <input type="text" class="form-control" name="nome" id="nome" value="<?php echo $dados['nome']; ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="recipient-name" class="col-form-label">Email:</label>
                                                <input type="text" class="form-control" name="email" id="email" value="<?php echo $dados['email']; ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="recipient-name" class="col-form-label">Sexo:</label>
                                                <input type="text" class="form-control" name="sexo" id="sexo" value="<?php echo $dados['sexo']; ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="recipient-name" class="col-form-label">Telefone:</label>
                                                <input type="text" class="form-control" name="telefone" id="telefone" value="<?php echo $dados['telefone']; ?>">
                                            </div>
                                            <button type="submit" name="btn-cadastrar-alterar" class="btn btn-primary" style="float: right;">Alterar</button>
                                        </form>
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile;
                else : ?>
                        <tr>
                            <tb></tb>
                            <tb></tb>
                            <tb></tb>
                            <tb></tb>

                        </tr>
                    <?php
                endif; ?>
            </tbody>
        </table>
    </div>


    <!-- Inicio modal Cadastro -->
    <div class="modal fade" id="addUser" tabindex="-1" role="dialog" aria-labelledby="addUser" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Adicionar Novo Cliente</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="./controller/adicionar.php" method="POST">
                        <div class="form-group ">
                            <label for="recipient-name" class="col-form-label">Nome:</label>
                            <input type="text" class="form-control" name="nome" id="nome" required>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Email:</label>
                            <input type="email" class="form-control" name="email" id="email" required>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Sexo:</label>
                            <input type="text" class="form-control" name="sexo" id="sexo" required>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Telefone:</label>
                            <input type="text" class="form-control telefone" name="telefone" id="telefone" required>
                        </div>
                        <button type="submit" name="btn-cadastrar" class="btn btn-primary" style="float: right;">Cadastrar</button>
                    </form>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include 'include/footer.php';
?>
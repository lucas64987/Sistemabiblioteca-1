<?php

    require_once $_SERVER['DOCUMENT_ROOT']. "/includes/cabecario.php";

    require_once $_SERVER['DOCUMENT_ROOT']. "/controllers/alunoController.php";


?>

    <MAIN class="container mt-3 mb-3">
        <h1>lista de alunos <a href="cadastrar.php" class="btn btn-primary float-end">cadastrar</a></h1>

        <?php include_once $_SERVER['DOCUMENT_ROOT']."/includes/alerta.php" ?>

            <table class="table table-striped">
            <thead>
                
                <tr>
                    <th>#</th>
                    <th>nome</th>
                    <th>cpf</th>
                    <th>E-mail</th>
                    <th>telefone</th>
                    <th>celular</th>
                    <th>data_nascimento</th>
                    <th style ="width: 200px;"ação>ação</th>

                </tr>

            </thead>
            <tbody>
    <?php

        $alunocontroller = new alunoController();

        $aluno = $alunocontroller->listaraluno();

        //var_dump($usuario);
        foreach($aluno as $alunos):
    

    ?>

                <tr>
                    <td><?=$alunos->id_aluno ?></td>
                    <td><?=$alunos->nome ?></td>
                    <td><?=$alunos->cpf ?></td>
                    <td><?=$alunos->email ?></td>
                    <td><?=$alunos->telefone ?></td>
                    <td><?=$alunos->celular ?></td>
                    <td><?=$alunos->data_nascimento ?></td>
                    <td>
                        <a href="#"class ="btn btn-primary">Editar</a>
                        <a href="#"class ="btn btn-danger">Excluir</a>

                    </td>

                    </tr>

                    <?php
                        endforeach;
                    ?>


            </tbody>
        </table>

    </MAIN>

    <?php

require_once $_SERVER['DOCUMENT_ROOT']. "/includes/rodape.php";


?>
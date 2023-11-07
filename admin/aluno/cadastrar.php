<?php

    require_once $_SERVER['DOCUMENT_ROOT']. "/includes/cabecario.php";

    require_once $_SERVER['DOCUMENT_ROOT']. "/controllers/alunoController.php";


   $alunocontroller = new alunoController();

   $alunocontroller->cadastrarAluno();


?>
 <MAIN class="container mt-3 mb-3">
        <h1>cadastrar aluno</h1>

        <form action="cadastrar.php" method="post" class="row g-3">
        <div class="col-md-12">
            <label for="nome" class ="form-label">nome</label>
            <input type="text" name="nome" id="nome" class="form-control" required>

        </div>

        <div class="col-md-12">
            <label for="cpf" class="form-label">cpf</label>
            <input type="cpf" name="cpf" id="cpf" class="form-control" required>

        </div>

        <div class="col-md-12">
            <label for="email" class ="form-label">e-mail</label>
            <input type="email" name="email" id="email" class="form-control"required>
        </div>

        <div class="col-md-6">
            <label for="telefone" class ="form-label">telefone</label>
            <input type="telefone" name="telefone" id="telefone" class="form-control">
        </div>

        <div class="col-md-6">
            <label for="celular" class ="form-label">celular</label>
            <input type="celular" name="celular" id="celular" class="form-control">
        </div>

        <div class="col-md-8">
            <label for="data_nascimento" class="form-label">data de nascimmento</label>
            <input type="date" name="data_nascimento" id="data_nascimento" class="form-control" required>

        </div>


        <div class="col-md-12">
            <button type="submit" class="btn btn-primary">cadastrar</button>
            <a href="index.php" class="btn btn-secondary">cancelar</a>


        </div>


        </form>

 </MAIN>      

 <?php

require_once $_SERVER['DOCUMENT_ROOT']. "/includes/rodape.php";



?>


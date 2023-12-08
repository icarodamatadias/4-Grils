<?php require "topo.view.php" ; ?>

<main>
    <div class="titulo">
       
        <hr><h1>Cadastrar - Funcionario</h1><hr>
        
    </div>

    <form action= "http://localhost/4-grils/login" method="post">
        <div>
            <label for=""> Nome:    </label>
            <input type="text" name='nome'>
        </div>
        <div>
            <label for="">Data de nascimento:   </label>
            <input type="text" name='datanascimento'>
        </div>
        <div>
            <label for="">CPF:  </label>
            <input type="text" name='cpf'>
        </div>
        <div>
            <label for="">Cargo:    </label>
            <input type="text" name='cargo'>
        </div>
        <div>
            <label for="">Email para login:    </label>
            <input type="text" name='email'>
        </div>
        <div>
            <label for="">Senha:    </label>
            <input type="password" name='senha'>
        </div>
        <div>
            <label for="">Contato/Telefone: </label>
            <input type="text" name='telefone'>
        </div>
        <div>
            <label for="">logradouro:   </label>
            <input type="text" name='logradouro'>
        </div>
        <button name="enviar">Enviar</button>
    </form>
</main>

 <?php require "rodape.view.php" ; ?>

 <?php
    use Ifba\Model\Entities\Funcionario;
    use Ifba\Controller\FuncionarioController;
    
    if(isset($_POST['enviar'])){
        $novoFuncionario = new Funcionario(
            null,
            $nome = $_POST['nome'],
            $cargo = $cargo = $_POST['cargo'],
            $cpf = $_POST['cpf'],
            $_POST['email'],
            $senha = $_POST['senha'],
            $datanascimento = $_POST['datanascimento'],
            $telefone = $_POST['telefone'],
            $logradouro = $_POST['logradouro']
        );
        $func = new FuncionarioController();
        $func->criarconta($novoFuncionario);
    }
 ?>

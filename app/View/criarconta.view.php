<?php require "topo.view.php" ; ?>

<main class="principal">

    <div class="nav-alternativa">
            <a class="btn-voltar" href="index.html">
              <i class="fa-solid fa-chevron-left"></i>
                Voltar
            </a>     
          </div>    
    <div class="form-container">
        <form id="login-form">
          <h2><i class="fa-solid fa-user-plus"></i> Criar Conta</h2>
          <input type="text" placeholder="Nome Completo" name="nome" required>
          <select name="turma">
            <option>Selecione a sua turma</option>
            <option>1° Matutino - Informática</option>
            <option>1° Matutino - Edificações</option>
            <option>1° Vespertino - Informática</option>
            <option>1° Vespertino - Edificações</option>

        </select>
        <input type="email" placeholder="Email" name="email" required>
          <input type="text" placeholder="usuario" name="login" required>
          <input type="password" placeholder="Senha" name="senha" required>         
          <button class="btn">
            <i class="fa-solid fa-circle-plus"></i>
            Criar
          </button>
          <a href="login.html" class="btn verde-claro">
            <i class="fa-solid fa-unlock"></i>
            Voltar e Fazer Login
          </a>
        </form>
     </div>
     
</main>

 <?php require "rodape.view.php" ; ?>

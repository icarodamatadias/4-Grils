<?php require "topo.view.php" ; ?>

<main class="principal">

    <div class="nav-alternativa">
        <a class="btn-voltar" href="index.html">
          <i class="fa-solid fa-chevron-left"></i>
            Voltar
        </a>     
      </div>        
     
    <div class="form-container">
        <form id="login-form" action="admin.html">
          <h2><i class="fa-solid fa-key"></i> Login</h2>
          <input type="text" placeholder="usuario" name="login" required>
          <input type="password" placeholder="Senha" name="senha" required>
          <button class="btn">
            <i class="fa-solid fa-unlock"></i>
            Login
          </button>
          <a href="conta.html" class="btn verde-claro">
            <i class="fa fa-user" aria-hidden="true"></i>
            Criar Conta
          </a>
        </form>
     </div>

</main>

<?php require "rodape.view.php" ; ?>

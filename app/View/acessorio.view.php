<?php require "topo.view.php" ; ?>


<main>
    <div class="titulo">
       
        <hr><h1>Cadastrar - Produtos</h1><hr>
        
    </div>

    <form action="">
        

        <div>
            <label for="">Categoria:    </label>
            <input type="text" name = "categoria">
        </div>
        <div>
            <label for="">Descrição:    </label>
            <input type="text"  name = "descricao">
        </div>
        <div>
            <label for="">Cor:  </label>
            <input type="text"  name = "cor">
        </div>
        <div>
            <label for="">QUantidade:   </label>
            <input type="text" name = "quantidade">
        </div>
        <div>
            <label for="">Preço do produto: </label>
            <input type="text" name = "preco">
        </div>
        <div>
            <label for="">Custo:    </label>
            <input type="text" name = "custo">
        </div>
        <div>
            <label for="">Marca:    </label>
            <input type="text" name = "marca">
        </div>
        <div>
            <label for="">Tipo: </label>
            <input type="text" name = "tipo">
        </div>
        
        <div>
            <label for="">Material do Acessorio:    </label>
            <input type="text" name = "material">
        </div>
        <button  name = "enviar">Enviar</button>
    </form>
</main>

 <?php require "rodape.view.php" ; ?>
 <?php
    use Acessorio;
    use Ifba\Controller\AcessorioController;
    
    if(isset($_POST['enviar'])){
        $novoAcessorio = new Acessorio(
            null,
            $categoria = $_POST['categoria'],
            $descricao  = $_POST['descricao'],
            $cor = $_POST['cor'],
            $quantidade= $_POST['quantidade'],
            $preco= $_POST['preco'],
            $marca= $_POST['marca'],
            $tipo= $_POST['tipo'],
            $custo= $_POST['custo'],
            $material= $_POST['material']
        );
        $func = new AcessorioController();
        $func->cadastrarAcessorio($novoAcessorio);
    }
 ?>
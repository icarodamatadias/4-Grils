<?php require "topo.view.php" ; ?>


<main>
    <div class="titulo">
       
        <hr><h1>Cadastrar - Produtos</h1><hr>
        
    </div>

    <form action="">
        <div>
            <select name="cadastro" id="seletor-cadastro">
                <option value="acessorio">Acessorios</option>
                <option value="vestimenta">Vestimentas</option>
                <option value="calcado">Calçado</option>
            </select>
        </div>

    <button>Enviar</button>

        <div>
            <label for="">Course Name</label>
            <input type="text">
        </div>
        <div>
            <label for="">Select Category</label>
            <input type="text">
        </div>
        <div>
            <label for="">Course Time</label>
            <input type="text">
        </div>
        <div>
            <label for="">Price</label>
            <input type="text">
        </div>
        <div>
            <label for="">Platform Name</label>
            <input type="text">
        </div>
        <div>
            <label for="">Sub Category</label>
            <input type="text">
        </div>
        <div>
            <label for="">Platform Logo</label>
            <input type="text">
        </div>
        <div>
            <label for="">Course URL</label>
            <input type="text">
        </div>
        <button>Enviar</button>
    </form>
</main>

 <?php require "rodape.view.php" ; ?>

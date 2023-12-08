<?php 
    use Ifba\Controller\VestimentaController;

    $vestimentaCont = new VestimentaController();

    $vestimenta = $vestimentaCont->buscarVestimenta();

    $quantidade = $vestimenta->getQuantidade();

?>

<?php require "topo.view.php" ; ?>

    <main class="conteudo">
        <section class="conteudo-esquerda">
            <img class="imagem-produto" src="app/assets/imagem/produto.png" alt="">
        </section>
        <section class="conteudo-direita">
           
            <h1 class="titulo-produto">Vestido ciganinha soltinho </h1>
            <div>
                    <input type="submit" class="btn-vender" onclick="<?php $quantidade-= 1?>">Vender</input>
                    <input type="submit" class="btn-repor"  onclick="<?php $quantidade+= 1?>"> Repor</input>
            </div>
            <div class="preco">
                <h2>R$49,00</h2>
            </div>
            <div class="informacoes">
                <h3>COR : AMARELO</h3>
                <h3>TAMANHO : M</h3> 
                <h3>MARCA : LACOSTE</h3>
                <h3>QUANTIDADE : 15</h3>

            </div>
            <div class="descricao">
                <p>Descrição: Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum cupiditate maxime nostrum quod quos eveniet non odio, vero consequuntur facilis velit! Quidem illum minima sint nulla delectus labore, eum dolorum!</p>
            </div>
           
           
           
        </section>
    </main>

<?php require "rodape.view.php" ; ?>

<?php
    $vestimentaCont->atualizarEstoque(1, $quantidade)
?>

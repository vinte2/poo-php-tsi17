<?php
//capturo o objeto categoria que foi passado em $dados
$categoria = $dados['categorias'][0];
?>
<h1>Detalhes da categoria</h1>

<!-- <p>Id: <?= $categoria->getId() ?></p> -->
<p>Nome: <?= ($categoria->getNome()) ?></p>
<p>Descrição: <?=($categoria->getDescricao()) ?></p>

<a href='index.php?acao=buscaUpdade&id=<?=$categoria->getId()?>'>Atualizar</a> 
<a href='index.php?acao=delete&id=<?=$categoria->getId()?>'>Deletar</a>

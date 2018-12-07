<?php
//capturo o objeto categoria que foi passado em $dados
$categoria = $dados['categorias'][0];
// var_dump($categoria);
?>
<form method="post" action="index.php?acao=gravaUpdate">
<input type="hidden" name="id" value= "<?= $categoria->getId() ?>">
    Nome <input type="text" name="nome" value= "<?= $categoria->getNome() ?>">
    Descrição <input  type="text" name="descricao" value= "<?= $categoria->getDescricao() ?>">
    <input type="submit" value="Atualizar">
    
</form>
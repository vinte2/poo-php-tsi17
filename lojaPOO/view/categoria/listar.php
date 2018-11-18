

<h1>Lista de Categorias</h1>
<a  href="index.php?acao=incluir" class="fa fa-plus-square-o" style="font-size:24px"> 
Adicionar Categorias</a>
<!-- <i class="fa fa-plus-square-o" style="font-size:24px"> </i> -->
<table>
    <thead>
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Descrição</th>
        </tr>
    </thead>
    <tbody>
<?php


    $categorias = $dados['categorias'];
    foreach ($categorias as $categoria){
        echo '<tr>';
        echo '<td>'.$categoria->getId().'</td>';
        echo '<td><a href="index.php?acao=detalhes&id='.$categoria->getId().'">'.$categoria->getNome().'</a></td>';
        echo '<td>'.$categoria->getDescricao().'</td>';
        echo '</tr>';
    }
?>
    </tbody>
</table>



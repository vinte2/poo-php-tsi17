<?php

require_once "controller/CategoriaController.php";

//ROTAS -

if (isset($_GET['acao'])){
    $acao = $_GET['acao'];
}else{
    $acao = 'index';
}

switch ($acao){
    case 'index':
        $cat = new CategoriaController();
        $cat->principal();
        exit;
    case 'detalhes':
        //pega o ID enviado
        $id = $_GET['id'];
        //instancia o controlador
        $cat = new CategoriaController();
        //chama o método
        $cat->detalhes($id);
        exit;
    case 'incluir':
        $cat = new CategoriaController();
        $cat->incluir();
        exit;
    case 'gravaInserir':
        //pegar dados do POST
        $categoriaNova = new Categoria();
        $categoriaNova->setNome($_POST['nome']);
        $categoriaNova->setDescricao($_POST['descricao']);
        $cat = new CategoriaController();
        $cat->inserir($categoriaNova);
        exit;

    case 'buscaUpdade';
        $id=$_GET['id'];
        $cat = new CategoriaController();
        $cat->buscaUpdate($id);
        exit;

    case 'gravaUpdate':
//    var_dump($_POST);
        $categoriaUpdate = new Categoria();
        $categoriaUpdate->setId($_POST['id']);
        $categoriaUpdate->setNome($_POST['nome']);
        $categoriaUpdate->setDescricao($_POST['descricao']);
        $cat = new CategoriaController();
//        var_dump($categoriaUpdate);
        $cat->gravaUpdate($categoriaUpdate);
        exit;

    case 'delete':
        // $id=$_GET'id'];

        $categoriaDelet = new Categoria();
        $categoriaDelet->setId($_POST['id']);
        // $categoriaDelet->getNome($_POST['nome']);
        // $categoriaDelet->getDescricao($_POST['descricao']);
        $cat = new CategoriaController();
        // var_dump($categoriaDelet);
        $cat->delete($categoriaDelet);   
        exit;


    default:
        echo "Ação inválida";

}





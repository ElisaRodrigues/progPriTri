<?php

/*controllers/categorias.php

AÇÃO PRINCIPAL - LISTAR TODAS AS CATEGORIAS

 */

require_once '../modelo/CRUDCategoria.php';

if (isset ($_GET['acao'])){
    $acao = $_GET['acao'];
}else{
    $acao = 'index';
}

switch ($acao){
    case 'index':
        $crud = new CRUDCategoria();
        $categorias = $crud->getCategorias();
        echo ('<pre>');
        include '../views/templates/cabecalho.php';
        include '../views/categorias/index.php';
        include '../views/templates/rodape.php';

        break;

    case 'exibir':
        $id = $_GET['id'];

        $crud = new CRUDCategoria();
        $categoria = $crud->getCategoria($id);
        include '../views/templates/cabecalho.php';
        include '../views/categorias/exibir.php';
        include '../views/templates/rodape.php';
        break;

    case 'inserir':
        if (!isset($_POST['gravar'])) { //ainda nao digitou, entaõ ve o formulario
            include '../views/templates/cabecalho.php';
            include '../views/categorias/inserir.php';
            include '../views/templates/rodape.php';
        }else { //ja digitou, entao grava
            $nome = $_POST['nome'];
            $descricao = $_POST['descricao'];
            $novaCat = new Categoria (null, $nome, $descricao);
            $crud = new CRUDCategoria();
            $res = $crud->insertCategoria($novaCat);

            header('location: categorias.php');
        }
        break;

    case 'editar':

        if (!isset($_POST['gravar'])) { //ainda nao digitoum, entao mostra o formulario
            $id = $_GET['id'];
            $crud = new CRUDCategoria();
            $categoria = $crud->getCategoria($id);
            include '../views/templates/cabecalho.php';
            include '../views/categorias/alterar.php';
            include '../views/templates/rodape.php';
        }else{
            $id = $_POST['id'];
            $nome = $_POST['nome'];
            $descricao = $_POST['descricao'];
            $catAlterada = new Categoria($id, $nome, $descricao);

            $crud = new CRUDCategoria();
            $res = $crud->updateCategoria($catAlterada);

            //echo $res;
            header('location: categorias.php');
        }
        break;

    case 'excluir':

     if (!isset($_POST['gravar'])) { //ainda nao pássou pélo formulario, entao exibe formulario
            $id = $_GET['id'];
             $crud = new CRUDCategoria();
             $categoria = $crud->getCategoria($id);
            include '../views/templates/cabecalho.php';
            include '../views/categorias/excluir.php';
            include '../views/templates/rodape.php';
        }else{
            $id = $_POST['id'];
             $crud = new CRUDCategoria();
             $res = $crud->deleteCategoria($id);
            echo $res;
         header('location: categorias.php');
        }
        break;
    default:
        echo "acao invalida";
}
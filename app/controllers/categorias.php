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


        echo '<pre>';

        $crud = new CRUDCategoria();
        $categorias = $crud->getCategorias();
        var_dump($categorias);

        break;
    case 'inserir':
        echo 'Você escolheu INSERIR';
        break;
    default: //CASO NÃO SEJA NENHUMA DOS ANTERIORES
        echo 'Ação inválida';
}



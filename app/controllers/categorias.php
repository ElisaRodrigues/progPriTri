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
        include '../views/categorias/index.php';

        //percorrer array, exibindo os dados
        foreach ($categorias as $categoria){
            //exibir
        }

        break;
    case 'inserir':
        echo 'Você escolheu INSERIR';
        break;
    default: //CASO NÃO SEJA NENHUMA DOS ANTERIORES
        echo 'Ação inválida';
}



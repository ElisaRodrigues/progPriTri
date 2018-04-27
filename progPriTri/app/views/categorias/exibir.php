



        <h1> Detalhes Da Categoria - <?= $categoria->getNome(); ?> </h1>
        <p>Descricao: <?= $categoria->getDescricao();?> </p>

        <a href="app/controllers/categorias.php?acao=editar&id=<?= $categoria->getId(); ?>">Editar</a>
        <a href="app/controllers/categorias.php?acao=excluir&id=<?= $categoria->getId(); ?>">excluir</a>



<h4> <?= $categoria->getNome() ?> </h4>

<form method="post" action="app/controllers/categorias.php?acao=excluir">
    <input type="hidden" name="id" value="<?= $categoria->getId(); ?>">
    <input type="submit" name="gravar" value="Confirmar Exclusão">
</form>



<h1>Categoria</h1>

<a href="app/controllers/categorias.php?acao=inserir"> Inserir Categoria</a>

<table>
    <tr>
        <th> # </th>
        <th> Nome Da Categoria </th>
    </tr>


    <?php foreach ($categorias as $categoria): ?>
        <tr>
            <td> <?= $categoria->getId(); ?> <td/>

            <td> <a href ="app/controllers/categorias.php?acao=exibir&id=<?= $categoria->getId(); ?>" ><?= $categoria->getNome() ?> </a></td>
        </tr>
    <?php endforeach;?>

</table>
<html>
<head> </head>
<body>
<h1> CATEGORIAS</h1>

<table>

    <tr>
        <th> # </th>
        <th> Nome Da Categoria </th>
    </tr>


    <?php foreach ($categorias as $categoria): ?>
        <tr>
            <td> <?= $categoria->getId(); ?> <td/>
            <td> <?= $categoria->getNome(); ?> </td>
        </tr>
    <?= endforeach;?>

</table>
</body>
</html>

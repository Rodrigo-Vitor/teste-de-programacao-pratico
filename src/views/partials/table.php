<table width="70%">
    <tr>
        <th>id</th>
        <th>nome</th>
        <th>cpf</th>
        <th>creci</th>
        <th>ações</th>
    </tr>
    <?php foreach($data as $item): ?>
        <tr>
            <td><?=$item->id?></td>
            <td><?=$item->name?></td>
            <td><?=$item->cpf?></td>
            <td><?=$item->creci?></td>
            <td>
                <a href="<?=$base?>/excluir/<?=$item->id?>">Excluir</a>
                <a href="<?=$base?>/corretor/<?=$item->id?>">Editar</a>
            </td>
        </tr>
    <?php endforeach?>
</table>
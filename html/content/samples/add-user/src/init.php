<?php
function listMembersAddUser($id_page){
?>

<span>Ultimos adicionados</span>
<table>
            <thead>
                <tr>
                    <th>Nome</th>                 
                    <th>Validade carteirinha</th>
                    <th>Situação do membro</th>
                    <th>Cargo</th>
                    <th>Ação</th>
                    <th>Ação</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>
                        <a href="#"><?php echo selectMembers(array('nome'), 'ASC'); ?></a>
                    </td>     
                    <td><?php echo selectMembers(array('validade_carteirinha'), 'ASC'); ?></td>           
                    <td><?php echo selectMembers(array('situacao_membro'), 'ASC'); ?></td>
                    <td><?php echo selectMembers(array('cargo'), 'ASC'); ?></td>
                    <td>
                        <?php echo countDbData('nome') ?>
                        <a href="#">Editar</a> 
                    </td>
                    <td>
                        <a href="#">Remover</a>
                    </td>
                </tr>                         
            </tbody>
        </table>
<?php
}
?>
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
                <?php
                for($n=1; $n<=intval(countDbData('ID')); $n++){
                ?>
                 <tr>
                    <td>
                        <a href="#"><?php echo selectMembers(array('nome'), 'ASC'); ?></a>
                    </td>     
                    <td><?php echo selectMembers(array('validade_carteirinha'), 'ASC'); ?></td>           
                    <td><?php echo selectMembers(array('situacao_membro'), 'ASC'); ?></td>
                    <td><?php  echo selectMembers(array('cargo'), 'ASC'); ?></td>
                    <td><a href="#">Editar</a></td>
                    <td><a href="#">Remover</a></td>
                </tr>     
                <?php
                }
                ?>              
                <td>
                    <?php
                     echo tables('table-members', array('nome', 'rg'), 'ASC');
                    ?>
                </td>                     
            </tbody>
        </table>
<?php
}
?>
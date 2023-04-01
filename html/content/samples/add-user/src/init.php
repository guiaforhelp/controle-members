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
                     tables('table-members', 
                        array(
                            __link('nome', '#'), 
                            'validade_carteirinha', 
                            'situacao_membro', 
                            'cargo'
                        ), array(
                            __link('Editar', '#'), 
                            __link('Remover', '#')), 
                            'ASC');                          
                    ?>                 
            </tbody>
        </table>
<?php
}
?>
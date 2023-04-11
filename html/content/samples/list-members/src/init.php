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

            if(countDbData('ID') > 0){
                tables('table-members', 
                        array(
                            __link('nome', '?page-id=3&edit=$ID'), 
                            'validade_carteirinha', 
                            'situacao_membro', 
                            'cargo'
                        ), array(
                            __link('Editar', '#'), 
                            __link('Remover', urlCurrent().'&remove=$ID')), 
                            'ASC');
            }else {
                echo '<h3>Nenhum usuário cadastrado</h3>';
            }                                           
            ?>                 
            </tbody>
        </table>
<?php
}
?>
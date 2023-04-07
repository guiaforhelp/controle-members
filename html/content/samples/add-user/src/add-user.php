<?php 
echo generationAlert();
?>

<table>
    <thead>
        <tr>
            <th>Nome</th>
            <th>Validade carteirinha</th>
            <th>Situação do membro</th>
            <th>Cargo</th>
            <th>Ação</th>
        </tr>
    </thead>

    <tbody>
        <tr class="date-child">
            <form method="post" id="form-new-member">
                <input type="hidden" id="add-rg" value="">
                <input type="hidden" id="add-nascimento" value="0001-01-01">
                <input type="hidden" id="add-estcivil" value="Selecione">
                <input type="hidden" id="add-naturalidade" value="">
                <input type="hidden" id="add-adress" value="">
                <input type="hidden" id="add-n-adress" value="0">
                <input type="hidden" id="add-cep" value="">
                <input type="hidden" id="add-cidade" value="">
                <input type="hidden" id="add-date-batismo" value="0001-01-01">
                <input type="hidden" id="add-obs" value="">

                <td><input type="text" name="add-name" placeholder="Nome do membro" class="inputs-validation" id="add-name"></td>
                <td><input type="date" name="add-date-carteirinha" class="inputs-validation" id="add-date-carteirinha"></td>
                <td>
                    <select name="add-type-member" id="add-type-member">
                        <option value="Ativo">Ativo</option>
                        <option value="Inativo">Inativo</option>
                        <option value="Em disciplina">Em disciplina</option>
                    </select>
                </td>
                <td>
                    <select name="add-cargo" id="add-cargo">
                        <option value="Levita">Levita</option>
                        <option value="Obreiro">Obreiro</option>
                        <option value="Diácuno">Diácuno</option>
                        <option value="Evangelista">Evangelista</option>
                        <option value="Missionária">Missionária</option>
                        <option value="Presibítero">Presibítero</option>
                        <option value="Pastor">Pastor</option>
                    </select>
                </td>
                <td><input type="submit" class="btn-add" id="btn-add" value="Adicionar"></td>
            </form>
        </tr>
    </tbody>
</table>
<a href="<?php echo hostUrlPrin('url-prin'); ?>">Voltar</a>
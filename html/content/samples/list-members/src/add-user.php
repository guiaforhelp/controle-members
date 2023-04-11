<?php 
echo generationAlert();
?>

<div class="panel">
    <div class="search">
        <p>LISTA DE MEMBROS</p>
        <form method="get">
            <input type="search" name="search_members" id="search_members" placeholder="Procurar por membro">
            <input type="submit" value="Buscar">
        </form>
    </div>
<!-- Total de usuários -->
  <div class="container-list-members">
      <p>TOTAL DE USUÁRIO</p>    

      <div class="container-list">
          <div class="list">
              <div class="list-ico"><i class="ph-users-three-bold"></i></div>
              <div class="list-write">
                  <p>150</p>
                  <p>Cadastrados</p>
              </div>
          </div>      
  
          <div class="list">
              <div class="list-ico"><i class="ph-user-gear-bold"></i></div>
              <div class="list-write">
                  <p>150</p>
                  <p>Pendentes</p>
              </div>
          </div>  
  
          <div class="list">
              <div class="list-ico"><i class="ph-user-list-bold"></i></div>
              <div class="list-write">
                  <p>150</p>
                  <p>Ativos</p>
              </div>
          </div>  
  
          <div class="list">
              <div class="list-ico"><i class="ph-person-bold"></i></i></div>
              <div class="list-write">
                  <p>150</p>
                  <p>A vencer</p>
              </div>
          </div>  
   </div>
      </div>

      <!-- Lista de usuário -->
      <div class="container-all-list">
       
          <table>
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Data de nascimento</th>
                    <th>Endereço</th>
                    <th>Data de batismo</th>
                    <th>Validade carteirinha</th>
                    <th>Situação do membro</th>
                    <th>Cargo</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                     <td>
                        <a href="#">Miquéias Silva</a>
                    </td> 
                    <td>06/09/1990</td>
                    <td>Doutor Osmay Borges Pinto n° 395 CEP 05878-020</td>
                    <td>12/10/2015</td>
                    <td>30/05/2025</td>
                    <td>Ativo</td>
                    <td>Levita</td>
                </tr>
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
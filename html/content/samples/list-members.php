<?php
  
      registreScript(array(            
          enqueueScript('jquery-3.6.3', 'jquery-3.6.3.min', false, true, false),
          enqueueScript('ajax', 'ajax', false, true, false),          
          enqueueStyle('list-members', 'list-members', false)
      ));
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
            </tbody>
          </table>
      </div>
</div>
  

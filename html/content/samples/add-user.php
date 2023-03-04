<?php

registreScript(array(            
    enqueueScript('jquery-3.6.3', 'jquery-3.6.3.min', false, false, true, false),
    enqueueScript('ajax', 'ajax', false, false, true, false),          
    enqueueStyle('add-user', 'add-user', false, false)
));
?>

<div class="panel">
    <div class="search">
        <p>ADICIONAR - EDITAR - REMOVER</p> 
            <form method="get">
                <input type="search" name="search_members" id="search_members" placeholder="Procurar por membro">
                <input type="submit" value="Buscar">
            </form>
    </div>   

   <div class="containers">
        <!-- Adicionar - Editar - Remover -->
        <div class="container-list-members">
            <div class="list-user">
                <a href="#">
                    <i class="ph-user-plus-bold"></i><p>Adicionados</p>
                </a>
            </div>
            <div class="list-user">
                <a href="#">
                    <i class="ph-user-focus-bold"></i><p>Editados</p>
                </a>
            </div>
            <div class="list-user">           
            <a href="#">
                <i class="ph-user-minus-bold"></i><p>Removidos</p>
            </a>
            </div>
        </div>

        <!-- Lista de usuário -->
    <div class="container-all-list">
        
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
                        <a href="#">Miquéias Silva</a>
                    </td>   
                    <td>30/05/2025</td>             
                    <td>Ativo</td>
                    <td>Levita</td>
                    <td>
                        <a href="#">Editar</a> 
                    </td>
                    <td>
                        <a href="#">Remover</a>
                    </td>
                </tr>    
                <tr>
                    <td>
                        <a href="#">Miquéias Silva</a>
                    </td>   
                    <td>30/05/2025</td>              
                    <td>Ativo</td>
                    <td>Levita</td>
                    <td>
                        <a href="#">Editar</a> 
                    </td>
                    <td>
                        <a href="#">Remover</a>
                    </td>
                </tr>   
                <tr>
                <td>
                        <a href="#">Miquéias Silva</a>
                    </td>    
                    <td>30/05/2025</td>            
                    <td>Ativo</td>
                    <td>Levita</td>
                    <td>
                        <a href="#">Editar</a> 
                    </td>
                    <td>
                        <a href="#">Remover</a>
                    </td>
                </tr>   
                <tr>
                <td>
                        <a href="#">Miquéias Silva</a>
                    </td>     
                    <td>30/05/2025</td>           
                    <td>Ativo</td>
                    <td>Levita</td>
                    <td>
                        <a href="#">Editar</a> 
                    </td>
                    <td>
                        <a href="#">Remover</a>
                    </td>
                </tr>                         
            </tbody>
        </table>
    </div>
   </div>   
</div>
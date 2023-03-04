<?php

registreScript(array(            
    enqueueScript('jquery-3.6.3', 'jquery-3.6.3.min', false, false, true, false),
    enqueueScript('ajax', 'ajax', false, false, true, false),          
    enqueueStyle('ficha-cadastral', 'ficha-cadastral', false, false)
));
?>

<div class="panel">
    <div class="search">
        <p>FICHA DE CADASTRO</p> 
        <form method="get">
            <input type="search" name="search_members" id="search_members" placeholder="Procurar por membro">
            <input type="submit" value="Buscar">
        </form>
    </div>    

   <div class="container-list-members">
       <form method="post">
            <div class="name-description">
                <div class="name">MIQUÉIAS DA SILVA PEDROSA</div>
                <input type="submit" value="Enviar ficha de membro">
            </div>

            <div class="content-form">
                <div class="date-container">
                    <div class="date-child">
                        <span>RG OU CPF</span>
                        <input type="text" name="rg" id="rg" placeholder="RG ou CPF" value="383.322.408-83">
                    </div>
                    <div class="date-child">
                        <span>DATA DE NASCIMENTO</span>
                        <input type="date" name="data_nascimento" id="data_nascimento" placeholder="Data de nascimento" value="">
                    </div>
                    <div class="date-child">
                        <span>ESTADO CIVIL</span>
                        <select name="estado_civil" id="estado_civil">
                            <option value="Solteiro">Solteiro</option>
                            <option value="Casado">Casado</option>
                            <option value="Viuvo">Viuvo</option>
                        </select>                  
                    </div>
                    <div class="date-child">
                        <span>NATURALDIADE</span>
                        <input type="text" name="estado" id="estado" placeholder="Estado" value="SP">         
                        <input type="text" name="cidade" id="cidade" placeholder="Cidade" value="São Paulo">   
                    </div>
                    <div class="date-child">
                        <span>ENDEREÇO</span>
                        <input type="text" name="endereco" id="endereco" placeholder="Endereço" value="Doutor Osmany Borges Pinto">  
                        <input type="text" name="n" id="n" placeholder="Nº" value="395">
                        <input type="text" name="cep" id="cep" placeholder="CEP" value="05878-020">
                        <input type="text" name="cidade" id="cidade" placeholder="Cidade" value="São Paulo">
                    </div>
                </div>
        
                <div class="date-container">            
                        <div class="date-child">
                            <span>DATAS CARTEIRINHA</span>
                            <input type="date" name="data_batismo" placeholder="Data do batismo" id="data_batismo">
                            <input type="date" name="validade_carteirinha" placeholder="Validade da carteirinha" id="validade_carteirinha">
                        </div>
                        <div class="date-child">
                            <span>CARGO E SITUAÇÃO MEMBRO</span>
                            <select name="situacao_membro" id="situacao_membro">
                                <option value="Em atividade">Em atividade</option>
                                <option value="Disciplinado">Disciplinado</option>
                                <option value="Em observação">Em observação</option>
                            </select>
                            <select name="cargo" id="cargo">
                                <option value="Membro">Membro</option>
                                <option value="Obreiro">Obreiro</option>
                                <option value="Diacuno">Diacuno</option>
                                <option value="Evangelista">Evangelista</option>
                                <option value="Presibitero">Presibitero</option>
                                <option value="Pastor">Pastor</option>
                            </select>
                        </div>
                        <div class="date-child">
                            <span>OBS:</span>
                            <textarea name="obs" id="obs" placeholder="Anotações"></textarea>
                        </div>
                </div>
            </div>
    </form>
   </div>
</div>
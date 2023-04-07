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
                <div class="name"><?php echo ucfirst(selectMembers(array('nome'), 'ASC')); ?></div>
                <input type="submit" value="Enviar ficha de membro">
            </div>

            <div class="content-form">
                <div class="date-container">
                    <div class="date-child">
                        <span>RG OU CPF</span>
                        <input type="text" name="rg" id="rg" placeholder="RG ou CPF" value="<?php echo selectMembers(array('rg'), 'ASC') ?>">
                    </div>
                    <div class="date-child">
                        <span>DATA DE NASCIMENTO</span>
                        <input type="date" name="data_nascimento" id="data_nascimento" placeholder="Data de nascimento" value="<?php echo selectMembers(array('data_nascimento'), 'ASC') ?>">
                    </div>
                    <div class="date-child">
                        <span>ESTADO CIVIL</span>
                        <select name="estado_civil" id="estado_civil">
                            <option value="<?php echo selectMembers(array('estado_civil'), 'ASC') ?>"><?php echo selectMembers(array('estado_civil'), 'ASC') ?></option>
                            <option value="Solteiro">Solteiro</option>
                            <option value="Casado">Casado</option>
                            <option value="Viuvo">Viuvo</option>
                        </select>                  
                    </div>
                    <div class="date-child">
                        <span>NATURALDIADE</span>
                        <input type="text" name="estado" id="estado" placeholder="Estado" value="<?php echo selectMembers(array('naturalidade'), 'ASC') ?>">         
                        <input type="text" name="cidade" id="cidade" placeholder="Cidade" value="São Paulo">   
                    </div>
                    <div class="date-child">
                        <span>ENDEREÇO</span>
                        <input type="text" name="endereco" id="endereco" placeholder="Endereço" value="<?php echo selectMembers(array('endereco'), 'ASC') ?>">  
                        <input type="text" name="n" id="n" placeholder="Nº" value="<?php echo selectMembers(array('n_endereco'), 'ASC') ?>">
                        <input type="text" name="cep" id="cep" placeholder="CEP" value="<?php echo selectMembers(array('cep'), 'ASC') ?>">
                        <input type="text" name="cidade" id="cidade" placeholder="Cidade" value="<?php echo selectMembers(array('cidade'), 'ASC') ?>">
                    </div>
                </div>
        
                <div class="date-container">            
                        <div class="date-child">
                            <span>DATAS CARTEIRINHA</span>
                            <input type="date" name="data_batismo" placeholder="Data do batismo" value="<?php echo selectMembers(array('data_batismo'), 'ASC') ?>" id="data_batismo">
                            <input type="date" name="validade_carteirinha" placeholder="Validade da carteirinha" value="<?php echo selectMembers(array('validade_carteirinha'), 'ASC') ?>" id="validade_carteirinha">
                        </div>
                        <div class="date-child">
                            <span>CARGO E SITUAÇÃO MEMBRO</span>
                            <select name="situacao_membro" id="situacao_membro">
                                <option value="<?php echo selectMembers(array('situacao_membro'), 'ASC') ?>"><?php echo selectMembers(array('situacao_membro'), 'ASC') ?></option>
                                <option value="Em atividade">Em atividade</option>
                                <option value="Disciplinado">Disciplinado</option>
                                <option value="Em observação">Em observação</option>
                            </select>
                            <select name="cargo" id="cargo">
                                <option value="<?php echo selectMembers(array('cargo'), 'ASC') ?>"><?php echo selectMembers(array('cargo'), 'ASC') ?></option>
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
                            <textarea name="obs" id="obs" placeholder="Anotações">
                                <?php echo selectMembers(array('obs'), 'ASC'); ?>
                            </textarea>
                        </div>
                </div>
            </div>
    </form>
   </div>
</div>
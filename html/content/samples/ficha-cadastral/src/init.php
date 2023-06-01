<div class="panel">
    <div class="search">
        <p>FICHA DE CADASTRO</p>      
        <form method="get">
            <input type="search" disabled name="search_members" id="search_members" placeholder="Procurar por membro">
            <input type="submit" disabled value="Buscar">
        </form>
    </div>    

   <div class="container-list-members">
       <form method="post" id="edit_members">
            <div class="name-description">
                <div class="name"><?php echo ucfirst(search(sanitization('get', 'edit', 'url'), 'table-members', 'nome')); ?></div>
                <input type="submit" value="Enviar ficha de membro">
                <input type="hidden" id="id" value="<?php echo sanitization('get', 'edit', 'url'); ?>">
            </div>

            <div class="content-form">
                <div class="date-container">
                    <div class="date-child">
                        <span>RG OU CPF</span>
                        <input type="text" name="rg" id="rg" placeholder="RG" value="<?php echo search(sanitization('get', 'edit', 'url'), 'table-members', 'rg') ?>">
                    </div>
                    <div class="date-child">
                        <span>DATA DE NASCIMENTO</span>
                        <input type="date" name="data_nascimento" id="data_nascimento" placeholder="Data de nascimento" value="<?php echo search(sanitization('get', 'edit', 'url'), 'table-members', 'data_nascimento') ?>">
                    </div>
                    <div class="date-child">
                        <span>TELEFONE</span>
                        <input type="tel" maxlength="15" name="tel" id="tel" placeholder="exemplo: (11) 11111-1111" value="<?php echo search(sanitization('get', 'edit', 'url'), 'table-members', 'telefone') ?>">
                    </div>
                    <div class="date-child">
                        <span>ESTADO CIVIL</span>
                        <select name="estado_civil" id="estado_civil">
                            <option value="<?php echo selectMembers(array('estado_civil'), 'ASC') ?>"><?php echo search(sanitization('get', 'edit', 'url'), 'table-members', 'estado_civil') ?></option>
                            <option value="Solteiro">Solteiro</option>
                            <option value="Casado">Casado</option>
                            <option value="Viuvo">Viuvo</option>
                        </select>                  
                    </div>
                    <div class="date-child">
                        <span>NATURALIDADE</span>
                        <input type="text" name="estado" id="estado_natu" placeholder="Estado" value="<?php echo search(sanitization('get', 'edit', 'url'), 'table-members', 'naturalidade') ?>">         
                        <input type="text" name="cidade" id="cidade_natu" placeholder="Cidade" value="São Paulo">   
                    </div>
                    <div class="date-child">
                        <span>ENDEREÇO</span>
                        <input type="text" name="endereco" id="endereco" placeholder="Endereço" value="<?php echo search(sanitization('get', 'edit', 'url'), 'table-members', 'endereco') ?>">  
                        <input type="text" name="n" id="n" placeholder="Nº" value="<?php echo search(sanitization('get', 'edit', 'url'), 'table-members', 'n_endereco') ?>">
                        <input type="text" name="cep" id="cep" placeholder="CEP" value="<?php echo search(sanitization('get', 'edit', 'url'), 'table-members', 'cep') ?>">
                        <input type="text" name="cidade" id="cidade" placeholder="Cidade" value="<?php echo search(sanitization('get', 'edit', 'url'), 'table-members', 'cidade') ?>">
                    </div>
                </div>
        
                <div class="date-container">            
                        <div class="date-child">
                            <span>DATAS CARTEIRINHA</span>
                            <input type="date" name="data_batismo" placeholder="Data do batismo" value="<?php echo search(sanitization('get', 'edit', 'url'), 'table-members', 'data_batismo') ?>" id="data_batismo">
                            <input type="date" name="validade_carteirinha" placeholder="Validade da carteirinha" value="<?php echo search(sanitization('get', 'edit', 'url'), 'table-members', 'validade_carteirinha')?>" id="validade_carteirinha">
                        </div>
                        <div class="date-child">
                            <span>CARGO E SITUAÇÃO MEMBRO</span>
                            <select name="situacao_membro" id="situacao_membro">
                                <option value="<?php echo search(sanitization('get', 'edit', 'url'), 'table-members', 'situacao_membro') ?>"><?php echo search(sanitization('get', 'edit', 'url'), 'table-members', 'situacao_membro') ?></option>
                                <option value="Em atividade">Em atividade</option>
                                <option value="Disciplinado">Disciplinado</option>
                                <option value="Em observação">Em observação</option>
                            </select>
                            <select name="cargo" id="cargo">
                                <option value="<?php echo search(sanitization('get', 'edit', 'url'), 'table-members', 'cargo') ?>"><?php echo search(sanitization('get', 'edit', 'url'), 'table-members', 'cargo') ?></option>
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
                                <?php echo search(sanitization('get', 'edit', 'url'), 'table-members', 'obs') ?>
                            </textarea>
                        </div>
                </div>
            </div>
    </form>
   </div>
</div>
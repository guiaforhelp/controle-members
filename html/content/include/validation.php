<?php
if(empty(sanitization('post', 'addnascimento', 'url'))){
    $add_nascimento = '0001-01-01';
}else {
    $add_nascimento = sanitization('post', 'addnascimento', 'url');
}

if(empty(sanitization('post', 'adddatebatismo', 'url'))){
    $add_date_batismo = '0001-01-01';
}else {
    $add_date_batismo = sanitization('post', 'adddatebatismo', 'url');
}

if(empty(sanitization('post', 'addnadress', 'int'))){
    $add_n_endereco = '0';
}else {
    $add_n_endereco = sanitization('post', 'addnadress', 'int');
}


if(sanitization('post', 'addname', 'url')){    
           
    insertMembers(
        sanitization('post', 'addname', 'url'), 
        sanitization('post', 'addrg', 'url'), 
        $add_nascimento, 
        sanitization('post', 'addestcivil', 'url'), 
        sanitization('post', 'addnaturalidade', 'url'), 
        sanitization('post', 'addadress', 'url'), 
        $add_n_endereco, 
        sanitization('post', 'addcep', 'url'), 
        sanitization('post', 'addcidade', 'url'),
        $add_date_batismo, 
        sanitization('post', 'adddatecarteirinha', 'url'), 
        sanitization('post', 'addtypemember', 'url'), 
        sanitization('post', 'addcargo', 'url'), 
        sanitization('post', 'addobs', 'url')
    );

}

if(sanitization('post', 'eidtid', 'string')){

    updateMembers(sanitization('post', 'eidtid', 'string'), 'rg', sanitization('post', 'editrg', 'string'));
    updateMembers(sanitization('post', 'eidtid', 'string'), 'data_nascimento', sanitization('post', 'editdatanasc', 'string'));
    updateMembers(sanitization('post', 'eidtid', 'string'), 'estado_civil', sanitization('post', 'editestcivil', 'string'));
    updateMembers(sanitization('post', 'eidtid', 'string'), 'naturalidade', sanitization('post', 'editnatestado', 'string'));
    updateMembers(sanitization('post', 'eidtid', 'string'), 'endereco', sanitization('post', 'editnatcidade', 'string'));
    updateMembers(sanitization('post', 'eidtid', 'string'), 'n_endereco', sanitization('post', 'editnend', 'string'));
    updateMembers(sanitization('post', 'eidtid', 'string'), 'cep', sanitization('post', 'editcep', 'string'));
    updateMembers(sanitization('post', 'eidtid', 'string'), 'cidade', sanitization('post', 'editendcidade', 'string'));
    updateMembers(sanitization('post', 'eidtid', 'string'), 'data_batismo', sanitization('post', 'editdatabatismo', 'string'));
    updateMembers(sanitization('post', 'eidtid', 'string'), 'validade_carteirinha', sanitization('post', 'editvalcarteirinha', 'string'));
    updateMembers(sanitization('post', 'eidtid', 'string'), 'situacao_membro', sanitization('post', 'editsitumembro', 'string'));
    updateMembers(sanitization('post', 'eidtid', 'string'), 'cargo', sanitization('post', 'editcargo', 'string'));
    updateMembers(sanitization('post', 'eidtid', 'string'), 'obs', sanitization('post', 'editobs', 'string'));
}
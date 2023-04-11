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

if(sanitization('post', 'eidtid', 'url')){

    updateMembers(sanitization('post', 'eidtid', 'url'), 'rg', sanitization('post', 'editrg', 'url'));
    updateMembers(sanitization('post', 'eidtid', 'url'), 'data_nascimento', sanitization('post', 'editdatanasc', 'url'));
    updateMembers(sanitization('post', 'eidtid', 'url'), 'estado_civil', sanitization('post', 'editestcivil', 'url'));
    updateMembers(sanitization('post', 'eidtid', 'url'), 'naturalidade', sanitization('post', 'editnatestado', 'url'));
    updateMembers(sanitization('post', 'eidtid', 'url'), 'endereco', sanitization('post', 'editnatcidade', 'url'));
    updateMembers(sanitization('post', 'eidtid', 'url'), 'n_endereco', sanitization('post', 'editnend', 'url'));
    updateMembers(sanitization('post', 'eidtid', 'url'), 'cep', sanitization('post', 'editcep', 'url'));
    updateMembers(sanitization('post', 'eidtid', 'url'), 'cidade', sanitization('post', 'editendcidade', 'url'));
    updateMembers(sanitization('post', 'eidtid', 'url'), 'data_batismo', sanitization('post', 'editdatabatismo', 'url'));
    updateMembers(sanitization('post', 'eidtid', 'url'), 'validade_carteirinha', sanitization('post', 'editvalcarteirinha', 'url'));
    updateMembers(sanitization('post', 'eidtid', 'url'), 'situacao_membro', sanitization('post', 'editsitumembro', 'url'));
    updateMembers(sanitization('post', 'eidtid', 'url'), 'cargo', sanitization('post', 'editcargo', 'url'));
    updateMembers(sanitization('post', 'eidtid', 'url'), 'obs', sanitization('post', 'editobs', 'url'));
}


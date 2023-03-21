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


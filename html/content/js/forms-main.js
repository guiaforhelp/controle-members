import {init} from './modules/forms.js';

function main(){     
    init(
        '#form-new-member', 
        '#add-name', 
        'Um dos campos estão em branco !!!',
        'Usuário cadastrado com sucesso' 
    );   
    
    init(
        '#form-new-member', 
        '#add-date-carteirinha', 
        'Um dos campos estão em branco !!!',
        'Usuário cadastrado com sucesso'
    );  
}

main();
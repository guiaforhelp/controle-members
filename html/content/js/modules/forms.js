const form_head = {
    getAll(element){
        return document.querySelectorAll(element);
    },

    get(element){
        return document.querySelector(element);
    },

    form(element, element2, content, content2){
        
        form_head.get(element).addEventListener('submit', (event)=>{
            event.preventDefault();              
            
            if(form_head.get(element2).value === ''){                                  
                form_head.get(element2).classList.add('add-date-focus-active'); 
                form_head.get('#alert-message').textContent = content;
                form_validation.update('#alert-message', 'attention');                                              
            }else if(form_head.get(element2).value !== ''){                   
                form_head.get(element2).classList.remove('add-date-focus-active'); 
                form_head.get('#alert-message').textContent = content2;
                form_validation.update('#alert-message', 'success');                                    
            }     

        });
    }
  
}

const form_validation = {
    update(element, element2){
        form_head.get(element).style.display = 'block';
        form_head.get(element).classList.add(element2);

        setTimeout(()=> {
            form_head.get(element).classList.add('active-animation-left');  
            form_head.get(element).classList.remove(element2); 
            form_head.get(element).style.display = 'none';         
        }, 5000);  
        
        setTimeout(()=> {
            form_head.get(element).classList.remove('active-animation-left');                    
        }, 6000);        
    },

    tags() {

        for(let date_form of form_head.getAll('input[type="date"]')) {
            if(date_form.value == '0001-01-01'){
                date_form.value = null;                
            }
        }

        for(let text_form of form_head.getAll('input[type="text"]')){
            if(text_form.value == '0'){
                text_form.value = null;
            }
        }        
    },

    mask(element){
        form_head.get(element).addEventListener('keyup', (event)=>{           
            var search_mask = event.target;   
            
            if(parseInt(search_mask.value.length) <= 10 && parseInt(search_mask.value.length) <=14){    
                console.log('menor que 10');  
                console.log(parseInt(search_mask.value.length));          
                search_mask.value=search_mask.value.replace(/(\d{2})(\d{4})(\d{4})$/,"($1) $2-$3"); 
            }else if(parseInt(search_mask.value.length) >= 15){
                console.log('maior que 10');
                console.log(parseInt(search_mask.value.length));
                search_mask.value=search_mask.value.replace(/(\d{2})(\d{1})(\d{4})(\d{4})$/,"($1) $2 $3-$4");
            }
        });

    },

    convertUppercase(element){
        form_head.get(element).addEventListener('keyup', (event)=>{
            event.target.value = event.target.value.toUpperCase();
        });
    }

}

export function init(element, element2, content, content2){
    form_validation.tags();
    form_validation.mask('#tel');
    form_validation.convertUppercase('#cidade_natu');

    if(form_head.get(element) !== null){
        form_head.form(element, element2, content, content2);
    }             
}
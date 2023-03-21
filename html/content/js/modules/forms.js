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
    }
   
}

export function init(element, element2, content, content2){
    form_head.form(element, element2, content, content2);          
}
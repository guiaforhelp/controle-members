const header = {
    get(element){
        return document.querySelector(element);
    }, 

    getAll(element){
        return document.querySelectorAll(element);
    },

    set(element){
        return document.createElement(element);
    },
    
    create(element, body_element, name_class){
        const new_div = header.set(element);       
        const body = header.get(body_element);
        body.appendChild(new_div);        
        new_div.classList.add(name_class);        
    },

    update(){        
        if(header.get('a').classList != undefined){           
            header.create('div', '.active', 'balao');
        } 
    }
}

function init() {     
     header.update();
}

init(); 
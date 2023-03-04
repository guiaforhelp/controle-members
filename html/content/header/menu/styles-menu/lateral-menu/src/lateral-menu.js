const headlmenu = {
    getAll(element){
        return document.querySelectorAll(element);
    },

    get(element){
       return document.querySelector(element);
    }
}

const buttonlmenu = {
    updates() {
        headlmenu.get('.ph-list-bold').addEventListener('click', () => {
            headlmenu.get('.nav-menu').classList.add('nav-menu-active');            
        });

        headlmenu.get('.nav-menu-child p').addEventListener('click', () => {
            headlmenu.get('.nav-menu').classList.remove('nav-menu-active');   
        });
    }
}

function init(){
    buttonlmenu.updates();
}

init();
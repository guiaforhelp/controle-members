<?php
    function HomeAddUser($id_page){
?>
    <div class="panel">
        <div class="search">
            <p>ADICIONAR - EDITAR - REMOVER</p> 
                <form method="get">
                    <input type="search" name="search_members" disabled id="search_members" placeholder="Procurar por membro">
                    <input type="submit" disabled value="Buscar">
                </form>
        </div>   
    
       <div class="containers">
            <!-- Adicionar - Editar - Remover -->
            <div class="container-list-members">
                <div class="list-user">
                    <a href="?page-id=<?php echo sanitization('get', 'page-id', 'int'); ?>&type=add">
                        <i class="ph-user-plus-bold"></i><p>Adicionar</p>
                    </a>
                </div>
                <div class="list-user">
                    <a href="?page-id=<?php echo sanitization('get', 'page-id', 'int'); ?>&type=views">
                    <i class="ph-bold ph-users"></i><p>Exibir</p>
                    </a>
                </div>
                <div class="list-user">           
                <a href="?page-id=<?php echo sanitization('get', 'page-id', 'int'); ?>&type=remove">
                    <i class="ph-user-minus-bold"></i><p>Removidos</p>
                </a>
                </div>
            </div>
    
            <!-- Lista de usuário -->
        <div class="container-all-list">
    
        <?php

        if($id_page){
            require $id_page.'.php';                
        }else {
            require 'init.php';
            listMembersAddUser($id_page);
        }
        ?>    
        
        </div>
       </div>   
    </div>
<?php
    }
?>

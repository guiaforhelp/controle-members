<?php
  
      registreScript(array(            
          enqueueScript('jquery-3.6.3', 'jquery-3.6.3.min', false, false, true, false),
          enqueueScript('ajax', 'ajax', false, false, true, false),          
          enqueueStyle('home', 'home', false, false)
      ));
  ?>


<div class="panel">
    <p>Ola Pastor Manoel, seja muito bem vindo(a)</p> 
   <div class="container-list-members">
    <a <?php echo @$page_array[1]; ?> href="/?page-id=1" title="Exibir lista de usuários">
        <i class="ph-user-circle-bold"></i>
        <p>Exibir lista de usuários</p>
    </a>
    <a <?php echo @$page_array[2]; ?> href="/?page-id=2" title="Cadastro de usuários">
        <i class="ph-identification-badge-bold"></i>
        <p>Cadastro de usuários</p>
    </a>
    <a href="#" title="Exibir ficha cadastral do membro">
        <i class="ph-identification-card-bold"></i>
        <p>Exibir ficha cadastral do membro</p>
    </a>
    <a href="#" title="Iniciar conversa com membro">
        <i class="ph-whatsapp-logo-bold"></i>
        <p>Iniciar conversa com membro</p>
    </a>
    <a href="#" title="Configurações">
        <i class="ph-gear-bold"></i>
        <p>Configurações</p>
    </a>
   </div>
</div>
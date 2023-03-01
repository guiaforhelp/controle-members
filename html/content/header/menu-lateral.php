<?php
registreScript(array(    
    enqueueScript('phosphor', false, false, true, 'https://unpkg.com/phosphor-icons'),
    enqueueScript('header', 'header', false, true, false),     
    enqueueStyle('header', 'head', false)
));

$page_array = array(
    sanitization('get', 'page-id', 'int') => 'class="active'
);
?>


<div class="horizontal-menu">
<a <?php echo @$page_array[1]; ?> href="/?page-id=1" title="Exibir lista de usuários"><i class="ph-user-circle-bold"></i></a>
<a <?php echo @$page_array[2]; ?> href="/?page-id=2" title="Cadastro de usuários"><i class="ph-identification-badge-bold"></i></a>
<a <?php echo @$page_array[3]; ?> href="/?page-id=3" title="Exibir ficha cadastral do membro"><i class="ph-identification-card-bold"></i></a>
<a <?php echo @$page_array[4]; ?> href="/?page-id=4" title="Iniciar conversa com membro"><i class="ph-whatsapp-logo-bold"></i></a>
<a <?php echo @$page_array[5]; ?> href="/?page-id=5" title="Configurações"><i class="ph-gear-bold"></i></a>
<p>v1.0.0 (beta)</p>
</div>

<div class="lateral-menu">
    <div class="child-menu-lateral">
        <a href="<?php echo hostUrlPrin('url-prin') ?>"><img src="<?php echo urlLogoTipo('logo') ?>" alt="Logotipo"></a>
        <i class="ph-list-bold"></i>
    </div>
    <p>Cristo é a Resposta para o Mundo v1.0.0 (beta)</p>
    <i class="ph-bell-ringing-bold"></i>
 </div>

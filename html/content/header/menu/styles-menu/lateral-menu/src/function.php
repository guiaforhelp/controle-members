<?php
registreScript(array(  
    enqueueScript('lateral-menu', false, 'lateral-menu', LATERAL_MENU_PLUGIN_SRC, LATERAL_MENU_VERSION, true, false),        
    enqueueStyle('lateral-menu', 'lateral-menu', LATERAL_MENU_PLUGIN_SRC, false)
));

?>

<div class="lateral-menu">
    <div class="child-menu-lateral">
        <a href="<?php echo hostUrlPrin('url-prin') ?>"><img src="<?php echo urlLogoTipo('logo') ?>" alt="Logotipo"></a>
        <i class="ph-list-bold"></i>
    </div>
    <p>Cristo é a Resposta para o Mundo v1.0.0 (beta)</p>
    <i class="ph-bell-ringing-bold"></i>    
</div>

<div class="nav-menu">
    <div class="nav-menu-child">
    <a href="<?php echo hostUrlPrin('url-prin') ?>"><img src="<?php echo urlLogoTipo('logo') ?>" alt="Logotipo"></a>
    <p>X</p>
    </div>

    <?php
    foreach(navMenu()->menu_lateral as $menu_nav){   
        
        for($n=0; $n<=count($menu_nav->nome)-1; $n++){
            $cont_page = $n+1;
    
            echo '<a '.@$page_array[$cont_page]. 
            ' href="/?page-id='.$cont_page.'" title="'
            .$menu_nav->title[$n].'">'
            .$menu_nav->nome[$n].'</a>';
        }
    }
    ?>

    <p>v1.0.0 (beta)</p>
</div>

 

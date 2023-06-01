<?php
registreScript(array(  
    enqueueScript('horizontal-menu', false, 'horizontal-menu', HORIZONTAL_MENU_PLUGIN_SRC, HORIZONTAL_MENU_VERSION, true, false),        
    enqueueStyle('horizontal-menu', 'horizontal-menu', HORIZONTAL_MENU_PLUGIN_SRC, HORIZONTAL_MENU_VERSION)
));

$page_array = array(
    sanitization('get', 'page-id', 'int') => 'class="active'
);

?>

<div class="horizontal-menu">
<?php
foreach(navMenu()->menu_horizontal as $menu_nav){   
        
    for($n=0; $n<=count($menu_nav->nome)-1; $n++){
        $cont_page = $n+1;

        echo '<a '.@$page_array[$cont_page]. 
        ' href="/?page-id='.$cont_page.'" title="'
        .$menu_nav->title[$n].'"><i class="'
        .$menu_nav->nome[$n].'"></i></a>';
    }
}
?>
<p>v<?= CRPM_VERSION ?> (beta)</p>
</div>
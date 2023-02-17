<?php 
function loadMenuHeader(){
    require 'header/'.menuLoadArray(1).'.php';   
}


?>
<!DOCTYPE html>
<html lang="<?php echo typeLanguage('langBr'); ?>">
<head>
<meta charset="<?php echo codLinguage('charset-utf'); ?>">       
<meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover" />   

<?php
echo favicon(urlFavicon('favicon'));
echo registreScript(array());
?>
       
<title>Controle de Membros</title>

</head>
<body>

<header>
    <?php loadMenuHeader(); ?>
</header> 

<?php 
<?php 
function head($enqueue_script){ ?>
<!DOCTYPE html>
<html lang="<?php echo typeLanguage('langBr'); ?>">
<head>
<meta charset="<?php echo codLinguage('charset-utf'); ?>">       
<meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover" />   
<?php
echo favicon(urlFavicon('favicon'));

foreach ($enqueue_script as $enqueue_scripts){
    echo $enqueue_scripts;
}
?>
       
<title>Controle de Membros</title>

</head>
<body>

<header>  
<div class="lateral-menu">
    <img src="<?php echo urlLogoTipo('logo'); ?>" alt="">
 </div>
 </header> 

<?php 
} 
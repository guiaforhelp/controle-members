<?php 
function head(){ ?>
<!DOCTYPE html>
<html lang="<?php echo typeLanguage('langBr'); ?>">
<head>
    <meta charset="<?php echo codLinguage('charset-utf'); ?>">       
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover" />
    
       
<title>Controle de Membros</title>

</head>
<body>

<header>  
 </header>

 <?php
 $selectM = new conectDB();
 $selectM->selectMembers();
 ?>

<?php 
} 
<?php 

function head(){ ?>
<!DOCTYPE html>
<html lang="<?php echo typeLanguage('langBr'); ?>">
<head>
    <meta charset="<?php echo codLinguage('charset-utf'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php exFavicon(); ?>
    <?php excStyles(); ?>
    <?php exScript(); ?>
       
<title>Netfree - <?php echo titleTagsGenre(); ?></title>

</head>
<body>

<header class="background-header">
  <div class="menu-hamburgue">    
    <svg xmlns="http://www.w3.org/2000/svg">
      <rect x="10" y="0" rx="0" fill="#ffffff"></rect>
      <rect x="10" y="7" rx="0" fill="#ffffff"></rect>
      <rect x="10" y="14" rx="0" fill="#ffffff"></rect>
    </svg> 
         
  </div>

  <div class="header-logo">
    <?php echo exLogotipo(); ?>
  </div>

  <div class="header-user">
    <?php echo exUser(); ?>
  </div>
 </header>

<?php 
} 

function headFeatured($name, $background, $points, $descriptions, $date, $genres, $id){ ?>

<section class="featured" style="background: url(https://image.tmdb.org/t/p/original<?php echo $background; ?>);">
    
  <div class="featured-vertical">
    <div class="featured-horizontal">
        <div class="featured-name">
            <?php echo $name ?>
        </div>

        <div class="featured-info"> 
          <div class="featured-points"><?php echo $points; ?> Pontos</div>
          <div class="featured-year">Ano: <?php $date_explode = explode("-", $date); echo $date_explode['0']; ?></div>
        </div>
            <div class="featured-descriptions">
            <?php 
            if(strlen($descriptions) >= 255){
             echo mb_strimwidth($descriptions, 0, 255, '...');
            }else {
              echo $descriptions;
            }           
            ?>
            </div>
            <div class="featured-button">
            <a href="?id-series=<?php echo $id; ?>" class="featured-watchbutton">► Assistir</a>
            <a href="/list/add/<?php echo $id; ?>" class="featured-mylistbutton">✚ Minha Lista</a>
            </div>
            <div class="featured-genres"><strong>Genero: </strong>
            <?php 
            $count_genre = count($genres);
            for($i=0; $i<=$count_genre-1; $i++){
              if($i > 0){
                echo ', '.genres($genres[$i]);              
              }else{
                echo genres($genres[$i]);
              }              
            } ?>
            </div>        
    </div>
  </div>
</section>

<?php 
function contentPanelElementorUser(){
  return tagHiperLink('panel-user').
  titleMenu('title-series-categories').
  tagHiperLink('panel-categories-series').
  titleMenu('title-movies-categories').
  tagHiperLink('panel-categories-movies');
}
echo styleFilmesGenre(array('panel-side'), false, false, contentPanelElementorUser()); 
} 
?>
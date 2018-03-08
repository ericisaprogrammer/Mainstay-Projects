<div class="hero-icon 
  <?php if( $GLOBALS['count'] == 1 ) : 
      echo " hero-selected"; 
    endif;
  ?>" id="hero-icon-<?= get_the_title() ?>">
  <?= $GLOBALS['count']; ?>
</div>
<div class="grid-container hero-information 
    <?php if( $GLOBALS['count'] != 1 ) : 
      echo ' hidden'; 
    endif; ?>"  id="hero-information-<?= get_the_title(); ?>" data-hero="<?= get_the_title(); ?>">
  <div></div>
  <div id="hero-picture">
    <?php 
      the_post_thumbnail('hero-display', array(
        'class' => 'hero-picture',
        'id' => 'hero-picture-' . get_the_title()
      ));
    ?>
  </div>
  <div id="hero-descriptors">
    <div id="hero-title">
      <h3 class="hero-title dark-blue" id="hero-title-<?= get_the_title(); ?>"><?= get_the_title(); ?></h3>
    </div>
    <div id="hero-description">
      <p class="hero-description dark-blue" id="hero-description-<?= get_the_title(); ?>"><?= get_the_content(); ?></p>
    </div>
  </div>
  <div></div>
</div>
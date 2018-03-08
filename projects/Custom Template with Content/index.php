<?php 
  get_header(); 
  add_image_size('news-thumbnail', 360, 180, false);
  add_image_size('hero-display', 400, 400, false);  ?>

  <!-- Video section, which is the background of the top section for the webpage. -->
  <div class="section" id="sec-video">                                                <!-- Start video -->
    <div class="container" id="vid-intro-container">
      <img src="<?= get_template_directory_uri();?>/assets/images/intro-background.png" id="vid-intro-substitute">
      <video loop muted autoplay poster="<?= get_template_directory_uri();?>/assets/images/intro-video-frame.jpg" id="vid-intro">
        <source src="<?= get_template_directory_uri();?>/assets/videos/intro-video.webm" type="video/webm">
        <source src="<?= get_template_directory_uri();?>/assets/videos/intro-video.mp4" type="video/mp4">
      </video>
      <div class="container" id="vid-video-elements-container">
        <div class="container" id="vid-top-elements">
          <div id="filler"></div>
          <img class="head-logo" id="head-main-logo" src="<?= get_template_directory_uri();?>/assets/images/head-main-logo.png" alt="Overwatch"/>
          <h2 class="title white" id="vid-review">
	          <?= get_post(80)->post_content; ?>
  	      </h2>
          <button class="back-orange white" id="vid-buy">Buy Now</button>
          <button class="back-white black" id="vid-trailer">&#9658; Watch Trailer</button>
        </div>
        <div class="grid-container" id="vid-grid-bottom-elements">
          <div></div>
          <div></div>
          <div></div>
          <div class="grid-container" id="vid-grid-console-elements">
            <div></div>
            <div></div>
            <div></div>
            <img class="console-item" id="vid-xbone" src="<?= get_template_directory_uri();?>/assets/images/intro-xbone.png" alt="XBox One">
            <img class="console-item" id="vid-ps4" src="<?= get_template_directory_uri();?>/assets/images/intro-ps4.png" alt="PS 4">
            <p class="console-item" id="vid-pc">PC</p>
          </div>
          <div></div>
          <img class="award-item" id="vid-award" src="<?= get_template_directory_uri();?>/assets/images/intro-goty.png" alt="100 GOTY Awards">
        </div>
      </div>
    </div>
  </div>                                                                              <!-- End video -->
  <!-- News section, which contains links to the featured news and all news. -->
  <div class="section" id="sec-news">						      <!-- Start news -->
    <h2 class="dark-blue">Featured News</h2>
    <?php 
        $args = array(
            'numberposts'       => 3,
            'category_name'     => 'news',
	          'orderby'	         	=> 'date',
	          'order'		          => 'DESC',
        );
        $posts = get_posts($args);
        if ( sizeof($posts) != 0 ) : 
	  foreach ($posts as $post) : setup_postdata($post);  
            $post; 
            get_template_part( 'content', 'news' ); 
          endforeach;
    ?>
	    <button class="back-blue white" id="news-all">View All News</button>
            <?php
	  else :
	    get_template_part( 'content', 'news-none');
	  endif; 
    ?>
  </div>									      <!-- End news -->
  <!-- Synopsis section, which describes what the plot of the game is in brief.
       Contains auto-changing picture backgrounds -->
  <div class="section" id="sec-synopsis">                                             <!-- Start synopsis -->
    <div class="container" id="syn-container">
      <div></div>

      <?= get_post(83)->post_content; ?>

      <div></div>
      <button class="back-orange white">Explore the Game</button>
      <div></div>
    </div>
    <style>
      #sec-synopsis {
        background-image: url("<?= get_template_directory_uri(); ?>/assets/images/syn-background2.jpg");
      }
    </style>
  </div>                                                                              <!-- End synopsis -->
  <!-- Hero section, which displays pictures and descriptions of each hero in brief,
       along with a collection of icons to hover over and show each one. -->

  <div class="section" id="sec-hero">                                                 <!-- Start hero -->
    <h1 class="dark-blue">The world needs heroes</h1>
    <p class="dark-blue">Choose your hero and clash on the battle fields
      of tomorrow. Bend time, defy physics, and wield extraordinary
      powers in the ultimate team-based shooter. </p> </br>
    <div class="sub-section" id="sub-hero">
      <?php
        $count = 1; 
        $args = array(
            'numberposts'       => -1,
            'category_name'     => 'hero',
	          'orderby'	         	=> 'date',
	          'order'	           	=> 'ASC'
        );
        $posts = get_posts($args);
        if ( sizeof($posts) != 0 ) : 
	        foreach ($posts as $post) : setup_postdata($post);  
            $post;
            get_template_part( 'content', 'heroes' ); 
            $count++;
          endforeach;
        $count = 1;
      ?>
        <div class="icon-container" id="hero-icons">
	        <?php
            foreach ($posts as $post) : setup_postdata($post);
              $post; 
              get_template_part( 'content', 'heroes-icons');
              $count++;
            endforeach; 
          ?>
        </div>
      <?php
	      else :
	        get_template_part( 'content', 'heroes-none');
        endif; 
      ?>
      <div class="icon-container" id="hero-icons">
	<?php ?>
      </div>
    </div>
  </div>                                                                              <!-- End hero -->

  <div class="section" id="background-window"> </div>

  <!-- Order section, which contains an advertisment for the game, complete with
       buy link. Has a window to background image. -->
  <div class="section" id="sec-order">                                                <!-- Start order -->
    <div class="grid-container" id="ord-grid-container-main">
      <div></div>
      <img id="ord-widowmaker" src="<?= get_template_directory_uri()?>/assets/images/widowmaker.png" alt="Widowmaker">
      <div class="container" id="ord-container-elements">
        <h1 class="dark-blue">Begin your watch</h1>
        <p class="dark-blue">Clash on the battlefields of tomorrow in the
          ultimate team-based shooter.</p>
        <button class="back-orange white">Buy Now</button>
        <div class="grid-container" id="ord-game-boxart">
          <div></div>
          <div></div>
          <div></div>
          <img class="ord-pic" id="ord-xbone" src="<?= get_template_directory_uri()?>/assets/images/ord-boxart-xbone.png" alt="XBox One"/>
          <img class="ord-pic" id="ord-pc" src="<?= get_template_directory_uri()?>/assets/images/ord-boxart-pc.png" alt="PC"/>
          <img class="ord-pic" id="ord-ps4" src="<?= get_template_directory_uri()?>/assets/images/ord-boxart-ps4.png" alt="PS 4"/>
        </div>
      </div>
      <div></div>
    </div>
  </div>                                                                              <!-- End order -->
  <!-- Social media section, which contains links to the game's social accounts,
       including Facebook, Twitter, YouTube, and Instagram. -->

<?php get_footer();
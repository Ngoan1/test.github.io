<?php 
/*
* Display contact details
*/
?>

<div class="top-header py-2">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-8 align-self-center">
        <?php if( get_theme_mod( 'ecommerce_bookshop_contact_show_hide') != '') { ?>
        <?php if( get_theme_mod( 'author_writer_announcement_bar' ) != '') { ?>
          <p class="mb-0"><i class="<?php echo esc_attr(get_theme_mod('author_writer_announcement_icon','fas fa-bullhorn')); ?> me-2"></i><?php echo esc_html( get_theme_mod('author_writer_announcement_bar','')); ?></p>
        <?php } ?>
        <?php } ?>
      </div>
      <div class="col-lg-4 col-md-4 align-self-center">
        <div class="media-links text-md-end">
          <?php                  
            $author_writer_header_fb_new_tab = esc_attr(get_theme_mod('author_writer_header_fb_new_tab','true'));
            $author_writer_header_twt_new_tab = esc_attr(get_theme_mod('author_writer_header_twt_new_tab','true'));
            $author_writer_header_ins_new_tab = esc_attr(get_theme_mod('author_writer_header_ins_new_tab','true'));
            $author_writer_header_ut_new_tab = esc_attr(get_theme_mod('author_writer_header_ut_new_tab','true'));
            $author_writer_header_pint_new_tab = esc_attr(get_theme_mod('author_writer_header_pint_new_tab','true'));
            ?>
          <?php if( get_theme_mod( 'author_writer_facebook_url' ) != '' || get_theme_mod( 'author_writer_twitter_url' ) != '' || get_theme_mod( 'author_writer_instagram_url' ) != '' || get_theme_mod( 'author_writer_youtube_url' ) != '' || get_theme_mod( 'author_writer_pint_url' ) != '') { ?>
            <?php if( get_theme_mod( 'author_writer_facebook_url' ) != '') { ?>
              <a <?php if($author_writer_header_fb_new_tab != false ) { ?>target="_blank" <?php } ?>href="<?php echo esc_url( get_theme_mod( 'author_writer_facebook_url','' ) ); ?>"><i class="<?php echo esc_attr(get_theme_mod('author_writer_facebook_icon','fab fa-facebook-f')); ?> me-2"></i></a>
            <?php } ?>
            <?php if( get_theme_mod( 'author_writer_twitter_url' ) != '') { ?>
              <a <?php if($author_writer_header_twt_new_tab != false ) { ?>target="_blank" <?php } ?>href="<?php echo esc_url( get_theme_mod( 'author_writer_twitter_url','' ) ); ?>"><i class="fab fa-twitter"></i></a>
            <?php } ?>
            <?php if( get_theme_mod( 'author_writer_instagram_url' ) != '') { ?>
              <a <?php if($author_writer_header_ins_new_tab != false ) { ?>target="_blank" <?php } ?>href="<?php echo esc_url( get_theme_mod( 'author_writer_instagram_url','' ) ); ?>"><i class="<?php echo esc_attr(get_theme_mod('author_writer_instagram_icon','fab fa-instagram')); ?> me-2"></i></a>
            <?php } ?>
            <?php if( get_theme_mod( 'author_writer_youtube_url' ) != '') { ?>
              <a <?php if($author_writer_header_ut_new_tab != false ) { ?>target="_blank" <?php } ?>href="<?php echo esc_url( get_theme_mod( 'author_writer_youtube_url','' ) ); ?>"><i class="<?php echo esc_attr(get_theme_mod('author_writer_youtube_icon','fab fa-youtube')); ?> me-2"></i></a>
            <?php } ?>
            <?php if( get_theme_mod( 'author_writer_pint_url' ) != '') { ?>
              <a <?php if($author_writer_header_pint_new_tab != false ) { ?>target="_blank" <?php } ?>href="<?php echo esc_url( get_theme_mod( 'author_writer_pint_url','' ) ); ?>"><i class="<?php echo esc_attr(get_theme_mod('author_writer_pint_icon','fab fa-pinterest')); ?> me-2"></i></a>
            <?php } ?>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
</div>
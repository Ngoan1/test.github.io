<?php

$author_writer_post_args = array(
    'posts_per_page'    => get_theme_mod( 'author_writer_related_post_per_page', 3 ),
    'orderby'           => 'rand',
    'post__not_in'      => array( get_the_ID() ),
);

$author_writer_number_of_post_columns = get_theme_mod('author_writer_related_post_per_columns', 3);

$author_writer_col_lg_post_class = 'col-lg-' . (12 / $author_writer_number_of_post_columns);

$author_writer_related = wp_get_post_terms( get_the_ID(), 'category' );
$author_writer_ids = array();
foreach( $author_writer_related as $term ) {
    $author_writer_ids[] = $term->term_id;
}

$author_writer_post_args['category__in'] = $author_writer_ids; 

$author_writer_related_posts = new WP_Query( $author_writer_post_args );

if ( $author_writer_related_posts->have_posts() ) : ?>
        <div class="related-post-block">
        <h3 class="text-center mb-3"><?php echo esc_html(get_theme_mod('author_writer_related_post_heading',__('Related Posts','author-writer')));?></h3>
        <div class="row">
            <?php while ( $author_writer_related_posts->have_posts() ) : $author_writer_related_posts->the_post(); ?>
                <div class="<?php echo esc_attr($author_writer_col_lg_post_class); ?> col-md-6">
                    <div id="category-post">
                        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                            <div class="page-box">
                                <?php if(has_post_thumbnail()) { ?>
                                        <?php the_post_thumbnail();  ?>    
                                <?php } ?>
                                <div class="box-content text-start">
                                    <h4 class="text-start py-2"><a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php the_title_attribute(); ?>"><?php the_title();?></a></h4>
                                    
                                    <p><?php echo wp_trim_words(get_the_content(), get_theme_mod('author_writer_excerpt_count',10) );?></p>
                                    <?php if(get_theme_mod('author_writer_remove_read_button',true) != ''){ ?>
                                    <div class="readmore-btn text-start mb-1">
                                        <a href="<?php echo esc_url( get_permalink() );?>" class="blogbutton-small" title="<?php esc_attr_e( 'Read More', 'author-writer' ); ?>"><?php echo esc_html(get_theme_mod('author_writer_read_more_text',__('Read More','author-writer')));?></a>
                                    </div>
                                    <?php }?>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </article>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
<?php endif;
wp_reset_postdata();
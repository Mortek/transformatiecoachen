<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    
    <?php get_template_part( 'content-single', get_post_format() ); ?>
    <?php $tags = get_the_terms( get_the_ID(), 'post_tag' );
    
    if ( ! empty( $tags ) ) : ?>
    
        <div class="tag-box">
            <span><?php _e('Tags', kopa_get_domain()); ?>:</span>
            <?php the_tags('', ' '); ?>
        </div><!--tag-box-->
    
    <?php endif; ?>
  
    <?php if ( is_singular('post') )
        kopa_get_related_articles(); 
    elseif ( is_singular('portfolio') ) 
        kopa_get_related_portfolio(); ?>
    
    <?php comments_template(); ?>

<?php endwhile; else : ?>

    <?php get_template_part( 'content', 'notfound' ); ?>

<?php endif; ?>
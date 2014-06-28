<?php get_header(); ?>

        <main class="col-md-9">
            <?php if ( have_posts() ) : ?>
                <?php while ( have_posts() ) : the_post(); ?>
    
                <article>
                    <header>
                        <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                    </header>
                                                            
                    <section>
                        <figure>
                        <?php if ( has_post_thumbnail() ) {	the_post_thumbnail( 'large' ); } ?> 
                        </figure>
                        
                        <?php the_content(); ?>
                    </section>    
                </article>
				
	            <?php endwhile; ?>
            <?php endif; ?>
        </main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
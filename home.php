<?php get_header(); ?>

        <main class="col-md-9">
            <?php if ( have_posts() ) : ?>
                <?php while ( have_posts() ) : the_post(); ?>
    
                <article>
                    <header>
                        <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                        <p>Pubblicato il <time pubdate="true"><?php the_time( 'y M Y' ); ?></time><address>di <?php the_author_posts_link(); ?></address></p>
                    </header>
                    
                    <section>
                        <figure>
                        <?php if ( has_post_thumbnail() ) {	the_post_thumbnail( 'medium' ); } ?> 
                        </figure>
                        
                        <?php the_content( 'Continua a leggere...' ); ?>
                    </section>
                    
                    <footer>
                        <p><?php the_tags(); ?></p>
                    </footer>   
                </article>
				
	            <?php endwhile; ?>
            <?php endif; ?>

            <?php page_nav_link(); ?>
        </main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
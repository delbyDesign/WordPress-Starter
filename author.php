<?php get_header(); ?>

        <main class="col-md-9">
            <?php if ( have_posts() ) : ?>
            
            <header>
                <h1>Autore: <?php the_author(); ?></h1>
            </header>
            
            <section>
                <?php if ( get_the_author_meta( 'description' ) ) : ?>
                    <figure>
		              <?php echo get_avatar( get_the_author_meta( 'user_email' ) ); ?>
                    </figure>
                <?php endif; ?>
                
                <h2>Info su <?php the_author(); ?> | <?php the_author_meta( 'user_email' ) ?></h2>
                <p><?php the_author_meta( 'description' ); ?></p>
            </section>
            
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
            <?php else : ?>
                
                <article>
                    <header>
                        <h1>Questo autore non ha nessun post.</h1>
                    </header>

                    <section>
                        <p>Prova a fare una ricerca.</p>
                    </section>

                    <footer>
                        <?php get_search_form(); ?>
                    </footer>
                </article>
            
            <?php endif; ?>

            <?php page_nav_link(); ?>
        </main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
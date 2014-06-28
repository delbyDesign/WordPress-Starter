<?php get_header(); ?>

        <main class="col-md-9">
            <?php if ( have_posts() ) : ?>
            
            <header>
                <h1>
                    <?php if ( is_day() ) :
							printf( __( 'Archivio: %s' ), get_the_date() );

						elseif ( is_month() ) :
							printf( __( 'Archivio: %s' ), get_the_date( 'F Y' ) );

						elseif ( is_year() ) :
							printf( __( 'Archivio: %s' ), get_the_date( 'Y' ) );
                        
                        elseif ( is_category() ) :
							single_cat_title( 'Archivio: ' );
                    
                        elseif ( is_tag() ) :
							single_tag_title( 'Archivio: ' );?>
                    <?php endif;?>
                </h1>
            </header>
            
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
                        <h1>Nessun risultato trovato.</h1>
                    </header>

                    <section>
                        <p>Prova con un'altra ricerca.</p>
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
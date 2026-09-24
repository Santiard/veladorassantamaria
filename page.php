<?php
/**
 * Plantilla para Páginas Estáticas (Nosotros, Contacto, Políticas) - Veladoras Santa María
 */

get_header();
?>

<main id="primary" class="site-main py-10">
    <div class="container-vsm">
        <?php
        while ( have_posts() ) :
            the_post();
            ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class( 'card-clean' ); ?>>
                <header class="entry-header mb-6">
                    <h1 class="entry-title" style="font-family: var(--font-heading); color: var(--color-blue); font-size: 2.2rem; font-weight: 800;">
                        <?php the_title(); ?>
                    </h1>
                </header>

                <div class="entry-content" style="color: var(--text-main); font-size: 1.05rem; line-height: 1.8;">
                    <?php the_content(); ?>
                </div>
            </article>
            <?php
        endwhile;
        ?>
    </div>
</main>

<?php
get_footer();

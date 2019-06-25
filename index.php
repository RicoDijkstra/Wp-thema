<?php
// header toevoegen
get_header();
?>
<div class="container">
  <main>
    <div>
<?php
// de wordpresss loop
if ( have_posts() ) :
  while ( have_posts() ) : the_post() ?>

            <article class="bericht">

          <a href="<?php the_permalink() ?>"<h2><?php the_title(); ?></h2>
            <?php the_content() ?>

          </article>
          <!-- einde container -->
          <?php endwhile;
          else :
            echo '<p>Er zijn geen berichten gevonden.</p>';
          endif;
          // einde wordpresss loop

          ?>
        </div>
        <aside>
            <?php     dynamic_sidebar( 'widget_aside' ); ?>
        </aside>
      </main>
  </div>
          <?php
          // footer toevoegen
          get_footer();
           ?>

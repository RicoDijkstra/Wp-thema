<?php // Header toevoegen
get_header();
?>
<div class="container">
<main>
  <div>
    <h2>De berichten van de categorie <em class="zoek-term-in-kop"><?php echo single_cat_title(); ?></em></h2>
<?php
 // De wordpress loop
 if ( have_posts() ) :
 while ( have_posts() ) : the_post() ?>

<article class="bericht">
<a href="<?php the_permalink() ?>">
  <h3>
    <?php the_title()?>
  </h3>
</a>
<?php the_content()?>
</article>
<!-- einde container -->
<?php endwhile;
else :
echo "Geen berichten gevonden voor deze categorie";
endif;
// einde Wordpress loop
?>
</div>
<aside>
<?php dynamic_sidebar('widget_aside'); ?>
</aside>
</main>
</div>
<?php
// Footer toevoegen
get_footer();
?>

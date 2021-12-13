<?php 
get_header(); 
?>
    <section class="section-post">
    <title class="post-title"><?php echo the_title(); ?></title>   
         <?php 
         if (have_posts() ){ 

            while(have_posts()){ 
                the_post();
                get_template_part('template-parts/content','article');
            }
         }
         ?> 
    </section>

<?php 
get_footer();
?>
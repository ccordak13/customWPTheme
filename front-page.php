<section class="bgimage"> 
    <div class="container-fluid"> 
        <div class="row"> 
            <div class="col-lg-12 col-md-12 col-sm-12"> 
                <?php get_header();?>
                <h5><?php bloginfo( 'name' ); ?></h5>
                <h6><?php bloginfo( 'description' ); ?></h6>
                <br>
                <img src="wp-content/themes/cierraTheme/assets/images/arrow.png" class ="arrow">
            </div>  
        </div>  
    </div>  
</section>  

    <section class="front"> 
         <?php 
         
         if (have_posts() ){ 

            while(have_posts()){ 

                the_post();
                the_content();
            }
         }
         ?> 
    </section>

<?php 
get_footer();
?>
<?php
/*
 Template Name: contact
 */
 ?>
 <?php 
 get_header();
 ?>

 <main>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <?php if(have_posts()) : ?>
                    <?php while (have_posts()) : the_post();?>
                        <div class="contact">
                            <h4 class="text-center">LIÊN HỆ VỚI CHÚNG TÔI</h4>

                            <?php the_content(); ?>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?> 
                
            </div>
            <div class="col-md-4">
                <div class="sidebar">

                    <div class="widget-fanpage">
                        <div class="fanpage">
                            <div class="title-fanpag"><h4>FANPAG CHÚNG TÔI</h4></div>
                            <div class="iframe">
                                <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FIZWAYCoLtd%2F%3Fhc_ref%3DARRgKO_h-zNHPepPyEW_y3q0p24iX9E77wnekAF-yHqtKwlc2G1EfWASz33gipS1GbU%26fref%3Dnf%26__xts__[0]%3D68.ARCOaAdS4GQZtjbfk_JwgzzWbFywGpWXR7-GLtkxCN1PgtN4t9gW-mDvU1VfjIu9RbJtG7LrHt5pPam5YNPBCj0S1t3ZpF45wiBd8otwwM7z95D8uyBPMLWqOoUKUisDLypuz8JKLQUOSvTC2otIITyocmyJys-APbCKuMwptpt7jc_NJxgBUkH83g%26__tn__%3DkC-R&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId"  style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            

        </div>
    </main>

    <?php 
    get_footer();
    ?>
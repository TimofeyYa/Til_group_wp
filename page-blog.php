<?php get_header();?>
<?php

/* Template Name: blogs */

?>

<link rel="stylesheet" href='<?php echo get_template_directory_uri()?>/assets/css/blogpage.css'>
<link rel="stylesheet" href='<?php echo get_template_directory_uri()?>/assets/css/media.css'>


    <main class="main">
            <section class="blogpage">
                <div class="blogpage__top">
                    <div class="container">
                        <a href="<?php echo get_home_url(); ?>" class="blogpage__back">
                            <div class="blogpage__backBtnWrap">
                                <div class="blogpage__backBtn">
                                    <svg width="9" height="16" viewBox="0 0 9 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8 1L1 8L8 15" stroke="#52687B" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>                                        
                                </div>
                            </div>
                            <div class="blogpage__backTxt pageBlog__back">
                                <p>Блог</p>
                            </div>
                        </a>
                        <div class="blogpage__search">
                            <div class="blogpage__searchWrap">
                                <input type="text" placeholder="Поиск в блоге">
                                <div class="blogpage__searchPic">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M21 21L16.6569 16.6569M16.6569 16.6569C18.1046 15.2091 19 13.2091 19 11C19 6.58172 15.4183 3 11 3C6.58172 3 3 6.58172 3 11C3 15.4183 6.58172 19 11 19C13.2091 19 15.2091 18.1046 16.6569 16.6569Z" stroke="#292929" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>                                        
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="blogpage__content">
                    <div class="container">
                        <div class="blogpage__contentWrap">
                        <?php if(have_posts()) : ?>
					<?php while(have_posts()) : the_post(); ?>
					
					<?php endwhile; ?>
					<?php endif; ?>
                    <?php
					global $post;
					$args = array( 'numberposts' => 9 , 'category' => 1, 'orderby' => 'date');
					$myposts = get_posts( $args );
					foreach( $myposts as $post ){ setup_postdata($post);
					?>
					<article class="blog__elem" >
                        <a href="<?php the_permalink()?>">
                            <div class="blog__elemItemPic" style="background-image: url(<?php echo the_post_thumbnail_url() ?>);"></div>
                            <div class="blog__elemItemTxt">
                                <div class="blog__elemItemTitle">
                                    <h3><?php the_title()?></h3>
                                </div>
                                <div class="blog__elemItemDate">
                                    <time><?php echo get_the_date('j F Y'); ?></time>
                                </div>
                            </div>
                        </a>
                    </article>
					<?php
					}
					wp_reset_postdata();
					?>
                        </div>
                        <div class="blogpage__add">
                            <div class="blogpage__addWrap">
                                <p>Показать еще</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    <!-- <script>
        const mainBtn = document.querySelector('.goHome');

        mainBtn.addEventListener('click', ()=>{
        window.location.href ="";
    })
    </script> -->

    <script src='<?php echo get_template_directory_uri()?>/assets/js/blogadd.js'></script>
<?php get_footer();?>

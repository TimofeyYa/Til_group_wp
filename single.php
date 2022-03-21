<?php get_header();?>
<?php

/* Template Name: post */

?>  

<link rel="stylesheet" href='<?php echo get_template_directory_uri()?>/assets/css/blogpage.css'>
<link rel="stylesheet" href='<?php echo get_template_directory_uri()?>/assets/css/single.css'>
<link rel="stylesheet" href='<?php echo get_template_directory_uri()?>/assets/css/media.css'>
<link rel="stylesheet" href='<?php echo get_template_directory_uri()?>/assets/css/mediasingle.css'>
<style>
    ol{
        list-style:decimal;
    }
    ul{
        list-style:disc;
    }

</style>
    <main class="main__post">
            <section class="blogpage">
                <div class="blogpage__top">
                    <div class="container">
                        <a href="./blog" class="blogpage__back">
                            <div class="blogpage__backBtnWrap">
                                <div class="blogpage__backBtn">
                                    <svg width="9" height="16" viewBox="0 0 9 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8 1L1 8L8 15" stroke="#52687B" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>                                        
                                </div>
                            </div>
                            <div class="blogpage__backTxt post__backTxt">
                                <p>Назад в блог</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="container">
                    <div class="post__content">
                        <div class="post__contentFirst">
                            <div class="post__contentTitle">
                                <h1><?php the_title()?></h1>
                            </div>
                            <div class="post__contentDate">
                                <time><?php echo get_the_date('j F Y'); ?></time>
                            </div>
                            <div class="post__contentFirstPic" style="background-image: url(<?php echo the_post_thumbnail_url() ?>)">

                            </div>
                        </div>
                        <div class="post__contentMain">
                            <?php the_content(); ?>
                        </div>
                    </div>
                </div>
            </section>

            <section class="singleOffer">
                <div class="container">
                    <div class="singleOffer__pic">
                        <div class="singleOffer__picWrap">
                            <img src="<?php echo get_template_directory_uri()?>/assets/source/singleoffer/laptop.png" alt="">
                        </div>
                    </div>
                    <div class="singleOffer__txt">
                        <h2>Онлайн курс по классическим опционам от практикующих трейдеров</h2>

                        <p>Научись зарабатывать и защищать свои инвестии на рынке акций. 
                        Используй наш опыт и сэкономь свое время</p>

                        <a href="<?php echo get_home_url(); ?>">Подробнее</a>
                    </div>
                </div>
            </section>
        </main>

<?php get_footer();?>
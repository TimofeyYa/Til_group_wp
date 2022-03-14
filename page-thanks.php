<?php get_header();?>
<?php

/* Template Name: Thanks */

?>
     <main class="main">
        <section class="firstscreen">
            <div class="container">
                <div class="firstscreen-text">
                    <h1>Ваша заявка успешно отправлена</h1>
                    <h4>Мы с вами свяжемся через несколько минут</h4>
                    <a href="<?php echo home_url();?>" class="main-btn main-btn__a goHome">Вернуться на главную</a>
                </div>
                <div class="firstscreen-pic">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/source/other/render.png" alt="render">
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
<?php get_footer();?>

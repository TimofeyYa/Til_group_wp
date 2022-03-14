<?php

function strategy_assets() {
wp_enqueue_style( 'BebasNeue', get_template_directory_uri() . '/assets/Fonts/BebasNeue/stylesheet.css' );

wp_enqueue_style( 'Stolzl', get_template_directory_uri() . '/assets/Fonts/Stolzl/stylesheet.css' );

wp_enqueue_style( 'reset', get_template_directory_uri() . '/assets/css/reset.css' );

wp_enqueue_style( 'main', get_template_directory_uri() . '/assets/css/style.css' );

wp_enqueue_style( 'media', get_template_directory_uri() . '/assets/css/media.css' );

wp_enqueue_script( 'system', get_template_directory_uri() . '/assets/JS/anim.js', array(), '20151215', true );

wp_enqueue_script( 'works', get_template_directory_uri() . '/assets/JS/main.js', array(), '20151215', true );

wp_enqueue_script( 'stonk', get_template_directory_uri() . '/assets/JS/povarSlider.js', array(), '20151215', true );

wp_enqueue_script( 'form', get_template_directory_uri() . '/assets/JS/serfSlider.js', array(), '20151215', true );

wp_enqueue_script( 'phoneInp', get_template_directory_uri() . '/assets/JS/jquery.maskedinput.js', array(), '20151215', true );



}
add_action( 'wp_enqueue_scripts', 'strategy_assets' );

show_admin_bar(false);

add_action("wp_ajax_send_mail", "send_mail");
add_action("wp_ajax_nopriv_send_mail", "send_mail");

function send_mail(){
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $mail = $_POST['email'];
    $comment = $_POST['comment'];
    
  if (!empty($name)) {
    $message = 'Оставлена заявка! Имя:'.$name.', телефон: '.$phone;
  } else {
    $message = 'Оставлена заявка на рассылку! Почта:'.$mail;
  }
    
  echo 'OK';
  remove_all_filters( 'wp_mail_from' );
  remove_all_filters( 'wp_mail_from_name' );


  wp_mail( 'tim02timka@mail.ru', 'Заявка с сайта', $message );
  wp_die();
}
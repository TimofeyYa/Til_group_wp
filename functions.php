<?php

function strategy_assets() {

wp_enqueue_style( 'reset', get_template_directory_uri() . '/assets/css/reset.css' );




}
add_action( 'wp_enqueue_scripts', 'strategy_assets' );

show_admin_bar(false);

add_action("wp_ajax_send_mail", "send_mail");
add_action("wp_ajax_nopriv_send_mail", "send_mail");


add_theme_support( 'post-thumbnails' );

function send_mail(){
  
  $type = $_POST['type'];
  $name = $_POST['name'];
  $phone = $_POST['phone'];
  $test = $_POST['test'];
  $target = $_POST['target'];

  print_r(strcmp($test,"traid"));

  if (strcmp($test,"traid") != 0){
    wp_die('stop bot');
  }

  $message = '<strong>Оставлена заявка!</strong><br><br> <strong>Имя: </strong>'.$name.'<br><strong>Телефон: </strong><a href="tel'.$phone.'">'.$phone.'</a><br><strong>Тип заявки: </strong>'.$type;

  remove_all_filters( 'wp_mail_from' );
  remove_all_filters( 'wp_mail_from_name' );

  add_filter( 'wp_mail_content_type', 'set_html_content_type' );
  if ( wp_mail( $target, 'Заявка с сайта', $message )){
    echo 'OK';
  } else {
    echo 'None';
  }

  remove_filter( 'wp_mail_content_type', 'set_html_content_type' );
  wp_die();
}
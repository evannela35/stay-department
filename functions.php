<?php
add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );

function enqueue_parent_styles() {
   wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}


function profile_register_widget() {

  register_widget( 'profile_widget' );

}

add_action( 'widgets_init', 'profile_register_widget' );

class profile_widget extends WP_Widget {

  function __construct() {

  parent::__construct(

  // widget ID

  'profile_widget',

  // widget name

  __('Profile', ' profile_widget_domain'),

  // widget description

  array( 'description' => __( 'Profile Widget', 'profile_widget_domain' ), )

  );

}

public function widget( $args, $instance ) {
  $title = apply_filters( 'widget_title', $instance['title'] );

  echo  __('<div class="profile">');
  if (is_user_logged_in()) {
    $user = wp_get_current_user();
    echo um_user('display_name');
    echo get_avatar($user->user_email, 32);
    return;
  }

  echo $args['before_widget'];

  //if title is present

  if ( ! empty( $title ) )

    echo $args['before_title'] . $title . $args['after_title'];

  //output

  echo __( '<button id="login"><a href="/login">Login</a></button><button id="register"><a href="register">Sign Up</a></button>' );
  echo  __('</div>');
  echo $args['after_widget'];

}

public function form( $instance ) {

  if ( isset( $instance[ 'title' ] ) )

  $title = $instance[ 'title' ];

  else

  $title = __( 'Default Title', 'profile_widget_domain' );

  ?>

  <p>

  <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>

  <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />

  </p>

  <?php

}

public function update( $new_instance, $old_instance ) {

  $instance = array();

  $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';

  return $instance;

}

}

function displayTodaysDate( $atts )

{

return date(get_option('date_format'));

}

add_shortcode( 'datetoday', 'displayTodaysDate');

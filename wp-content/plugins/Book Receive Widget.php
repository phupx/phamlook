<?php
/*
Plugin Name: Book Gift Widget
Plugin URI: http://phamlook.com
Description: Pham Xuan Phu
Author: Lightning Pham
Version: 1.0
Author URI: http://google.com
*/
add_action('widgets_init', 'create_phamlook_widget');
function create_phamlook_widget() {
	register_widget('phamlook_widget');
}

/* Tao widget */
class phamlook_widget extends WP_Widget {
	function __construct() {
        parent::__construct( 
            'phamlook_widget',
            'Book widget',
            array(
                'description' => 'widget tang sach cua PHAMLOOK'
                )
         );
	}

// Thiet lap truong nhap lieu
    function form($instance) {
        $default = array(
            'title' => 'Book Widget',
            'content' => 'Nhap vao noi dung'
            );
        $instance = wp_parse_args($instance, $default);
        $title = esc_attr($instance['title']);
        echo ('Title: <input type="text" class="widefat" name="'.$this->get_field_name('title').'" value="'.$title.'"/>');
        echo ('Nhap noi dung: <textarea class="widefat" name="'.$this->get_field_name('content').'"></textarea>');
    }

    // Luu du lieu tu form
    function update($new_instance, $old_instance) {
        $instance = $old_instance;
        $instance['title'] = $new_instance['title'];
        $instance['content'] = $new_instance['content'];
        return $instance;
    }

    // Hien thi widget ra ben ngoai
    function widget($args, $instance) {
        extract($args);
        $title = apply_filters('widget_title', $instance['title']);
        echo $before_widget;

        echo $before_title.$title.$after_title;
        echo $instance['content'];
        echo $after_widget;
    }
}

?>
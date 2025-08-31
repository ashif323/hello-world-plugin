<?php

/**
 * Plugin Name: Hello World Plugin
 * Description: A simple WordPress plugin that displays "Hello, World!" on the admin dashboard.
 * Version: 1.0.0
 * Author: Mohammad Ashif Iqbal
 * Author URI: https://ashifiqbal.com
 * plugin URI: https://ashifiqbal.com
 */ 

//admin notices


add_action("admin_notices", "hw_show_warning_message");

function hw_show_success_message(){
    echo '<div class="notice notice-success is-dismissible "><p>Hello, World! I am a success message</p></div>';
}

function hw_show_error_message(){
    echo '<div class="notice notice-error is-dismissible"><p>Hello, World! I am an error message</p></div>';
}
function hw_show_info_message(){
    echo "<div class ='notice notice-info is-dismissible'><p>Hello, World! I am an informational message</p></div>";
}

function hw_show_warning_message(){
    echo "<div class ='notice notice-warning is-dismissible'><p>Hello, World! I am a warning message</p></div>";
}

// admin dasboard widget

add_action("wp_dashboard_setup","hw_add_dashboard_widgets");

function hw_add_dashboard_widgets(){
    wp_add_dashboard_widget("hw_dashboard_widget","Hello World Dashboard Widget","hw_dashboard_widget_display");
}

function hw_dashboard_widget_display(){
    echo "<p>Hello, World! This is my first dashboard widget</p>";
}
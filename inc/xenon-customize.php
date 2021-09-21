<?php


function xenon_customizer($wp_customize) {

    // Bannar Section
    $wp_customize -> add_section('bannar_section', array(
        'title' => __('Bannar Section', 'xenon')
    ));

    // Bannar Heading Setting
    $wp_customize -> add_setting('bannar_heading', array(
        'default' => __('I Am xenon doe', 'xenon')
    ));

    // Bannar Heading Control
    $wp_customize -> add_control('bannar_heading_ctrl', array(
        'label' => __('Write Heading', 'xenon'),
        'type' => 'text',
        'settings' => 'bannar_heading',
        'section' => 'bannar_section'
    ));

    // Bannar Description Setting
    $wp_customize -> add_setting('bannar_desc', array(
        'default' => __('Lorem ipsum dolor sit amet.', 'xenon')
    ));

    // Bannar Description Control
    $wp_customize -> add_control('bannar_desc_ctrl', array(
        'label' => __('Write Description', 'xenon'),
        'type' => 'textarea',
        'settings' => 'bannar_desc',
        'section' => 'bannar_section'
    ));

    // Bannar Btn Setting
    $wp_customize -> add_setting('bannar_btn', array(
        'default' => __('Read More', 'xenon')
    ));

    // Bannar Btn Control
    $wp_customize -> add_control('bannar_btn_ctrl', array(
        'label' => __('Write Button Text', 'xenon'),
        'type' => 'text',
        'settings' => 'bannar_btn',
        'section' => 'bannar_section'
    ));

    // Bannar Btn Link Setting
    $wp_customize -> add_setting('bannar_btn_link', array(
        'default' => 'https://www.google.com'
    ));

    // Bannar Btn Link Control
    $wp_customize -> add_control('bannar_btn_link_ctrl', array(
        'label' => __('Write Button URL', 'xenon'),
        'type' => 'url',
        'settings' => 'bannar_btn_link',
        'section' => 'bannar_section'
    ));

}
add_action('customize_register', 'xenon_customizer');
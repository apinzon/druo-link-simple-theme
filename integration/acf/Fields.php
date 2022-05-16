<?php

if( function_exists('acf_add_local_field_group') ):

    acf_add_local_field_group(array(
        'key' => 'group_615ea3e2b16c2',
        'title' => 'Blank Canvas',
        'fields' => array(
            array(
                'key' => 'field_615ea3ef51d57',
                'label' => 'Custom CSS',
                'name' => 'custom_css',
                'type' => 'acf_code_field',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
                'mode' => 'css',
                'theme' => 'xq-light',
            ),
            array(
                'key' => 'field_616d1997520cf',
                'label' => 'Template Box Width',
                'name' => 'template_box_width',
                'type' => 'number',
                'instructions' => 'Fixed width of the box in the middle.',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => 510,
                'placeholder' => '',
                'prepend' => '',
                'append' => 'px',
                'min' => '',
                'max' => '',
                'step' => '',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'page',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => true,
        'description' => '',
    ));

endif;

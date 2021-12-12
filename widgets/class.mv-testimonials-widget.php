<?php

class MV_Testimonials_Widget extends WP_Widget{

    public function __construct(){

        $widget_options = array(
            'description' => __('A simple testimonials viewer widget', 'mv-testimonials'),
        );

        parent::__construct(
            'mv-testimonials',
            'MV Testimonials',
            $widget_options,
        );

        add_action( 'widgets_init', function(){
            register_widget( 'MV_Testimonials_Widget' );
        } );

    }

    public function form( $instance ){
        $title = 'This is a title';
        $number = 5;
        $image = false;
        $occupation = true;
        $company  = true;
        ?>
            <p>
                <label for="<?= $this->get_field_id( 'title' ); ?>"><?php esc_html_e( 'Title', 'mv-testimonials' ); ?>:</label>
                <input type="text" class="widefat" id="<?= $this->get_field_id( 'title' );  ?>" name="<?= $this->get_field_name( 'title' ); ?>" value="<?= esc_attr( $title ); ?>"  />
            </p>

            <p>
                <label for="<?= $this->get_field_id( 'number' ); ?>"><?php esc_html_e( 'Number of testimonials to show', 'mv-testimonials' ); ?>:</label>
                <input type="number" class="tiny-text" step="1" min="1" size="3" id=<?= $this->get_field_name( 'number' ); ?> value="<?= esc_attr( $number ); ?>" />
            </p>

            <p>
                <input type="checkbox" class="checkbox" id="<?= $this->get_field_id( 'image' ); ?>" name="<?= $this->get_field_name( 'image' ) ?>" <?php checked( $image ) ?> />
                <label for="<?= $this->get_field_id( 'image' ); ?>"><?php esc_html_e('Display image?', 'mv-testimonials' ); ?></label>
            </p>

            <p>
                <input type="checkbox" class="checkbox" id="<?= $this->get_field_id( 'occupation' ); ?>" name="<?= $this->get_field_name( 'occupation' ); ?>" <?php checked( $occupation ); ?> />
                <label for="<?= $this->get_field_id( 'occupation' ); ?>"><?php esc_html_e('Display occupation?', 'mv-testimonials') ?></label>
            </p>

            <p>
                <input type="checkbox" class="checkbox" id="<?= $this->get_field_id(' company '); ?>" name="<?= $this->get_field_name( 'company' ) ?>" <?php checked( $company ); ?> />
                <label for="<?= $this->get_field_id( 'company' ) ?>"><?php esc_html_e( 'Display company?', 'mv-testimonials' ); ?></label>
            </p>


        <?php
    }

    public function widget( $args, $instance ){

    }

    public function update( $new_instance, $old_instance ){

    }

}
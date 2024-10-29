<?php
/**
 * CTA Block template.
 *
 * @param array $block The block settings and attributes.
 */

// Load values and assign defaults.
$main_call_text         = !empty(get_field( 'main_call_text' )) ? get_field( 'main_call_text' ) : 'Put the main call text here...';
$secondary_call_text    = !empty(get_field( 'secondary_call_text' )) ? get_field( 'secondary_call_text' ) : 'Put the secondary call text here...';
$image                  = get_field( 'image' );
$background_color       = get_field( 'background_color' );
$main_text_color        = get_field( 'main_text_color' );
$secondary_text_color   = get_field( 'secondary_text_color' );

// Support custom "anchor" values.
$anchor = '';
if ( ! empty( $block['anchor'] ) ) {
    $anchor = 'id="' . esc_attr( $block['anchor'] ) . '" ';
}

// Create class attribute allowing for custom "className" and "align" values.
$class_name = 'cta';
if ( ! empty( $block['className'] ) ) {
    $class_name .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
    $class_name .= ' align' . $block['align'];
}
if ( $background_color || $main_text_color  || $secondary_text_color) {
    $class_name .= ' has-custom-acf-colors';
}

?>
<div <?php echo esc_attr( $anchor ); ?>class="<?php echo esc_attr( $class_name ); ?>" style="background-color: <?php echo esc_attr( $background_color ); ?>">
    <div class="cta-grid">
        <div class="cta-text">
            <h2 style="color: <?php echo esc_attr( $main_text_color ); ?>">
                <?php echo esc_html( $main_call_text ); ?>
            </h2>
            <p style="color: <?php echo esc_attr( $secondary_text_color ); ?>">
                <?php echo esc_html( $secondary_call_text ); ?>
            </p>
        </div>
        <div>
            <?php if ( $image ) : ?>
                <?php echo wp_get_attachment_image( $image['ID'], 'full', '', array( 'class' => 'cta__img' ) ); ?>
            <?php else : ?>    
                <img class="cta-image" src="<?php echo get_template_directory_uri()."/images/cta.png" ?>" alt="@">
            <?php endif; ?>      
        </div>
    </div>
</div>         
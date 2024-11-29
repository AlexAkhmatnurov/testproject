<?php
    $title = get_field('title');
    $content = get_field('content');
?>

<div class="services-block">
    <?php if ($title): ?>
        <h2><?php echo esc_html($title); ?></h2>
    <?php endif; ?>
    <?php if ($content): ?>
        <p><?php echo esc_html($content); ?></p>
    <?php endif; ?>
</div>
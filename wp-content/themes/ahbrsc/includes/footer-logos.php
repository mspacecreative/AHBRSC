<?php

$images = get_field('footer_logos', 'options');
$size = 'medium'; // (thumbnail, medium, large, full or custom size)

if( $images ): ?>
    <ul class="footer-logos">
        <?php foreach( $images as $image ): ?>
            <li>
            	<?php echo wp_get_attachment_image( $image['ID'], $size ); ?>
            </li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>
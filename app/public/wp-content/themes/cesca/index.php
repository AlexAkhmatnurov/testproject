<?php 
get_header();
get_template_part("templates/hero"); 
get_template_part("templates/services");
get_template_part("templates/accreditation");
get_template_part("templates/cta");

echo "Start of services block<br>";
$block = [
    'blockName' => 'acf/services',
    'attrs' => [
        'title' => 'title',
        'content' => 'content',
    ],
];  
echo render_block($block);
echo "End of services block";

get_footer();

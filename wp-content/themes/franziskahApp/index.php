

<?php
get_header();
?>


<?php
if( have_posts() ){
    while( have_posts() ){
        the_post();
        get_template_part( 'template-parts/content', 'archive');
        the_content();
    }
}
?>

<?php
get_footer();
?>
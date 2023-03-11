

<?php
wp_head();
?>


<?php
if( have_posts() ){
    while( have_posts() ){
        the_post();

        get_template_part( 'template-parts/content', 'events');

        the_content();
    }
}
?>
<?php
get_header();
?>




<?php
get_footer();
?>
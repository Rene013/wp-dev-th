<?php
/*Template Name: Contact Us
*/
?>

<?php get_header('secondary'); ?>
<section class="page-wrap">
    <div class="container">
        <h1><?php the_title(); ?></h1>
        <div class="row">
            <div class="col-md-6">
                <p>The contact page form</p>
            </div>
            <div class="col-md-6">
                <?php get_template_part('includes/section', 'content'); ?>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>
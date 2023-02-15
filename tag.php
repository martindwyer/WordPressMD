<?php
  require('header-site.php');
?>
<main class="container">
    <div class="row">
        <div class="site-body col-lg-9">
            <h2>Tag -> 
                <?php echo single_cat_title(); ?>
            </h2>
            <h3>
                <?php echo category_description() ?>
            </h3><br>
                <?php require('wt_list_posts.php'); ?>
	 </div>
        <div class="site-sidebar col-lg-3">
            
            <?php get_sidebar(); ?>
        </div>
    </div>
</main>
<?php
    get_footer();
?>

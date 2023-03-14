<?php

/**
 * The template for the site footer containing each of the following:
 *
 * 1.  An overview of the site.
 * 2.  Site navigation menu.
 * 3.  An interactive list of posts by category
 * 4.  Social media links.
 *
 * @package NorthParkMD
 */
?>
<footer class="">
    <div class="container-fluid pt-4 pt-md-4 px-4 px-md-3 bg-dark text-light">
        <div class="row">
            <div class="col-md-3 mb-3">
                <h5>
                    North Park Colorado
                </h5>

                <div class="footer-description">
                    <p class="site-description">This website serves as both a personal tribute to North Park as well as
                        a site demo for <span class="bytes-font">md</span>&nbsp; Web Technologies, <span
                                class="bytes-font">md</span>&nbsp; Bytes</a>. </p>

                </div>
            </div>
            <div class="col-sm-6 col-md-3 mb-3">
                <h5>Site Navigation Menu</h5>

				<?php wp_nav_menu( array(
					'menu' => 'footer-location-1'
				) ) ?>

            </div>
            <div class="col-sm-6 col-md-3 mb-3">
                <h5>Articles by Category</h5>
                <div class="categories">
					<?php wp_list_categories( array(
						'exclude'    => "1",
						'show_count' => 1,
						'style'      => "list",
						'title_li'   => ""
					) ); ?>
                </div>

            </div>
            <div class="col-6 col-md-3 mb-3 social-media">
                <h5>Social Media</h5>
                <ul class="list-unstyled">
                    <li class="mb-2"><a href="https://www.facebook.com/goprimalstrength"><i
                                    class="fa-brands fa-facebook"></i></a></li>
                    <li class="mb-2"><a href="https://twitter.com/"><i class="fa-brands fa-twitter"></i></a></li>
                    <li class="mb-2"><a href="https://www.instagram.com/livestrongmd/"><i
                                    class="fa-brands fa-instagram"></i></a></li>
                    <li class="mb-2"><a href="https://www.tiktok.com/@livestrongmd?lang=en"><i
                                    class="fa-brands fa-tiktok"></i></a></li>
                    <li class="mb-2"><a href="https://www.youtube.com/channel/UCgZwHVP8keyYB9e7MDn0gZA"><i
                                    class="fa-brands fa-youtube"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="row text-center">
            <hr>
            <p>&copy; <?php echo date( 'Y' ) ?> Martin Dwyer, <span class="bytes-font">md</span>&nbsp; Web Technologies,
                <span class="bytes-font">md</span>&nbsp; Bytes.</p>

        </div>
    </div>
</footer>
<?php wp_footer(); ?>

</body>

</html>
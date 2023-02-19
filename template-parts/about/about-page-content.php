<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <?php the_title('<h1 class="entry-title">', '</h1>'); ?>

    </header><!-- .entry-header -->
    <div class="entry-content">

        <div class="featured-image">
            <img src="<?php echo get_the_post_thumbnail_url() ?>" alt="<?php the_title() ?>" />
        </div>
        <div class="row">

            <h4>High Plains</h4>
            <p><strong>North Park</strong> is a high, sparsely populated <a href="https://en.wikipedia.org/wiki/Geologic_depression">basin</a> (approximately 8,800 feet (2,700&nbsp;m) in elevation) in the <a href="https://en.wikipedia.org/wiki/Rocky_Mountains">Rocky Mountains</a> in north central <a href="https://en.wikipedia.org/wiki/Colorado">Colorado</a> in the <a href="https://en.wikipedia.org/wiki/United_States">United States</a>. It encompasses a wide valley in <a href="https://en.wikipedia.org/wiki/Jackson_County,_Colorado">Jackson County</a> rimmed by mountain ranges at the headwaters of the <a href="https://en.wikipedia.org/wiki/North_Platte_River">North Platte River</a> and several smaller tributaries, including the <a href="https://en.wikipedia.org/wiki/Michigan_River">Michigan River</a>, <a href="https://en.wikipedia.org/wiki/Illinois_River_(Colorado)">Illinois River</a>, and <a href="https://en.wikipedia.org/wiki/Canadian_River_(Colorado)">Canadian River</a>. The valley receives its name from being the northernmost of the three large mountain valleys (or parks) in Colorado on the western side of the Front Range. The others are <a href="https://en.wikipedia.org/wiki/Middle_Park_(Colorado_basin)">Middle Park</a> and <a href="https://en.wikipedia.org/wiki/South_Park_(Park_County,_Colorado)">South Park</a> respectively.</p>
            <!-- /wp:paragraph -->

            <h4>Mountain Ranges</h4>
            <!-- wp:paragraph -->
            <p>The basin opens out northward into <a href="https://en.wikipedia.org/wiki/Wyoming">Wyoming</a>, in the direction of flow of the North Platte. On the east side, it is rimmed by the <a href="https://en.wikipedia.org/wiki/Medicine_Bow_Mountains">Medicine Bow Mountains</a>, the <a href="https://en.wikipedia.org/wiki/Never_Summer_Mountains">Never Summer Mountains</a> and <a href="https://en.wikipedia.org/wiki/Rabbit_Ears_Range">Rabbit Ears Range</a> to the south, and the <a href="https://en.wikipedia.org/wiki/Park_Range_(Colorado)">Park Range</a> to the west. The <a href="https://en.wikipedia.org/wiki/Continental_divide">continental divide</a> rims the Park along the south and west. The valley along the Illinois River is the location of the <a href="https://en.wikipedia.org/wiki/Arapaho_National_Wildlife_Refuge">Arapaho National Wildlife Refuge</a>.</p>

            <h4>Communities</h4>
            <p>The largest community in the valley is <a href="https://en.wikipedia.org/wiki/Walden,_Colorado">Walden</a>, the Jackson County seat, that sits near the middle of the valley near the confluence of the Michigan and Illinois rivers. Smaller communities in the valley include the unincorporated hamlets of <a href="https://en.wikipedia.org/wiki/Gould,_Colorado">Gould</a> and <a href="https://en.wikipedia.org/wiki/Rand,_Colorado">Rand</a>.</p>
            <!-- /wp:paragraph -->

            <h4>Cattle and Timber</h4>
            <!-- wp:paragraph -->
            <p>The primary economic activities in the valley are <a href="https://en.wikipedia.org/wiki/Cattle">cattle</a> ranching and <a href="https://en.wikipedia.org/wiki/Timber">timber</a> harvesting, although the latter has declined substantially in recent decades.


                In the 1940s, wolves were nearly extirpated from the conterminous United States. Wolves were <a href="https://en.wikipedia.org/wiki/History_of_wolves_in_Yellowstone">reintroduced in the northern Rocky Mountains</a> in the 1990s and since at least 2014, solitary wolves have entered Colorado. <a href="https://en.wikipedia.org/wiki/Repopulation_of_wolves_in_Colorado">Wolves have migrated in from Wyoming</a> and in 2021, a pack began killing cattle.<sup><a href="https://en.wikipedia.org/wiki/North_Park_(Colorado_basin)#cite_note-1">[1]</a></sup></p>
            <!-- /wp:paragraph -->


            <h4>Getting There</h4>
            <!-- wp:paragraph -->
            <p>The valley is crossed east-west by <a href="https://en.wikipedia.org/wiki/Colorado_State_Highway_14">State Highway 14</a>, which enters from the east over <a href="https://en.wikipedia.org/wiki/Cameron_Pass_(Colorado)">Cameron Pass</a>, providing a link to the <a href="https://en.wikipedia.org/wiki/Poudre_Canyon">Poudre Canyon</a> and <a href="https://en.wikipedia.org/wiki/Fort_Collins,_Colorado">Fort Collins</a>. Highway 14 enters from the west over <a href="https://en.wikipedia.org/wiki/Muddy_Pass_(Continental_Divide)">Muddy Pass</a> which provides access to <a href="https://en.wikipedia.org/wiki/Steamboat_Springs,_Colorado">Steamboat Springs</a>, and to <a href="https://en.wikipedia.org/wiki/Middle_Park_(Colorado_basin)">Middle Park</a> in the valley of the <a href="https://en.wikipedia.org/wiki/Colorado_River_(U.S.)">Colorado River</a>. It is crossed north-south by <a href="https://en.wikipedia.org/wiki/Colorado_State_Highway_125">State Highway 125</a>, which enters from the north (from Wyoming) along the course of the North Platte. It enters from the south over <a href="https://en.wikipedia.org/wiki/Willow_Creek_Pass_(Colorado)">Willow Creek Pass</a>, providing access to the upper end of Middle Park near <a href="https://en.wikipedia.org/wiki/Granby,_Colorado">Granby</a>.</p>
            <!-- /wp:paragraph -->

            <hr style="width:10rem;margin: 2rem auto;" />
            <p style="font-size: 90%;text-align:center">Source: <a href="https://en.wikipedia.org/wiki/North_Park_(Colorado_basin)">North Park (Colorado Basin)</a> from Wikipedia, the free encyclopedia.</p>
        </div>

        <?php
        wp_link_pages(
            array(
                'before' => '<div class="page-links">' . __('Pages:', 'twentyseventeen'),
                'after'  => '</div>',
            )
        );
        ?>
    </div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->
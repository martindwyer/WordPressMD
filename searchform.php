<br><br>
<h4 style="text-align: center;">Search The Site:</h4>
<form class = "searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get">
<input class="searchform clearit form-control mr-sm-2" type="text" name="s" id="search-header" placeholder="Search" value="<?php echo the_search_query()?>" aria-label="Search" style="width:75%; padding: 0;margin-left:12.5%;text-align:center;"><br>
    <input type= "submit" value = "Search" style="width:35%; padding: 0;margin-left:32.5%;"><br>
    
</form>
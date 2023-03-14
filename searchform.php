<br><br>


<h4 style="text-align: center;">Search this site</h4>

<?php
$placeholder = "Enter Search Term";

?>
<form class="searchform" action="<?php echo esc_url(home_url('/')); ?>" method="get" style="display:flex; flex-direction: column; align-items:center; justify-content:center;">
    <input class="clearit form-control mr-sm-2" type="text" name="s" id="search-header" placeholder="<?php echo $placeholder ?>" aria-label="Search" style="width:75%; "><br>
    <input type="submit" value="Search" class="btn btn-primary""><br>
</form>
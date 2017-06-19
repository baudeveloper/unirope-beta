<form action="<?php bloginfo('siteurl'); ?>" id="searchform" method="get">
    <div>
        <?php if (ICL_LANGUAGE_CODE == 'fr') {  ?>	
        <input type="search" id="s" name="s" value="" placeholder="RECHERCHE" tabindex="1"/>
        <?php } else { ?>
        <input type="search" id="s" name="s" value="" placeholder="SEARCH" tabindex="1"/>
        <?php } ?>
		<!-- <input type="submit" value="Search" id="searchsubmit" /> -->
		<i id="searchicon" class="fa fa-search"></i>
    </div>
</form>
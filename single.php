<?php

	$post = $wp_query->post;

	if(ICL_LANGUAGE_CODE =='fr') { 
		include(TEMPLATEPATH . '/single-fr.php'); 
	} else {
		include(TEMPLATEPATH . '/single-en.php'); 
	}
	
?>


<aside id="sidebar" class="equalize clearfix">

<?php

  if(ICL_LANGUAGE_CODE =='fr') {
    include(TEMPLATEPATH . '/sidebar-fr.php'); 
  } else {
    include(TEMPLATEPATH . '/sidebar-en.php'); 
  }

?>
  
</aside>
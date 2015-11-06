<?php

      
    $person = array("name"=>"joe blow", "email"=>"jblow@madisoncollege.edu", "id"=>1);
      
    foreach($person as $attr=>$val) {
      printf("key: %s<br />value: %s<br /><hr />", $attr, $val);
    }

	
?>
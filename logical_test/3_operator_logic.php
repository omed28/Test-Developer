<?php
for ($i = 1; $i <= 8; $i++) {   
  if( $i % 2 === 0 ) {
      $result[] = $i;
  }  
}
echo count($result);
?>
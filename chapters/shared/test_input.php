<?php 

/**
 * From W3SCHOOLS. The following function validates form data to avoid exploits
 */
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>
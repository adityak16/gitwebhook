<!DOCTYPE html>
<html>
<body>

<?php
 // Prevent accidental XSS
 header("Content-type: text/plain"); 
 // Run the script - make sure that your SSH key is set with *no* password
  if ( $_POST['payload'] ) {
  $tmp = shell_exec("./pull.sh"); 
  echo "<h1>".$tmp."</h1>";
  // $output .= "<span style=\"color: #6BE234;\">\$</span> <span style=\"color: #729FCF;\">{$command}\n</span>";
  // $output .= htmlentities(trim($tmp)) . "\n";
 }
?>
</body>
</html>
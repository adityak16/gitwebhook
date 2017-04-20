<?php
 // Prevent accidental XSS
 // header("Content-type: text/html"); 
 // Run the script - make sure that your SSH key is set with *no* password
  if ( $_POST['payload'] ) {
  $tmp = shell_exec("./pull.sh"); 
  echo "<td>".$tmp."</td>";
  // $output .= "<span style=\"color: #6BE234;\">\$</span> <span style=\"color: #729FCF;\">{$command}\n</span>";
  // $output .= htmlentities(trim($tmp)) . "\n";
 }
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
	<meta charset="UTF-8">
	<title>GIT DEPLOYMENT SCRIPT</title>
</head>
<body style="background-color: #000000; color: #FFFFFF; font-weight: bold; padding: 0 10px;">
<pre>
<?php echo $tmp; ?>
</pre>
</body>
</html>
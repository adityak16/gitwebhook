<?php
	/**
	 * GIT DEPLOYMENT SCRIPT
	 *
	 * Used for automatically deploying websites via github or bitbucket, more deets here:
	 *
	 *		https://gist.github.com/1809044
	 */
	// The commands
	$commands = 'git pull'
	// Run the commands for output
	// foreach($commands AS $command){
		// Run it
		$tmp = shell_exec($commands);
		// Output
	}
	// Make it pretty for manual user access (and why not?)
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>GIT DEPLOYMENT SCRIPT</title>
</head>
<body style="background-color: #000000; color: #FFFFFF; font-weight: bold; padding: 0 10px;">

<?php echo $tmp; ?>
</pre>
</body>
</html>
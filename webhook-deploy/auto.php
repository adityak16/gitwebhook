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
</head>
<body>

<?php echo $tmp; ?>
</pre>
</body>
</html>
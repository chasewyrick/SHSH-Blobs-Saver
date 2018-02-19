<?php
if(isset($_POST['device'])) {
$device = htmlspecialchars($_POST['device']);
}
if(isset($_POST['ecid'])) {
$ecid = htmlspecialchars($_POST['ecid']);
}
if(isset($_POST['version'])) {
$version = htmlspecialchars($_POST['version']);
}
if(isset($_POST['boardconfig'])) {
$boardconfig = htmlspecialchars($_POST['boardconfig']);
}
?>

<!DOCTYPE html>
<html> 
<head>
	<meta name = "viewport" content = "width = device-width">
</head>
<body>


Device: <?php echo $device;?><br>
Version: <?php echo $version;?><br>
Boardconfig: <?php echo $boardconfig;?><br>
ECID: <?php echo $ecid;?><br>
<a href="SHSH/<?php echo $ecid;?>/blobs.php">Get your blobs</a>
<br>



<?php  
 shell_exec('mkdir SHSH/'.escapeshellarg($ecid).'');
 shell_exec('cp -i blobs.php SHSH/'.escapeshellarg($ecid).'');
 shell_exec('./tsschecker_linux -d '.escapeshellarg($device).' -i '.escapeshellarg($version).' -e '.escapeshellarg($ecid).' —boardconfig '.escapeshellarg($boardconfig).' -s --save-path SHSH/'.escapeshellarg($ecid).'');
?>


</center>
</div>
</div>
</body>
</html>

<?php
$validinput = true;
if (isset($_POST['device']) && trim($_POST['device']) != '') {
    $device = htmlspecialchars($_POST['device']);
} else {
    $validinput = false;
    $device = 'Unknown';
}
if (isset($_POST['ecid']) && trim($_POST['ecid']) != '') {
    if (ctype_alnum($_POST['ecid'])) {
        $ecid = $_POST['ecid'];
    } else {
        $validinput = false;
    	$ecid = 'Unknown';
    }
} else {
    $validinput = false;
    $ecid = 'Unknown';
}
if (isset($_POST['version']) && trim($_POST['version']) != '') {
    $version = htmlspecialchars($_POST['version']);
} else {
    $validinput = false;
    $version = 'Unknown';
}
if (isset($_POST['boardconfig']) && trim($_POST['boardconfig']) != '') {
    $boardconfig = htmlspecialchars($_POST['boardconfig']);
} else {
    $validinput = false;
    $boardconfig = 'Unknown';
}
?>

<!DOCTYPE html>
<html lang="en"> 
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
 if ($validinput) {
     shell_exec('mkdir SHSH/'.escapeshellarg($ecid).'');
     shell_exec('cp -i blobs.php SHSH/'.escapeshellarg($ecid).'');
     shell_exec('./tsschecker_linux -d '.escapeshellarg($device).' -i '.escapeshellarg($version).' -e '.escapeshellarg($ecid).' —boardconfig '.escapeshellarg($boardconfig).' -s --save-path SHSH/'.escapeshellarg($ecid).'');
 } else {
     echo '<span style="color:red;">Invalid parameters.</span>';
 }
?>


</center>
</div>
</div>
</body>
</html>

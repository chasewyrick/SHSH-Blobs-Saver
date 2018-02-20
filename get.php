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
	<style>
	body{
		background-color: #eeeeee;
		font-family: arial;
		margin: 0;
	}
h1{
	font-family: arial;
	font-weight: normal;
}

.whitexd{
width: 100%;
background-color: white;
padding: 10px 0px 0px 0px; 
line-height: 1.6;
right: 3px;

}

a{
	color: black;
	text-decoration: none;
}

button{
	width: 100%;
	height: 50px;
	border: none;
	background-color: white;	
	font-size: 13px;
}
</style>
</head>
<body>

<center><h1>SHSH Saver</h1></center><br>
<div class="whitexd">
&nbsp;Device: <?php echo $device;?><br>
&nbsp;Version: <?php echo $version;?><br>
&nbsp;Boardconfig: <?php echo $boardconfig;?><br>
&nbsp;ECID: <?php echo $ecid;?></div>

<div class="whitexd"></div><br>
<center><a href="SHSH/<?php echo $ecid;?>/blobs.php"><button>Get your blobs</button></a></center>
<br>



<?php
 if ($validinput) {
     shell_exec('mkdir SHSH/'.escapeshellarg($ecid).'');
     shell_exec('cp -i phpfiles/blobs.php SHSH/'.escapeshellarg($ecid).'');
     shell_exec('mkdir SHSH/'.escapeshellarg($ecid).'/'.escapeshellarg($version).'');
     shell_exec('cp -i phpfiles/index.php SHSH/'.escapeshellarg($ecid).'/'.escapeshellarg($version).'');
     shell_exec('./tsschecker_macos -d '.escapeshellarg($device).' -i '.escapeshellarg($version).' -e '.escapeshellarg($ecid).' —boardconfig '.escapeshellarg($boardconfig).' -s --save-path SHSH/'.escapeshellarg($ecid).'/'.escapeshellarg($version).'');
 } else {
     echo '<span style="color:red;">Invalid parameters.</span>';
 }
?>


</center>
</div>
</div>
</body>
</html>

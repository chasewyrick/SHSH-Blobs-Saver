<?php
{
foreach (glob("*.shsh2") as $filename) { 
echo str_replace("","","<a href='$filename' download>$filename</a><br>");
}
}
?>

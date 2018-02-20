<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width = device-width">
    <title>Your Blobs</title>
    <style>
        body {
            background-color: #eeeeee;
            margin: 0;
        }
        
        ul {
            list-style-type: none;
            width: 100%;
            background-color: white;
            text-overflow: ellipsis;
        }
        
        li a {
            display: block;
            color: #000;
            padding: 15px;
            text-decoration: none;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }
        
        h1 {
            font-family: arial;
            font-weight: normal;
            left: 0%;
            right: 0%;
        }
    </style>

</head>

<body>

    <body>
        <center>
            <h1>Your Blobs</h1></center>
        <?php
 $files = glob("*");  
$exclude = array('php'); 
for ($i=0; $i<count($files); $i++)  
{  
   $num = $files[$i];  
   $err = 0; 
   foreach($exclude as $term) 
   { 
      if (stristr($num,$term))  
      {  
         $err++; 
      }  
   } 
   if( !$err > 0 ) 
   { 
      echo  "<ul><li><a href='$num'>$num</a></li></ul>"; 
   } 
   $err = 0; 
}  
?>
    </body>
</body>

</html>
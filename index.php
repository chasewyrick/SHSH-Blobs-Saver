<!DOCTYPE html>
<html>

<head>
    <title>SHSH Saver</title>
    <meta name="viewport" content="width = device-width">

    <style>
        body {
            background-color: #eeeeee;
            margin: 0;
        }
        
        input {
            width: 100%;
            height: 50px;
            font-size: 13px;
            border: none;
            background-color: white;
        }
        
        button {
            width: 100%;
            height: 50px;
            border: none;
            font-size: 15px;
            background-color: white;
        }
        
        h1 {
            font-family: arial;
            font-weight: normal;
        }
    </style>
</head>

<body>
    <center>
        <h1>SHSH Saver</h1>
        <form action="get.php" method="post">
            <input type="text" name="device" value="Device" />
            <br>
            <input type="text" name="ecid" value="ECID" />
            <br>
            <input type="text" name="boardconfig" value="Boardconfig" />
            <br>
            <input type="text" name="version" value="Version" />
            <br>
            <br>
            <button type="submit" />Get Blobs</form>
        </form>
    </center>
</body>

</html>
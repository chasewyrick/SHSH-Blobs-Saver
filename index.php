
<!DOCTYPE html>
<html>

<head>
    <title>SHSH Saver</title>
    <meta name="viewport" content="width = device-width">

    <style>
        body {
            background-color: #eeeeee;
            margin: 0;
            font-family: arial;
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

        a{
            font-family: arial;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <center>
        <h1>SHSH Saver</h1>
        <form action="get.php" method="post">
            <input type="text" name="device" placeholder="Device" />
            <br>
            <input type="text" name="ecid" placeholder="ECID" />
            <br>
            <input type="text" name="boardconfig" placeholder="Boardconfig" />
            <br>
            <input type="text" name="version" placeholder="Version" />
            <br>
            <br>
            <button type="submit" />Get Blobs</button></form>
        </form>
    </center><br>

    <script type="text/javascript">
function changeText2(){
    var userInput = document.getElementById('userInput').value;
    var lnk = document.getElementById('lnk');
    lnk.href = "SHSH/" + userInput + "/blobs.php" ;
    lnk.innerHTML = lnk.href;
}


</script>

Here is your blobs: <a href="" id=lnk></a> <br>
<input type='text' id='userInput' placeholder="ECID" /><br></br>
<button onclick='changeText2()'/>Find Your Blobs</button>
<br></br>

    <center>Fork me on<a href="https://github.com/danieldevofficial/SHSH-Blobs-Saver"> GitHub</a>&nbsp;-&nbsp;Follow me on <a href="https://twitter.com/notdanieldev">Twitter</a></center>
</body>

</html>
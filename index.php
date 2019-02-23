<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Taviraj" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="myCss.css">

    <title>Document</title>
    <script>
        function startTime() {
        var today = new Date();
        var h = today.getHours();
        var m = today.getMinutes();
        var s = today.getSeconds();
        m = checkTime(m);
        s = checkTime(s);
        document.getElementById('txt').innerHTML =
        h + ":" + m + ":" + s;
        var t = setTimeout(startTime, 500);
        }
        function checkTime(i) {
            if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
            return i;
        }
</script>
</head>
<body>
    <h1>
        ●Cashier
    </h1>
</body>
    <a href="/lab04/menu.csv" download>
        <p>
            <input type="button" value="Download File.">
        </p>
    </a>
    <p>
        <form action="download.php" method="post">

        Table number : <input type="text" name="username" required="required" pattern="[0-9]{1,20}">
        <br>
        <br>
    
        <input type="file" name="filename" accept=".csv" />
        <input type="submit" name="submit" value="Submit" />
        <input type="hidden" name="numberTable" value=""/>
        </form>
    </p>
    <body onload="startTime()" style="text-align :center ; font-size : 20px">
        <div>
        <?php echo date('Y-m-d');?>
        <div id="txt"></div>
    </body>
</body>

</html>
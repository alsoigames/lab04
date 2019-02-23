<?php
      $menu = array();
      $price = array();
      
      $file = fopen($_POST['filename'],"r");
      
      $i = 0;
      while(($row = fgetcsv($file,0,","))!== FALSE)
        {
          if($i != 0 ){
            $menu[] = $row[0];
            $price[] = $row[1];
          }
          $i++;
        }
      fclose($file);
      ?>
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
    <style>
        table, th {
        border: 1px solid black;
        border-collapse: collapse;
        text-align : center;
        }
        table, td{
            border: 1px solid black;
        }
    </style>
</head>
    
<body>
    <h1 style="text-align:center">    
        ●Receipt
    </h1>
    <table style=";width:80%; margin-left:15%; margin-right:15% ; font-size : 20px">
    <thead>
        <tr>
            <th>Menu</th>
            <th>Price</th> 
        </tr>
    </thead>
    <tbody>
    <?php
    for($j=0 ; $j<$i-1 ; $j++){
          echo"<tr>";
          echo"<td> $menu[$j]";
          echo"<td> $price[$j]";
          echo"</th></tr>";
        }
    ?>
    </tbody>
    </table>
    <p class = "calculete" style="text-align :center ; font-size : 20px">
        <?php
        $menuPrice = 0;
        $totalMenu = 0;
        for ($i=0; $i < count($menu)  ; $i++) { 
            # code...
            $menuPrice += $price[$i];
            $totalMenu += 1;
        }
        $vatPrice = ($menuPrice * 0.07);
        $serviceCharge = $menuPrice * 0.1;
        $totalPrice = $menuPrice + $vatPrice + $serviceCharge;
        echo"Total menu : $totalMenu<br>";
        echo"Price : $menuPrice<br>";
        echo"Vat 7% : $vatPrice <br>";
        echo"Service charge : $serviceCharge<br>";
        echo"Total price : $totalPrice Bath.<br>";
        date_default_timezone_set("Asia/Bangkok");
        echo "-----".date('Y-m-d')."-----<br>";
        echo "----".date("h:ia")."----<br>";
        echo $_POST["numberTable"];
        ?>
    </p>
    <div class = "jumbotron">
    <p style= "padding: 30px;">
    <a class="navbar-brand" href="index.php">
    <input type="button" value="Back">
    </a>
    </p>
    </div>
    
</body>
</html>

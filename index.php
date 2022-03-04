<!DOCTYPE html>
<html>
<head>
  <title>Binance</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<?php

$api_url = 'https://api-backend-binance.herokuapp.com/';

// Read JSON file
$json_data = file_get_contents($api_url);

// Decode JSON data into PHP array
$response_data = json_decode($json_data);

//  data exists in 'data' object
$user_data = $response_data->data;
    
die($user_data);

  echo   "<table class='table table-dark'>
    <thead>
      <tr>
        <th>symbol</th>
        <th>priceChange</th>
        <th>priceChangePercent</th>
        <th>lastPrice</th>
        <th>highPrice</th>
        <th>lowPrice</th>
        <th>volume</th>
      </tr>
    </thead>
    <tbody>";
    while($row = mysql_fetch_array($result))
    {
        echo "<tr>";
        echo "<td>" . $row['symbol'] . "</td>";
      
        echo "<td>" . $row['priceChange'] . "</td>";
      
        echo "<td>" . $row['priceChangePercent'] . "</td>";
      
        echo "<td>" . $row['lastPrice'] . "</td>";
      
        echo "<td>" . $row['highPrice'] . "</td>";
      
        echo "<td>" . $row['lowPrice'] . "</td>";
      
        echo "<td>" . $row['volume'] . "</td>";
      
        echo "</tr>";
    }
 
  echo "   </tbody> </table>";
   
    ?>

  </div>
</body>
</html>
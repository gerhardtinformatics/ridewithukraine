<html>
  <head>
    <title>PHP Test</title>
    <style>
      td{
        display: inline-table;
      }
    </style>
  </head>
  <body>
      <?php
      echo "<table>";
        $filedata = file_get_contents('json_data.json');
        $details = json_decode($filedata, true);
        foreach ($details as $element) {
          echo "<tr>"; 
          echo "<td>";
          echo($element['departTime']. "<br>");
          echo "</td>";

        foreach ($element['weekdays'] as $weekday){
          echo "<td>";
          echo($weekday). "<br>";
          echo "</td>";

        }

          echo "<td>";
          echo ($element['stops'][0]['address']. "<br>");
          echo "</td>";
          echo "<td>";
          echo ($element['stops']['address'][count($element['stops']['address'])-1]. "<br>");
          echo "</td>";
        

        echo "<td>";
        echo($element['deeplink']. "<br>");
        echo "</td>";
        }
        echo "</tr>";
        echo "</table>";
      ?>

  </body>
</html>
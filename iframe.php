<html>
  <head>
    <title>iframe</title>
    <link rel="stylesheet" type="text/css" href="iframe.css">
  </head>
  <body>
    <div id="iframe-container">
    <?php 
      echo '<table id="result-container-card">';
      echo '<tr>';
      echo '<td>';
      echo '<h1 class="headertext"><img src="https://avatars.githubusercontent.com/u/77687247?s=200&v=4" class="logo">Powered by Mitfahrverband</h1>';
      echo '</td>';
      echo '</tr>';
        $filedata = file_get_contents('./data/json_data.json');
        $details = json_decode($filedata, true);
        foreach ($details as $element) {
          echo '<tr>';
          echo '<td id="departTime">';
          echo($element['departTime']. '<br>');
          echo '</td>';

          echo '<td id="dateTime">';
          echo "DateTime";
          echo '</td>';


          echo '<td id="origin">';
          echo ($element['stops'][0]['address']. '<br>');
          echo '</td>';
          echo '<td id="destination">';
          echo end($element['stops'])['address']. '<br>';
          echo '</td>';
        

        echo '<td id="link">';
        echo($element['deeplink']. '<br>');
        echo '</td>';

        echo '<td>';
        echo '<input class="submit" type="submit" value="Show">';
        echo '</td>';
        }

        echo '</tr>';
        echo '</table>';
      ?>
      </div>
  </body>
</html>
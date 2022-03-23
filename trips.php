<html>
  <head>
    <title>PHP Test</title>
    <link rel="stylesheet" type="text/css" href="trips.css">
  </head>
  <body>
    <div class="container">
    <header>
    <h1 class="headertext"><img src="https://avatars.githubusercontent.com/u/77687247?s=200&v=4" class="logo">Powered by Mitfahrverband</h1>
    </header>
    <main>
      <?php 
      echo '<table id="result-container-card">';
        $filedata = file_get_contents('json_data.json');
        $details = json_decode($filedata, true);?>
        <?php
        foreach ($details as $element) {
          echo '<tr>';

          echo '<td>';
          echo($element['departTime']. '<br>');
          echo '</td>';

          echo '<td>';
          echo "DateTime";
          echo '</td>';


          echo '<td>';
          echo ($element['stops'][0]['address']. '<br>');
          echo '</td>';
          echo '<td>';
          echo end($element['stops'])['address']. '<br>';
          echo '</td>';
        

        echo '<td>';
        echo($element['deeplink']. '<br>');
        echo '</td>';

        echo '<td>';
        echo '<input class="submit" type="submit" value="Show">';
        echo '</td>';
        }

        echo '</tr>';
        echo '</table>';
      ?>
      </main>
      <div id="right">
      <div id="menu">Menü / FAQ / Hints for safe trips /.../.../.../</div>
      <div id="content1">Welcome message</div>
      <div id="search">Meta search mask</div>
      <div id="content2">Die meisten zur Verfügung gestellten Routen</div>

      <footer>
        <p>Footer/ Impressum / Kontakt / Support /.../.../.../</p>
        </footer>

      </div>
  </div>
  </body>
</html>
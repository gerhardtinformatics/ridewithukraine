<html>
  <head>
    <title>PHP Test</title>
    <link rel="stylesheet" type="text/css" href="trips.css">
  </head>
  <body>
    <div class="container">
    <header>
    <h1 class="headertext"><img src="https://avatars.githubusercontent.com/u/77687247?s=200&v=4" class="mitfahrverband-logo">Powered by Mitfahrverband</h1>
    </header>
    <main>
      <?php 
      echo '<table id="result-container-card">';
        $filedata = file_get_contents('./data/json_data.json');
        $details = json_decode($filedata, true);?>
        <?php
        foreach ($details as $element) {
          echo '<tr>';

          echo '<td id="departTime">';
          echo($element['departTime']. '<br>');
          echo '</td>';

          echo '<td id="dateTime">';
          echo "2022.03.24.";
          echo '</td>';


          echo '<td id="origin">';
          echo ($element['stops'][0]['address']. '<br>');
          echo '</td>';
          echo '<td id="destination">';
          echo end($element['stops'])['address']. '<br>';
          echo '</td>';
        

          $links = $element['deeplink'];

          $mifaz_word = "mifaz";

          if(strpos($links, $mifaz_word) !== false){
            echo '<td id="logo">';
            echo '<img src="https://ride2go.com/img/mifaz_logo.png" class="mifaz-logo">';
            echo '</td>';
        } else{
          echo '<td id="logo">';
          echo '<img src="https://ride2go.com/img/r2g_favicon.png" class="ride2go-logo">';
          echo '</td>';
        }

          echo '<td id="link">';
          echo "<a id='button1' href='$links' >Show</a>";
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
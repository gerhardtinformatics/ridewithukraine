<html>
  <head>
    <title>iframe-demo</title>
  </head>
<style>
* {
  box-sizing: border-box;
}

html {
  height: 100%;
}

body {
  background-color: #4472c4;
  min-height: 100%;
  padding: 0;
  border: 0;
  margin: 0;
  font-family: Roboto, Helvetica, Arial, sans-serif;
  color: #ffffff;
}

  .iframe-container {
  position: relative;
  overflow: hidden;
  padding-top: 56.25%;
  height: 450px;
  width: 400px;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  font-size: 10px;
}

#responsive-iframe {
  position: absolute;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  min-width: 400px;
  min-height: 450px;
}
  </style>

  <body>
    <div class="iframe-container">
  <iframe id="responsive-iframe" src="iframe.php"></iframe>
    </div>
  </body>
</html>

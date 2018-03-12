<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" type="text/css" href="../css/searchDBPage.css">
  <title>Search Alien DB</title>
</head>

<body>
  <div id="master">
    <div id="header">
      <h1>Searching Alien DB</h1>
      <h2>By Gavin B.</h2>
      <h2>Last Updated: March 5, 2018</h2>
    </div>

    <div id="database">
      <h3>Searching</h3>
      <?php include '../php/DBconnect_4parm.php'; ?>
      <?php include '../php/DBtableShow.php'; ?>
      <?php include '../php/DBclose.php'; ?>
    </div>

    <div id="instructions">
      <h3>Instructions</h3>
    </div>

    <div id="footer">
      <h3>Footer</h3>
    </div>
  </div>
</body>

</html>

<?php
session_start(); ?>
<html>

<head>
  <link rel="stylesheet" href="styles.css">
</head>

<body>
  <h1>test login</h1>
  <h2>
    <a href="protect.php">Protected</a>
  </h2>
  <hr />
  <?php
  if (isset($_SESSION["user"])) {
    ?>
    <a href="logout.php">Logout</a>
    <?php
  }
  ?>
  <!-- <h1>Hello <?php echo ($_SESSION["user"]) ?>  </h1> -->

</body>

</html>
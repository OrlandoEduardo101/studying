<html>

<head>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <h1>User login</h1>
    <?php
    if (isset($_GET["erro"])) {
        echo ("<hr/><h2>" . $_GET['erro'] . "</h2><hr/>");
    }
    ?>
    <form action="login.php" method="post">
        <p>login:<input type="text" name="login" /></p>
        <p>password:<input type="password" name="password" /></p>
        <input type="submit" value="submit" />
    </form>

</body>

</html>
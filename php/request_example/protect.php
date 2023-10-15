<?php
    session_start();
    if (!isset($_SESSION["user"])) {
        header("Location: form_login.php", true, 301);
    } else {
        ?>
        <html>

        <body>
            <h1>Hello <?php echo($_SESSION["user"]) ?></h1>
            <h2><a href="index.php">return</h2>
        </body>

        </html>
        <?php
    }
?>
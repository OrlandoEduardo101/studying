<?php
    session_start();
    $erro = "";
    if (!isset($_POST["login"]) || ($_POST["login"] == ""))
        $erro = "Input o login";
    elseif (!isset($_POST["password"]) || ($_POST["password"] == ""))
        $erro = "Input o password";
    else {
        $login = $_POST["login"];
        $password = $_POST["password"];
        if ($login != "admin" || $password != "1234") {
            $erro = "invalid login";
        } else {
            $_SESSION["user"] = "admin";
        }
    }
    if ($erro != "") {
        header("Location: form_login.php?erro=$erro", true, 301);
    } else {
        header("Location: protect.php", true, 301);
    }
?>
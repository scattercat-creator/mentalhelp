<?php
session_start();

if (isset($_GET["submit"])) {
    $subject = $_GET["subject"];
    $content = $_GET["content"];
    $username = $_SESSION["useruid"];

    include_once "dbh.inc.php";
    include_once "functions.inc.php";

    // while($subject.length > i) {
    //     if (i == " ") {
    //         header("location: ../articles.php?spacesinsubject");
    //         exit();
    //     }
    // }
    // above was to stop subjects from having spaces

    createPost($conn, $subject, $content, $username);



}


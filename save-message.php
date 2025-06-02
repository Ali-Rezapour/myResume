<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = strip_tags($_POST["name"]);
    $email = strip_tags($_POST["email"]);
    $message = strip_tags($_POST["message"]);
    $date = date("Y-m-d H:i:s");
    $entry = "[$date] $name <$email>: $message" . PHP_EOL;
    file_put_contents("messages.txt", $entry, FILE_APPEND | LOCK_EX);
    // پیام موفقیت
    echo "OK";
    exit();
}
?>
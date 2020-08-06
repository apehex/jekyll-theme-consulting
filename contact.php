<?php

$name = $email = $message = $token = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (has_required_data($_POST)) {
        $name = filter_var(
            $_POST["name"],
            FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $email = filter_var(
            $_POST["email"],
            FILTER_SANITIZE_EMAIL);
        $message = filter_var(
            $_POST["message"],
            FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $token = filter_var(
            $_POST["token"],
            FILTER_SANITIZE_URL);
    }
}

function has_required_data($request) {
    return (
        (
            isset($request['name'])
            && isset($request['email'])
            && isset($request['message'])
            && isset($request['token']))
        && (
            !empty($request['name'])
            && !empty($request['email'])
            && !empty($request['message'])
            && !empty($request['token']))   
    );
}

function send_mail () {}

?>

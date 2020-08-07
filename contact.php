<?php

$name = $email = $message = $token = $ip = "";

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
        if (filter_var(
            $_SERVER['REMOTE_ADDR'],
            FILTER_VALIDATE_IP)) {
            $ip = $_SERVER['REMOTE_ADDR'];
        }

        if is_recaptcha_valid($token) {
            send_mail($name, $email, $message);
        } else {
            send_mail($name, $email, "Got a fishy request from ".$ip)
        }
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

function is_recaptcha_valid($token) {
    $validation_url = "https://www.google.com/recaptcha/api/siteverify";
    $data = array('secret' => '6LfMccgUAAAAAEYb9GfycbY2FQR_EcEypQFG1_32', 'response' => $token);
    $options = array(
        'http' => array(
            'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
            'method'  => 'POST',
            'content' => http_build_query($data)
        )
    );
    $context  = stream_context_create($options);
    $result = json_decode(file_get_contents($validation_url, false, $context));

    return (
        ($result !== FALSE)
        && isset($result->success)
        && $result->success);
}

function send_mail ($name, $email, $message) {
    return mail(
        "youremailaddress@gmail.com",
        "Hello!",
        $message."\r\n\nFrom: ".$name." @ ".$ip,
        "From: ".$name." <".$email.">\r\nMIME-Version: 1.0\r\nContent-type: text/html\r\n");
}

?>


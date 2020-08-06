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

        if is_recaptcha_valid($token) {
            send_mail($name, $email, $message);
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
    $data = array('secret' => '{{ site.recaptcha.secretkey }}', 'response' => $token);
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
        isset($result->success)
        && $result->success);
}

function send_mail () {}

?>

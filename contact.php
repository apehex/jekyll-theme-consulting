<?php

$contact_name = $contact_email = $contact_message = $token = $contact_ip = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (has_required_data($_POST)) {
        $contact_name = urldecode(filter_var(
            $_POST["name"],
            FILTER_SANITIZE_FULL_SPECIAL_CHARS));
        $contact_email = urldecode(filter_var(
            $_POST["email"],
            FILTER_SANITIZE_EMAIL));
        $contact_message = urldecode(filter_var(
            $_POST["message"],
            FILTER_SANITIZE_FULL_SPECIAL_CHARS));
        $token = filter_var(
            $_POST["token"],
            FILTER_SANITIZE_URL);
        if (filter_var(
            $_SERVER['REMOTE_ADDR'],
            FILTER_VALIDATE_IP)) {
            $contact_ip = $_SERVER['REMOTE_ADDR'];
        }

        if (is_recaptcha_valid($token)) {
            send_mail($contact_name, $contact_email, $contact_message, $contact_ip);
        } else {
            send_mail($contact_name, $contact_email, "Tried to contact you, but his recaptcha is not valid.", $contact_ip);
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
            && !empty($request['token'])));
}

function is_recaptcha_valid($token) {
    $validation_url = "https://www.google.com/recaptcha/api/siteverify";
    $data = array('secret' => '6LfMccgUAAAAAEYb9GfycbY2FQR_EcEypQFG1_32', 'response' => $token);
    $options = array(
        'http' => array(
            'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
            'method'  => 'POST',
            'content' => http_build_query($data)));
    $context  = stream_context_create($options);
    $result = json_decode(file_get_contents($validation_url, false, $context));

    return (
        ($result !== FALSE)
        && isset($result->success)
        && $result->success);
}

function send_mail ($name, $email, $message, $ip) {
    return mail(
        "youremailaddress@gmail.com",
        "Hello!",
        (
            "You received a message on <a href='http://localhost:4000'>your website</a>.<br>\r\n"
            ."Ip: ".$ip."<br><br>\r\n"
            ."Name: ".$name."<br><br>\r\n"
            ."Email: ".$email."<br><br>\r\n"
            ."Message: ".$message."<br><br>\r\n"),
        (
            "From: ".$name
            ." <".$email.">\r\n"
            ."MIME-Version: 1.0\r\n"
            ."Content-type: text/html\r\n"));
}

?>


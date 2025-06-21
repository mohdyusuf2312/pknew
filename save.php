<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $file = 'leads.txt';
    $name = $_POST['user_name'] ?? '';
    $email = $_POST['user_email'] ?? '';
    $phone = $_POST['user_phone'] ?? '';
    $service = $_POST['service'] ?? '';
    $message = $_POST['message'] ?? '';
    $timestamp = date('Y-m-d H:i:s');

    $entry = "-----\n"
        . "Name: $name\n"
        . "Email: $email\n"
        . "Phone: $phone\n"
        . "Service: $service\n"
        . "Message: $message\n"
        . "Time: $timestamp\n";

    if (file_put_contents($file, $entry, FILE_APPEND)) {
        echo '
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <title>Thank You</title>
            <meta http-equiv="refresh" content="3; url=index.php">
            <style>
                :root {
                    --primary-solid: rgb(135, 100, 255);
                }
                body {
                    margin: 0;
                    padding: 0;
                    font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
                    background-color: #f2f2f2;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    height: 100vh;
                }
                .message-box {
                    background-color: #fff;
                    padding: 3rem;
                    border-radius: 12px;
                    box-shadow: 0 10px 25px rgba(0,0,0,0.1);
                    text-align: center;
                    max-width: 400px;
                    width: 90%;
                }
                .message-box h1 {
                    color: var(--primary-solid);
                    margin-bottom: 1rem;
                }
                .message-box p {
                    color: #444;
                    font-size: 1rem;
                }
            </style>
        </head>
        <body>
            <div class="message-box">
                <h1>Thank You!</h1>
                <p>Your message has been received. We will get back to you soon.</p>
            </div>
        </body>
        </html>';
    } else {
        echo "Error saving your details. Please try again later.";
    }
}
?>

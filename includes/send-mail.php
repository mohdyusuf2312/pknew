<?php
// Remove any output before header
header('Content-Type: application/json');

// Ensure it's a POST request
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    http_response_code(405);
    echo json_encode([
        'success' => false,
        'message' => 'Method not allowed'
    ]);
    exit;
}

try {
    // Validate required fields
    $required_fields = ['name', 'email', 'subject', 'message'];
    foreach ($required_fields as $field) {
        if (empty($_POST[$field])) {
            throw new Exception("Please fill in all required fields");
        }
    }

    // Validate email
    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        throw new Exception("Invalid email format");
    }

    $name = strip_tags($_POST['name']);
    $email = strip_tags($_POST['email']);
    $phone = strip_tags($_POST['phone'] ?? '');
    $subject = strip_tags($_POST['subject']);
    $message = strip_tags($_POST['message']);

    // Generate enquiry ID
    $enquiry_id = 'ENQ-' . date('Ymd') . '-' . rand(1000, 9999);

    // Prepare email content
    $to = ["shujaurrehman210@gmail.com", "fsyed9444@gmail.com"];
    $email_subject = "New Enquiry #{$enquiry_id} - PixelKrafts";
    
    $email_message = "
    <html>
    <head>
    <title>New Enquiry - PixelKrafts</title>
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
        .container { max-width: 600px; margin: 0 auto; padding: 20px; }
        .header { background: var(--primary-solid); color: white; padding: 20px; text-align: center; border-radius: 10px 10px 0 0; }
        .content { background: #f8f9fa; padding: 30px; border-radius: 0 0 10px 10px; }
        .enquiry-details { margin: 20px 0; }
        .footer { text-align: center; margin-top: 20px; font-size: 12px; color: #666; }
        .info-label { font-weight: bold; color: var(--primary-solid); }
        .message-box { background: white; padding: 15px; border-radius: 5px; margin: 15px 0; }
    </style>
    </head>
    <body>
    <div class='container'>
        <div class='header'>
            <h2>New Enquiry Received!</h2>
            <p>Enquiry ID: #{$enquiry_id}</p>
        </div>
        
        <div class='content'>
            <div class='enquiry-details'>
                <p><span class='info-label'>Name:</span> {$name}</p>
                <p><span class='info-label'>Email:</span> {$email}</p>
                " . ($phone ? "<p><span class='info-label'>Phone:</span> {$phone}</p>" : "") . "
                <p><span class='info-label'>Subject:</span> {$subject}</p>
                
                <div class='message-box'>
                    <p><span class='info-label'>Message:</span></p>
                    <p>" . nl2br($message) . "</p>
                </div>
            </div>

            <div class='footer'>
                <p>This enquiry was received on " . date('d M Y, h:i A') . "</p>
                <p>PixelKrafts - Digital Excellence</p>
            </div>
        </div>
    </div>
    </body>
    </html>";

    // Email headers
    $headers = array(
        'MIME-Version: 1.0',
        'Content-type: text/html; charset=UTF-8',
        'From: PixelKrafts <noreply@pixelkrafts.com>',
        'Reply-To: ' . $email,
        'X-Mailer: PHP/' . phpversion()
    );

    // Send email to both recipients
    $success = true;
    foreach ($to as $recipient) {
        if (!mail($recipient, $email_subject, $email_message, implode("\r\n", $headers))) {
            error_log("Failed to send email to {$recipient} from contact form");
            $success = false;
        }
    }

    if (!$success) {
        throw new Exception("Failed to send email. Please try again later.");
    }

    echo json_encode([
        'success' => true,
        'message' => 'Thank you! Your message has been sent successfully.'
    ]);

} catch (Exception $e) {
    http_response_code(400);
    echo json_encode([
        'success' => false,
        'message' => $e->getMessage()
    ]);
} 